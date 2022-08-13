<?php
session_start();

if(isset($_SESSION['auth']) && $_SESSION['auth']=='auth'){
    header('location: userpage.php');
}
require('connection.php');



if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "select * from UserProfile where email='$email' AND pwd = '$pwd'";
    $retval = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($retval);
    print_r($result);

    if($email == $result['email'] && $pwd == $result['pwd']){
        $_SESSION['auth'] = 'auth';
        $_SESSION['userid'] = $result['userid'];
        $_SESSION['username'] = $result['username'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['pwd'] = $result['pwd'];
        header('location: userpage.php');
    }
    else{
        echo "<script>alert('login Fail')</script>";
    }
}
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project-Client Management System</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>


<!--FORM-->
<div class="form-container">
    
    <form action="#" method="POST">
        <h3>Login</h3>
        
        <input type="email" name="email" required placeholder="Enter Your Email">
        
        <input type="password" name="pwd" required placeholder="Enter Your Password">

        <input type="submit" name="submit" value="Login now" class="primary_btn">
        <p>Don't have an account?<a href="register.php">Register now</a></p>
        </form>
</div>
<!--END-->
        
    
</body>
</html>