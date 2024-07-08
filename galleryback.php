<?php
include('header.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    $errors = [];
    $uploaded_files = [];

    $file_count = count($_FILES['image']['name']);
    
    for ($i = 0; $i < $file_count; $i++) {
        $filename = $_FILES['image']['name'][$i];
        $filetmpname = $_FILES['image']['tmp_name'][$i];
        $filesize = $_FILES['image']['size'][$i];
        $fileerror = $_FILES['image']['error'][$i];
        
        $filext = explode('.', $filename);
        $fileactualext = strtolower(end($filext));
        
        $allowed = array('jpg', 'jpeg', 'png', 'gif');

        if (in_array($fileactualext, $allowed)) {
            if($fileerror === 0) {
                if($filesize < 1000000) {
                    $filenamenew = uniqid('', true).".".$fileactualext;
                    $filedestination = 'sqlimages/'.$filenamenew;
                    
                    if (move_uploaded_file($filetmpname, $filedestination)) {
                        $uploaded_files[] = $filedestination;
                    } else {
                        $errors[] = "Error moving file '$filename'.";
                    }
                } else {
                    $errors[] = "Your file '$filename' is too big.";
                }
            } else {
                $errors[] = "Error uploading file '$filename'.";
            }
        } else {
            $errors[] = "Invalid file type: '$filename'.";
        }
    }

   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if (isset($_POST['delete_image'])) {

            $imageId = $_POST['delete_image'];
            $sql_delete = "DELETE FROM pic WHERE `id` = $imageId";
    
            if ($conn->query($sql_delete) === TRUE) {
                header("Location: gallery.php");
                exit();
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }
    }

    if (!empty($uploaded_files)) {
        foreach ($uploaded_files as $file) {
            $sql = "INSERT INTO pic (`name`, img_dir) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $filename = basename($file); 
            $stmt->bind_param("ss", $filename, $file);
            $stmt->execute();
        }
        
        header('Location: galleryback.php?uploadsucces');
        exit();
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}

$sql = "SELECT `name`, img_dir FROM pic";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='parent'>";
    echo "<h1 class='our'> Our Services</h1>";
    echo "<div class='maps'> ";
    echo "<div class='gallery'>";
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $img_dir = $row['img_dir'];
        echo "<img src='$img_dir' alt='$name'>";
    }
    echo "</div>"; 
    echo "</div>"; 
    echo "</div>";
    echo "</div>";
} else {
    echo "No images found.";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
    <style>


        .maps {
            background-size: 1650px;
            background-image: url('images/Group (2).png');
            background-repeat: no-repeat;
            background-position: center right;
        }
     
        .parent {
            background: rgba(217, 217, 217, 1);
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
                
        .gallery {
            z-index: 1;
            position: relative;
            padding-top: 80px;
            width: 72%;
            display: flex;
            flex-wrap: wrap;
            flex: 0 1 calc(100%/3 - 20px*2);
            margin: 0 auto;
            gap: 65px 8%;
            padding-bottom:126px;

        }

        .gallery img {
            height: 490px;
            width: 28%;
            
        } 
       
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 999;
            justify-content: center;
            align-items: center;
        }

        .lightbox-img {
            max-width: 90%;
            max-height: 90%;
            margin: auto;
            display: block;
        }
    </style>
</head>
<body>
<div class="overlay" id="overlay">
        <img id="lightbox-img" class="lightbox-img">
    </div>

<?php include('footer.php'); ?>
<script>
     const images = document.querySelectorAll('.gallery img');
        const overlay = document.getElementById('overlay');
        const lightboxImg = document.getElementById('lightbox-img');

        images.forEach(img => {
            img.addEventListener('click', () => {
                lightboxImg.src = img.src;
                overlay.style.display = 'flex';
            });
        });

        overlay.addEventListener('click', () => {
            overlay.style.display = 'none'; 
        });
</script>
</body>
</html>
