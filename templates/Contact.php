<?php
session_start();
$auth=1;
if(isset($_SESSION['auth']) && $_SESSION['auth']=='auth'){
    $auth="Logined";
}
require "connection.php";

if(isset($_POST['submit'])){
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $query = "INSERT INTO contact(`firstname`, `lastname`, `email`, `subject`, `message`) VALUES ('$firstname', '$lastname', '$email', '$subject', '$message')";
    if(mysqli_query($conn, $query)){
        echo "<script>alert('Enquiry added')</script>";
        header("location: Home.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Client Management System</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/component.css">
    
  
</head>
<body>

<!--NAV Section-->
<div class="nav">
    <div class="container">
        <div class="nav__wrapper">
            <a href="./home.php" class="logo">
                <img src="../Images/logs.png" alt="Salon Client">
                 </a>
                 <nav>
                    <div class="nav__icon">
                    <svg
                     xmlns="http://www.w3.org/2000/svg"
                     width="24"
                     height="24"
                     viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
>
                 <line x1="3" y1="12" x2="21" y2="12" />
                 <line x1="3" y1="6" x2="21" y2="6" />
                 <line x1="3" y1="18" x2="21" y2="18" />
</svg>
</div>
<div class="nav__bgOverlay"></div>
<ul class="nav__list">
    <div class="nav__close">
    <svg
   xmlns="http://www.w3.org/2000/svg"
   width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <line x1="18" y1="6" x2="6" y2="18" />
  <line x1="6" y1="6" x2="18" y2="18" />
</svg>
</div>
<div class="nav__list__wrapper">
    <li><a href="Home.php" class="nav__link">Home</a></li>
    <li> <a href="Services.php" class="nav__link">Services</a></li>
    <li> <a href="About.php" class="nav__link">About Us</a></li>
    <li><a href="Contact.php" class="nav__link">Contact</a></li>
    <?php
    if($auth=="Logined")
    {
        echo"<li><a href='userpage.php' class='nav__link'>Profile</a></li>";
        echo"<li><a href='logout.php' class='nav__link'>Logout</a></li>";
    }
    else{

   echo "<li></li><a href='Login.php' class='nav__link'>Login</a></li>";
    }
    ?>
</div>
</ul>
</nav>
</div>
</div>
</div>
<!-- End of nav section -->

<!--End-->
<!--Info Section-->
<section id="storeInfo">
    <div class="container">
        <div class="storeInfo__wrapper">
            <div class="storeInfo__item">
                <div class="storeInfo__icon">
                    <img src="../Images/nc.png" alt="icon">
                </div>
                <h3 class="storeInfo__title">
                    7AM - 8PM
                </h3>
                <p class="storeInfo__text">
                    Opening Hour
                </p>
            </div>
                
                        <div class="storeInfo__item">
                            <div class="storeInfo__icon">
                                <img src="../Images/location.png" alt="icon">
                            </div>
                        
                            <h3 class="storeInfo__title">
                             kichapokhari
                            </h3>
                            <p class="storeInfo__text">
                                Address
                            </p>
                        
                        </div>
            
                                    <div class="storeInfo__item">
                                        <div class="storeInfo__icon">
                                            <img src="../Images/call.png" alt="icon">
                                        </div>
                                        <h3 class="storeInfo__title">
                                            01-24553210
                                        </h3>
                                        <p class="storeInfo__text">
                                            Call Now
                                        </p>
                                    </div>
        </div>
    </div>

</section>

<!--End Info section-->
<!--Contact form section-->
<section id="forms">
    <div class="container">
        <h3 class="forms__title">Contact & Enquiry</h3>
        <div class="forms__wrapper">
            <form action="#" method="post">
                <div class="forms__group">
                    <label for="firstName">First Name</label>
                    <input type="text"  id="firstName" name="first_name" required>
    
                <div class="forms__group">
                    <label for="LasttName">Last Name</label>
                    <input type="text" id="LastName" name="last_name" required>
        
                <div class="forms__group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
            
                <div class="forms__group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                
                <div class="forms__group forms__group__full">
                    <label for="message">Message</label>
                    <textarea type="message" id="message" name="message" cols="30"
                    rows="10"></textarea>
                </div>
            </div>
            </div>
            </div>

                <button type="submit" name="submit" class="btn primary_btn">Send</button>
            </form>
    </div>
    </div>

</section>
<!--Footer-->
<footer>
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__col1">
                <div class="footer__logo">
                <img src="../Images/logs.png" alt="Salon Management">
                </div>
                <p class="footer__desc">
                    Life is just so beautiful like you, just need some time to freshen up.
                </p>
                <div class="footer__socials">
                    <h4 class="footer__socials__titles">Follow us</h4>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                >
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                            </svg>
                            </a>

                            <a href="#">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              >
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                              </svg>
                            </a>

                            <a href="#">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              >
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                              </svg>

                            </a>
                </div>
            </div>
            <div class="footer__col2">
                <h3 class="footer__text__title">
                    Links
                </h3>
                <ol class="footer__text">
                    <li>
                        <a href="Home.php">Home</a>
                    </li>
                    <li>
                        <a href="Services.php">Services</a>
                    </li>
                    <li>
                        <a href="About.php">About Us</a>
                    </li>
                    
                    <li>
                        <a href="Contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="Login.php">Login</a>
                    </li>
                    
                    <li>
                        <a href="#">Privary and Policy</a>
                    </li>
                </ol>
            </div>
            <div class="footer__col2">
                <h3 class="footer__text__title">
                    Support
                </h3>
                <ol class="footer__text">
                    
                    <li>
                        <a href="Contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="#">Support Center</a>
                    </li>
                    <li>
                        <a href="#">Feedback</a>
                    </li>
                </ol>
            </div>
            <div class="footer__col2">
                <h3 class="footer__text__title">
                    Contact
                </h3>
                <ol class="footer__text">
                    
                    <li>
                        <a href="tel:01-24553210">01-24553210</a>
                    </li>
                    <li>
                        <a href="mail to:salonworld2020@gmail.com">salonworld2020@gmail.com</a>
                    </li>
                    <li>
                        <a href="#">kichapokhari,kathmandu</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</footer>
<div id="copyright">
    <div class="container">
        <p class="copyright__text">
            © copyright 2022 Salon Client Management | All rights reserved

        </p>

    </div>
</div>
<!--End of footer-->

    
</body>
</html>