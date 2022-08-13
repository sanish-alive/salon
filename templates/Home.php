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
    <link rel="stylesheet" href="css/h.css">
</head>
<body>

<!--NAV Section-->
<div class="nav">
    <div class="container">
        <div class="nav__wrapper">
            <a href="./Home.php" class="logo">
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
    <li></li><a href="Login.php" class="nav__link">Login</a></li>

</div>
</ul>
</nav>
</div>
</div>
</div>
<!-- End of nav section -->
<!--Start-->
<section id="hero">
    <div class="container">
        <div class="hero__wrapper">
        <div class="hero__left">
            <div class="hero__left__wrapper">
                <h1 class="hero__heading">Everything has beauty,but not everyone sees it</h1>
                <p class="hero__info">We are here to utilize your time so that you can invest some precious time for 
                    your nails,hair,skin,and body which we don't do it usually. </p>
                <div class="button__wrapper">
                    <a href="services.html" class="btn primary_btn">Explore Services</a>
                    <a href="#" class="btn">Book Time</a>
                </div>
            </div>
        </div>
        <div class="hero__right">
            <div class="hero__imWrapper">
                <img src="../Images/home.png" alt="facilities">
            </div>
        </div>
       </div>
      </div>

</section>
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
<!--Speciality-->
<section id="ourSpecials">
    <div class="container">
        <div class="ourSpecials__wrapper">
            <div class="ourSpecials__left">
                <div class="ourSpecials__service">
                    <div class="ourSpecials__service__img">
                        <img src="../Images/ped.png" alt="spa">

                    </div>
                    <h2 class="ourSpecials__service__title">Deluxe Pedicure</h2>
                    <h3 class="ourSpecials__service__price">Rs.3500</h3>
                    <div class="ourSpecials__service__stars">
                    <img src="../Images/star.png" alt="stars">
                    </div>
                    <p class="ourSpecials__service__text">
                    It adds specialized treatments like paraffin wax dip,
                    mud masks,or seawed treatment to the standard process.
                    It includes formulated oils for specific types or skin concerns.
                    </p>
                </div>
        
            
                <div class="ourSpecials__service">
                    <div class="ourSpecials__service__img">
                        <img src="../Images/nails.png" alt="spa">

                    </div>
                    <h2 class="ourSpecials__service__title">Nail Extension</h2>
                    <h3 class="ourSpecials__service__price">Rs.5000</h3>
                    <div class="ourSpecials__service__stars">
                    <img src="../Images/star.png" alt="stars">
                    </div>
                    <p class="ourSpecials__service__text">
                  It provides services for a fee or any cosideration or exchange to cut,
                  shape or to enhance the appaearance of the nails.It includes the application and removal f
                  sculptured or artificial nails.
                    </p>
          
          
                </div>
            
        </div>

            
        <div class="ourSpecials__right">
      <h2 class="ourSpecials__title">Our Speciality </h2>
        <p class="ourSpecials__text">
        All these services are provided to you with all care so that you can get the 
    proper services at your suitable time.Mainly we focus for your comfort and care.
    We just want best for you.       
   </p>
   <a href="./Bookings.php" class="btn primary_btn"> Book</a>

     </div>
    </div>
    </div>

</section>
<!--End with speciality-->

<!-- Top   Services-->
<section id="Grid">
<div class="container">
    <h2 class="serviceGrid__title">
        Top Facilities
    </h2>
    <div class="serviceGrid__wrapper">
        <div class="serviceGrid__item">
            <div class="serviceGrid__item__img">
                <img src="../Images/hair.png" alt="service">
            </div>
            <div class="serviceGrid__item__info">
                <h3 class="serviceGrid__item__title">Hair Colouring and Styling
                </h3>
                <h3 class="serviceGrid__item__price">Rs.6000</h3>
                    <div class="serviceGrid__item__stars">
                        <img src="../Images/star.png" alt="service">
                    </div>
                </div>
            </div>
            <div class="serviceGrid__item">
                <div class="serviceGrid__item__img">
                    <img src="../Images/skin.png" alt="service">
                </div>
                <div class="serviceGrid__item__info">
                    <h3 class="serviceGrid__item__title">Facials and Skincare Treatments
                    </h3>
                    <h2 class="serviceGrid__item__price">Rs.10000</h2>
                        <div class="serviceGrid__item__stars">
                            <img src="../Images/star.png" alt="service">
                        </div>
                    </div>
                </div>
                <div class="serviceGrid__item">
                    <div class="serviceGrid__item__img">
                        <img src="../Images/head.png" alt="service">
                    </div>
                    <div class="serviceGrid__item__info">
                        <h3 class="serviceGrid__item__title">Head and Scalp Massages
                        </h3>
                        <h2 class="serviceGrid__item__price">Rs.20000</h2>
                            <div class="serviceGrid__item__stars">
                                <img src="../Images/star.png" alt="service">
                            </div>
                        </div>
                    </div>

    </div>
    </div>

