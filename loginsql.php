
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
<?php

session_start();

if (isset($_POST['loginEmail']) && isset($_POST['loginPass'])) {
    $link = mysqli_connect("localhost", "root", "", "registration");
    
    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($link, $_POST['loginEmail']);
    $pass = $_POST['loginPass'];

    $sql = "SELECT * FROM reg WHERE email=?";
    $stmt = mysqli_prepare($link, $sql);

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($pass, $row['pass'])) {
            $_SESSION['loginEmail'] = $email; 
            $_SESSION['loginPass'] = $pass;  
            $cookie_value = $row['email'];
            $expiry = time() + (86400 * 30);
            setcookie('user', $cookie_value, $expiry, '/');
            mysqli_stmt_close($stmt);
            mysqli_close($link);
            header("Location: firstpage.php");
            exit();
        } else {
            header('location: login.php');
            die;
        }
    } else {
        echo "User not found.";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($link);

} else {
        header("Location: login.php"); 
    } 
?>
    <script src='loginserver.js'> </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 </body>
 </html>
