<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script> src = 'login.js'</script>
    <script src='loginjs.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>

<header>

        <div class="ourparent">
            <div class="logo">
                <img class= 'frame' src="images/Frame.png">
                <div class="menuimg">
                    <img src="images/png-clipart-computer-icons-font-awesome-user-interface-font-awesome-users-angle-text.png">
                </div>
                <div class="bordertop">
                    <div class="ilclass">
                        <ul>
                            <li>
                                About us  
                            </li>

                            <li>
                                Services
                            </li>

                            <li>
                                Countries
                            </li>

                            <li>
                                News
                            </li>

                            <li>
                                Gallery
                            </li>
                            <li>
                                career
                            </li>
                            <li>
                                document
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="rightparent">
                    <span>LOGIN</span>
                    <div class="rightpicture">
                        <img src="images/001-united-states 1.png">
                    </div>
                </div>
            </div>
        </div>

    </header>

<main>

    <div class="parent">
        <form method='post' action='loginsql.php'>
            <div class='span'>  
                <span>Log in</span>
            </div>

            <div class='firstinput'>
                <div class='firstinputparent'>
                    <div class='firstinputspan'>
                        <span> Email address or user name</span>
                    </div>  
                    <input type='email' name='loginEmail' required>
                </div>

            </div>

            <div class='secondinput'>
                <div class='secondinputparent'>
                    <span> Password </span>
                    <div class='parentpic'>

                        <div class='icon'>
                            <img src='images/icon.png'>
                            <div class='eye'>
                                <img src='images/iconmonstr-eye-9.png'>
                            </div>
                        </div>

                        
                        <div class='hide'>
                            <span>Hide</span>
                        </div>
                    </div>
                </div>

                <div class='second'>
                    <input type='password' name='loginPass' class='passlog'value="" required >
                </div>
                <label class="container">Remember me
                <input type="checkbox" class="red">
                <span class="checkmark"></span>
                </label>
            </div>

            <div class='lastspan'>
                <p> By continuing, you agree to the <span>  Terms of use  </span>  and  <span>  Privacy Policy.  </span > </p>
            </div>

            <div class='button'>
                <button type='submit' name='logsubmit'>Log in</button>
            </div>
            
            <div class='forgetpass'>
                <span>Forget your password</span>
            </div>

            <div class='signup'>
                <p>Don’t have an acount?  <span>Sign up</span> </p>
            </div>

        </form>

        <div class='map'>
            <div class='mapjr'>
                <img src='images/worldmap_purple 1.png'>
            </div>

            <div class='car'>
                <img src='images/Untitled-1 1.png'>
            </div>
        </div>

    </div>
</main>

    <footer>
        <form class='secondform'>
            <div class='emailform'>
                <div class='firstdiv'>
                    <input type = 'text' placeholder= 'Email'/>
                    <button>Subscribe Now</button>
                </div>
                <div class='seconddiv'>
                    <span>Subscribe to our newsletter and unlock a world of exclusive benefits. 
                        
                        Be the first to know about our latest products, special promotions, and exciting updates. 
                    </span>
                </div>
            </div>
        </form>
        <div class='allparent'> 
            <div class='firstallarent'>
                    <div class='parentfirst'>
                        <span class='size'>Contact Us</span>
                    </div>

                <div class='contactpsanparent'> 
                    <div class='contact'>
                        <img src='images/Vector (14).png'>
                    </div>
                    
                    <div class='contactspans'>
                        <span > +374 12203939 </span>
                        <span > +374 11223939</span>
                        <span > +374 43 023939 </span>
                        <span >office@garantlogistics.com </span>
                        <span > sales@garantlogistics.com </span>
                    </div>              
                </div>
            </div>

            <div class='secondallparent'>
                <div class='parentsecond'>
                    <span class='size'>Business Hours</span>
                </div>

                <div class='businesparent'>
                    <div class='contact'>
                        <img src='images/tabler_clock-hour-4.png'>
                    </div>

                    <div class='spans'>
                        <span class='display'> Monday - Friday: <p>10 am to 7 pm</p></span>
                        <span class='display2'> Sunday & Saturday: <p> Clossed</p></span>
                    </div>
                </div>
            </div>

            <div class='threeallparent'>
                <div class='threeparent'>
                    <span class='size'>Useful Links </span>
                </div>
                <div class='on'>
                    <div class='docum'>
                        <span class='height'> Documentation > </span>
                        <span class='height'> Services > </span>
                        <span class='height'> Countries > </span>
                    </div>

                    <div class='galery'>
                        <span class='height'> Gallery > </span>
                        <span class='height'> About > </span>
                        <span class='height'>News > </span>
                    </div>
                </div>

            </div>
        </div>   

        <div class='vectors'>
            <div class='margin'>
                <img src='images/Vector (15).png'>
                <img src='images/basil_viber-solid.png'>
                <img src='images/ic_baseline-telegram.png'>  
            </div>
        </div>
            
        <div class='last'>
            <span> © Copyright 2023 - Garant Logistics </span>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src=login.js> </script>
    
</body>
</html>