</section>
<!--ENd -->
<!--event section-->
<section id="eventsMedia">
<div class="container">
 <div class="eventsMedia__wrapper">
    <div class="eventsMedia__1">
        <img src="../Images/1.png" alt="events">
        
    </div>
    <div class="eventsMedia__2">
        <img src="../Images/bridal.png" alt="events2">

    </div>
    </div>  

</div>
</section>
<!--end-->
<!--Events Info section-->
<section id="eventsInfo">
    <div class="container">
     <div class="eventsInfo__wrapper">
        <div class="eventsInfo__left">
            <div class="eventsInfo__item">
                <div class="eventsInfo__item__img">
                    <img src="../Images/2.png" alternative="1">
                </div>
                <div class="eventsInfo__item__info">
                    <h2 class="eventsInfo__item__title">Party Hairstyles</h2>
                    <p class="eventsInfo__item__text">
                    Salon Client Management will help you to do your hair work more faster and easier.
                    You dont have to waste your time in making your hairs during special occasions you can directly
                    contact us. 
                    </p>
                </div> 
            </div>
            <div class="eventsInfo__item">
                <div class="eventsInfo__item__img">
                    <img src="../Images/mehendi.png" alternative="1">
                </div>
                <div class="eventsInfo__item__info">
                    <h2 class="eventsInfo__item__title">Mehendi design </h2>
                    <p class="eventsInfo__item__text">
                        The traditional mehendi design revolves around flowers, jaal, peacock and
                         mango motifs.To make the mehendi ceremony more fun and stressless we have the management for 
                         mehendi rituals. 
                    
                    </p>
                </div> 
            </div>
            <div class="eventsInfo__item">
                <div class="eventsInfo__item__img">
                    <img src="../Images/5.png" alternative="1">
                </div>
                <div class="eventsInfo__item__info">
                    <h2 class="eventsInfo__item__title">Lashes Extension</h2>
                    <p class="eventsInfo__item__text">
                        We have also added the features of lashes extension.Eyelash extensions are semi-permanent 
                        fibers that are attached to your natural eyelashes in order to make your lash fringe look longer.
                    </p>
                </div> 
            </div>
            </div>

        
            <div class="eventsInfo__right">
                <h2 class="eventsInfo__title">
                    Start Booking
                </h2>
                <p class="eventsInfo__text">
                    Book for your services instantly through Salon Client Management to experience
                    unique experience. 
                </p>
                <a href="./Contact.php" class="btn primary_btn">
                    Contact Now
                </a>
            </div>
            
            </div>
            </div>
            </section>
            
        
<!--End-->
<!--Newsletter section-->
<section id="newsletter">
    <div class="container">
        <div class="newsletter__wrapper">
            <div class="newsletter__info">
                <h2 class="newsletter__title">Join Latest News</h2>
                    <p class="newsletter__text"> Get Notified with the latets news
                        and recent offers from the "Salon Client Management". 
                    </p>
                    </div>
                    <div class="newsletter__form">
                        <form>
                            <label for="email">
                                <input type="email" placeholder=" Your Email Address">
                            </label>
                            <button type="submit"><b>Join</b></button>


                        </form>

                    </div>
                </div>
                </div>
    
</section>
<!--End-->




<!--Footer-->
<footer>
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__col1">
                <div class="footer__logo">
                <img src="../Images.logs.png" alt="Salon Management">
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
                        <a href="About.php">About US</a>
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
                        <a href="Contact.html">Contact</a>
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