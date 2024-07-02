<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="firstpage.css">
    <link rel="stylesheet" href="footer.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src='loginserver.js'></script>

    <title>Document</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <script src="loginserver.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
<?php 
$link = mysqli_connect("localhost", "root", "", 'registration');

if(isset($_COOKIE['user'])) {
    $email = $_COOKIE['user'];
    $sl = "SELECT email FROM reg WHERE email = '$email'";
    $result = mysqli_query($link, $sl);

    if(mysqli_num_rows($result) == 0) {
        header('Location: login.php');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}

mysqli_close($link);

?>

<header>
    <div class='videos'>    
                <video autoplay muted loop id="myVideo">
            <source src="images/Project 1.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
            </video>
            <div class='biglogo'>
            <div class='vectordiv'>
                 <img class='vectorG' src='images/Vector (16).png'>
            </div>
            <div class='hrdiv'>
                <hr>
                <span class='logospan'>We are committed to be the leading </span>
                <hr>
            </div>
                <h1 class='worldclass'>WORLD CLASS</h1>
                <h1 class='logistics'>Logistics</h1>
            <button class='buttons'>SUBMIT ENQUIRY</button>  
        </div>
        <div class='logo'>
            <img src='images/Frame.png' class='logoimg'>
            <img class='menuicon' src='images/b54df198d21ac86bedead6c4a364ef32.jpg'>
            <ul class='headerul'>
                <li>About us</li>
                <li>Services</li>
                <li>Countries</li>
                <li>News</li>
                <li>Gallery</li>
                <li>Career</li>
                <li>Document</li>
            </ul>
            <div class='loginandflagparent'>
                <span class='loginspan'> Login </span>
                <img class='usaimg'src='images/001-united-states 1.png'>
            </div>
        </div>
      
        <div class='triangle'>
            <div class='vectorparent'>
                <img class='vectorclass' src='images/Group 159044.png'>
                <div class='spanparent'>
                    <span class='hundred'>100+</span><span class='Countries'>Countries Worldwide</span>
                </div>
            </div>
            <div class='vectorparent'>
                <img class='vectorclass' src='images/Group 159044.png'>
                <div class='spanparent'>
                    <span class='hundred'>7+</span><span class='Countries'>Years Experience</span>
                </div>
            </div>
            <div class='vectorparent'>
                <img class='vectorclass' src='images/Group 159044.png'>
            <div class='spanparent'>  
                <span class='hundred'>360+</span><span class='Countries'>Trust of Clients</span>
            </div>
            </div>
            <div class='vectorparent'>
                <img class='vectorclass' src='images/Group 159044.png'>
            <div class='spanparent'>
                <span class='hundred'>60k+</span><span class='Countries'>Tones of Cargos</span>
            </div>
            </div>
        </div>   
        <div class='ourservicesa'>
            <span>Our Services</span>
        </div>

    <div class="wrapper"> 
        <ul class="carousel">
            <li class="card"> 
                <div class="imgcar"><img src= 'images/Rectangle 3740.png ' alt="" draggable="false"> </div> 
                <div class='carhover'><img src='images/Rectangle 3741.png'></div>
                
                <span class='thefirstspan'>ROAD FREIGHT TRANSPORTAT ION (FTL/LTL)</span>
                <div class='readparent'>
                    <span class='readmore'>READ MORE</span>
                    <img  class='readmoreimg'src='images/Vector (18).png'>
                </div>
            </li>

            <li class="card"> 
                <div class="img"><img src= 'images/Rectangle 3721.png' alt="" draggable="false"> </div> 
                <div class='carhover'><img src='images/Rectangle 3721.png'></div>
                <span class='transport' >SEA TRANSPORTATION (FCL/LCL/FR/)></span>
                <div class='readparent'>
                    <span class='readmore'>READ MORE</span>
                    <img  class='readmoreimg'src='images/Vector (18).png'>
                </div>
            </li> 
            
            <li class="card"> 
                <div class="img"><img src= 'images/Rectangle 3723 (1).png' alt="" draggable="false"> </div> 
                <div class='carhover'><img src='images/Rectangle 3723 (1).png'></div>
                <span class='rail'>RAIL TRANSPORTATION</span>
                <div class='readparent'>
                    <span class='readmore'>READ MORE</span>
                    <img  class='readmoreimg'src='images/Vector (18).png'>
                </div>
            </li> 
            <li class="card"> 
                <div class="imgair"><img class='imgairclass' src= 'images/24143cf927f01fdb0cd669268534b9ee.jpeg'></div> 
                <div class='carhover'><img src='images/24143cf927f01fdb0cd669268534b9ee.jpeg'></div>
                <span class='airtrans'>AIR TRANSPORTATION</span>
                <div class='readparent'>
                    <span class='readmore'>READ MORE</span>
                    <img  class='readmoreimg'src='images/Vector (18).png'>
                </div>
            </li> 
        </ul> 
    </div>
    <div class='buttonparent'>
        <div class='border'></div>
        <button class='button'>ALL SERVICES</button>
    </div>
</header>

<main>
    <span class='ourgolbalspan'>OUR GLOBAL DESTINATIONS</span>
    <div class='ourparent'>
            <div class='mapairparent'>
                <img class='secondmap'src='images/Group (1).png'>
            </div>
        <div class='globus'>
            <img class='globimg'src='images/Asia_(orthographic_projection)_without_New_Guinea 1.png'>
            <span class='globspan'>ASIA</span>  
        </div>
        <div class='globustextparent'>      
            <div class='globustext'>
                <div class='imgparents'>
                    <img class='secondair' src='images/airplane (1).png'>
                </div>
                    <p>Garant Logistics carries out cargo transportation in more than 100 countries around the world, providing a full range of 
                    logistic services for air, sea and land cargo transportation and ensuring fast, safe and reliable transportation of your cargo.</p>
            </div>
            <div class='countryparent'>
                <span class='country'>EU</span>
                <span class='country'>EAEU</span>
                <span class='country'>ASIA</span>
                <span class='country'>OTHER</span>
            </div>
        </div>
    </div>
</main>
    <div class='newsspandiv'>
        <span class='newsspan'>News & Career</span>
    </div>
    <div class="wrapper2">
      <ul class="carousel2">
        <div class='parentofslide'>
            <li class="card2">
                <div class="img2"><img src="images/img-1.jpg"></div>
            </li>
            <div class='spanparentslide'>
                <span class='inter'>10 april, 2025</span>
                <span class='title'>This is title of the travel package that is being featured here.</span>
            </div>
        </div>
        <div class='parentofslide'>
            <li class="card2">
                <div class="img2"><img src="images/img-1.jpg"></div>
            </li>
            <div class='spanparentslide'>
                <span class='inter'>5 april, 2025</span>
                <span class='title'>The languages only differ in their grammar, their pronun and their most common words.</span>
            </div>
        </div>
        <div class='parentofslide'>
            <li class="card2">
                <div class="img2"><img src="images/img-1.jpg"></div>
            </li>
            <div class='spanparentslidethree'>
                <span class='inter'>30 march, 2024</span>
                <span class='title'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</span>
            </div>
        </div>
        <div class='parentofslide'>
            <li class="card2">
                <div class="img2"><img src="images/img-1.jpg"></div>
            </li>
            <div class='spanparentslidethree'>
                <span class='inter'>30 march, 2024</span>
                <span class='title'>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</span>
            </div>
        </div>
      </ul>

        <div class='buttonparentsecond'>
            <div class='bordersecond'></div>
            <button class='buttonsecond'>ALL NEWS</button>
        </div>
    </div> 
        <?php include 'footer.php';?>'
        
</body>
</html>



