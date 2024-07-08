<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_image'])) {
    $imageId = $_POST['delete_image'];

    $stmt = $conn->prepare("SELECT img_dir FROM pic WHERE id = ?");
    $stmt->bind_param("i", $imageId);
    $stmt->execute();
    $stmt->bind_result($img_dir);
    $stmt->fetch();
    $stmt->close();
    
    $deleteStmt = $conn->prepare("DELETE FROM pic WHERE id = ?");
    $deleteStmt->bind_param("i", $imageId);
    
    if ($deleteStmt->execute()) {
        if (file_exists($img_dir)) {
            unlink($img_dir);
            $response = array(
                'status' => 'success',
                'message' => 'Image deleted successfully'
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'Image file does not exist or cannot be deleted'
            );
        }
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Error deleting image from database: ' . $conn->error
        );
    }
    
    echo json_encode($response);
    exit();
}

$sql = "SELECT id, name, img_dir FROM pic";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="gallery.css">
    <style>
        /* Inline CSS for demonstration */
        .parents {
            margin: 0 auto;
            width: 71%;
        }
        .delete {
            padding: 50px;
            margin: 0 auto;
            width: 83%;
            cursor: pointer; 
        }
        .delete img {
            width: 25px !important;
        }
        .parents img {
            width: 200px;
        }
        .gallery {
            background: white;
        }
        .maps {
            background-size: 1650px;
            background-image: url('images/Group (2).png');
            background-repeat: no-repeat;
            background-position: center right;
        }
        .parent {
            background: white;
        }
        .our {
            padding-top: 99px;
            font-family: Geometr415 Blk BT;
            font-size: 40px;
            font-weight: 400;
            line-height: 47.95px;
            color: rgba(153, 27, 31, 1);
            width: 71%;
            margin: 0 auto;
        }

        .image-container {
            position: relative;
            display: inline-block;
            margin: 10px;
        }

        .image-wrap {
            overflow: hidden;
            position: relative;
            cursor: pointer;
        }

        .thumbnail-img {
            width: 200px; /* default size */
            transition: transform 0.2s ease-in-out;
        }

        .enlarged-img {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            max-width: 100%;
            max-height: 100%;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 900;
            display: none;
        }

        #uploadedImages {
            display:flex;
            flex-direction:column;
        }
    </style>
</head>
<body>
    <main class="gallery">

    <form class="formfile" action="galleryback.php" method="post" enctype="multipart/form-data">
            <div class="parent">
                <div class="container">
                    <div id="selectedBanner"></div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="image[]" id="image" multiple />
                        <input class="sub" type="submit" value="Upload Image" name="submit">
                    </div>
                </div>
            </div>
        </form>
        
        <div class="parents">
            <div id="uploadedImages">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $img_dir = $row['img_dir'];
                        echo "<div class='image-container'>";
                        echo "<div class='image-wrap'>";
                        echo "<img src='$img_dir' alt='$name' class='thumbnail-img'>";
                        echo "</div>";
                        echo "<form class='delete_image' method='post' action='gallery.php' style='display:inline;'>";
                        echo "<input type='hidden' name='delete_image' value='$id'>";
                        echo "<button type='submit' class='delete-button'>Delete</button>";
                        echo "</form>";
                        echo "</div>";
                    }
                } else {
                    echo "No images found.";
                }
                ?>
            </div>
        </div>
      
    </main>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.thumbnail-img').on('click', function() {
            var imgSrc = $(this).attr('src');
            var imgAlt = $(this).attr('alt');
            
            var enlargedImg = $('<img>').attr('src', imgSrc).attr('alt', imgAlt).addClass('enlarged-img');
            var overlay = $('<div>').addClass('overlay');
            
            $('body').append(overlay).append(enlargedImg);
            
            $('.overlay').fadeIn();
            enlargedImg.fadeIn();
            
            enlargedImg.on('click', function() {
                $('.overlay').fadeOut(function() {
                    $(this).remove();
                });
                enlargedImg.fadeOut(function() {
                    $(this).remove();
                });
            });
        });

        $('.delete-button').on('click', function(e) {
            e.preventDefault();
            if (confirm("Are you sure you want to delete this picture?")) {
                var form = $(this).closest('form'); 
                var formData = form.serialize(); 

                $.ajax({
                    type: "POST",
                    url: form.attr('action'), 
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        if (response.status === 'success') {
                            form.closest('.image-container').remove(); 
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText); 
                        alert("An error occurred while deleting the image.");
                    }
                });
            }
        });
    });
    </script>
</body>
</html>
