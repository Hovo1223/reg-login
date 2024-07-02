<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" href="login.css" >
    <link rel="stylesheet" href="reg.css" >
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<div>
<?php include 'header.php'?>
</div>
<main>
    <div class='allparents'>
        <form class='validate' method='post' action='regserver.php'>
            <div class='parentcreatealredy'>
                <h1 class='create'>Create an account</h1>
                <h5 class='alredy'>Already have an account? <span class='login'>Log in</span></h5>
            </div>

                <div class='parentfordisplayflex'>
                <div class='firstname'>
                    <label>First name</label>
                    <input name= 'firstname' type='text' class='firstinput'>
                </div>

                <div class='lastname'>
                    <label>Last name</label>
                    <input name='lastname' type='text' class='secondinput'>
                </div>
            </div>

                <div class='emailregistration'>
                    <label>Email address</label>
                    <input name='email' type='email' class='emailinput'>
                </div>

            <div class='passwordinputregparent'>
                <div class='Password'>
                    <label>Password</label>
                    <input name='pass' type='password' class='passinput'>
                </div>

                <div class='confirmpass'>
                    <label>Confirm your password</label>
                    <input name = 'confpass' type='password' class='confirmpassinput'>
                </div>
            </div>

            <span class='use8or'>Use 8 or more characters with a
                 mix of letters, numbers & symbols</span>

            <label class="container">Show password
                <input type="checkbox" class="red">
                <span class="checkmark"></span>
            </label>

            <div class=loginandbuttonparent>
                <span class='logininstead'>log in instead</span>
                <input type='submit' class='buttonlogin' value='Create an account '>
            </div>
        </form>
    </div>

    <div class='mapparent'>
        <img class='mapworld' src='images/worldmap_purple 1.png'>
        <img class='mapcar' src='images/Untitled-1 1.png'>
    </div>

</main>

<div>
<?php include 'footer.php'?>
</div>


</body>
</html>