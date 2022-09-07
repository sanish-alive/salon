<?php
session_start();
$auth=1;
if(isset($_SESSION['auth']) && $_SESSION['auth']=='auth'){
    $auth="Logined";
}

require "connection.php";
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
    <link rel="stylesheet" href="css/services.css">
    
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
<!--Page title-->
<section id="page__title">
    <div class="container">
        <h2 class="page__title__text">Explore Our Services</h2>
    </div>
</section>

<section id="Grid">
    <div class="container">
        <div class='serviceGrid__wrapper'>
    <?php
    $i = 0;
    $query = "SELECT * FROM service";
    $retval = mysqli_query($conn, $query);

    while($data = mysqli_fetch_assoc($retval)){

    ?>
    
        
            <div class="serviceGrid__item" onclick="window.location.href='bookings.php?id=<?php echo $data['sid']; ?>'">
                <div class="serviceGrid__item__img">
                    <img src="../serviceimage/<?php echo $data['simage']; ?>">
                </div>
                <div class="serviceGrid__item__info">
                    <h3 class="serviceGrid__item__title"><?php echo $data['sname']; ?></h3>
                    <h3 class="serviceGrid__item__price"><?php echo $data['scost']; ?></h3>
                        
                </div>
            </div>
            <?php
    }
        ?>
    </div>
        </div>

        
</section>
        <!--ENd -->

 


<
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
                        <a href="Services.php">Servicces</a>
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