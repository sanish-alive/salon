<?php
session_start();

if(isset($_SESSION['adminauth']) && $_SESSION['adminauth']=='auth'){
    header('location: adminpanel.php');
}
require('../templates/connection.php');



if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $query = "select * from adminprofile where email='$email' AND pwd = '$pwd'";
    $retval = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($retval);

    if($email == $result['email'] && $pwd == $result['pwd']){
        $_SESSION['adminauth'] = 'auth';
        $_SESSION['adminid'] = $result['adminid'];
        $_SESSION['adminemail'] = $result['email'];
        $_SESSION['adminpwd'] = $result['pwd'];
        header('location: adminpanel.php');
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
    <link rel="stylesheet" href="./All.css">
    <link rel="stylesheet" href="./style.css">
    
</head>
<body>




<!--FORM-->
<div class="form-container">
        <form action="#" method="post">
        <h3>Admin Login</h3>
        
        <input type="email" name="email" required placeholder="Enter Your Email">
        
        <input type="password" name="pwd" required placeholder="Enter Your Password">

        <input type="submit" name="submit" value="Login now" class="primary_btn">
        
        </form>
</div>

        
    
</body>
</html>

