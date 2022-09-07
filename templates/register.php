<?php
session_start();

if(isset($_SESSION['auth']) && $_SESSION['auth']=='auth')
{
    header('location: userpage.php');
}

require('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="form-container">
        

        <form action="login_register.php" method="POST">
        <h3>Register</h3>
        <input type="text" name="username" required placeholder= "Enter Your Name">
        
        <input type="email" name="email" required placeholder="Enter Your Email">
        
        <input type="password" name="pwd" required placeholder="Enter Your Password">
        
        <input type="password" name="cpwd" required placeholder="Confirm Your Password">
        

        
        <input type="submit" name="submit" value="Register now" class="primary_btn">
        <p>Already have an account?<a href="Login.php">Login now</a></p>
</form>
</div>
</body>
</html>
