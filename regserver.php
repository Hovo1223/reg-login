<?php
    $link = mysqli_connect("localhost", "root", "", 'registration');
    if ($link === false) {
        die('Error: Could not connect. ' . mysqli_connect_error());
    }
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $email = $_POST['email'];
    $pass=  $_POST['pass'];
    $passconf = $_POST['confpass'];
    $sl = "SELECT email FROM reg WHERE email = '" . $_POST['email'] . "'";
        $result = mysqli_query($link, $sl);

if (mysqli_num_rows($result) > 0) {
        header('Location: reg.php');
          exit;
    } else {
        header('Location: firstpage.php');
        echo 'Welcome!'; 
    }

    if (isset($_POST['firstname'])) {
    
        $firstname = mysqli_real_escape_string($link, $_POST['firstname']); 
        $lastname = mysqli_real_escape_string($link, $_POST['lastname']);
        $email = mysqli_real_escape_string($link, $_POST['email']);
        $pass = mysqli_real_escape_string($link, $_POST['pass']);
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO reg (firstname, lastname, email, pass) 
                VALUES ('$firstname', '$lastname', '$email', '$hashed_pass')";
        if (mysqli_query($link, $sql)) {
            echo "Records inserted successfully.";
        } else {
            echo "Error: Could not execute $sql. " . mysqli_error($link);
        }    
    } 


    
?>
