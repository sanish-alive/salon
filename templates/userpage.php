<?php
session_start();

if(!(isset($_SESSION['auth'])) && !($_SESSION['auth']=='auth')){
    header('location: login.php');
}
require "connection.php";

$userid = $_SESSION['userid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/services.css">
    
</head>
<body>
    <div class="container">
<div class="content">
    

        <h3>User<span>Page</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['username']; ?></span></h1>
        <p>This is our user page </p>
        <a href="home.php" class="btn primary_btn">Home</a>
        <a href="Services.php" class="btn primary_btn">Services</a>
        <a href="history.php" class="btn primary_btn">History</a>
        <a href="changepassword.php" class="btn primary_btn">Change Password</a>
        <a href="logout.php" class="btn primary_btn">Logout</a>

    </div>
</div>
<section id="page__title">
    <div class="container">
        <h1 class="page__title__text">Booked Details</h1>
    </div>
</section>



<section id="Grid">
    <div class="container">

        <div class="serviceGrid__wrapper">
        <?php
            $query = "SELECT * FROM booking JOIN service ON booking.sid=service.sid LIMIT 6";
            $retval = mysqli_query($conn, $query);

            while($data = mysqli_fetch_assoc($retval)){

        ?>
            <div class="serviceGrid__item">
                <div class="serviceGrid__item__img">
                    <img src="../serviceimage/<?php echo $data['simage']; ?>">
                </div>
                <div class="serviceGrid__item__info">
                    <h3 class="serviceGrid__item__title"><?php echo $data['sname']; ?></h3>
                    <h3 class="serviceGrid__item__price"><?php echo $data['scost']; ?></h3>
                    <h3 class="serviceGrid__item__price">Date: <?php echo $data['date']; ?></h3>
                    <h3 class="serviceGrid__item__price">Time: <?php echo $data['time']; ?></h3>

                        
                </div>
            </div>

        <?php
        }
        ?>
    
        </div>
    </div>
    
    </section>

</body>
</html>