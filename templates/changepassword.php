<?php
session_start();

if(!(isset($_SESSION['auth'])) && !($_SESSION['auth']=='auth'))
{
    header('location: home.php');
}
require('connection.php');
$userid = $_SESSION['userid'];

if(isset($_POST['submit'])){
    $pwd = $_POST['pwd'];
    $npwd = $_POST['npwd'];
    $cpwd = $_POST['rpwd'];
    $query = "SELECT * FROM userprofile WHERE userid = '$userid'";
    $retval = mysqli_query($conn, $query);
    $data = mysqli_fetch_assoc($retval);
    if($data['pwd']==$pwd){
        if($npwd==$cpwd){
            $upquery = "UPDATE userprofile set pwd='$npwd' WHERE userid='$userid'";
            mysqli_query($conn, $upquery);
            header("location: logout.php");
        }else{
            echo "<script>alter('comfirm password doesnot match')</script>";
        }
    }else{
        echo "<script>alter('password incorrect')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Change Password</title>
    <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/component.css">

</head>
<body>
    <div class="content">
         
        <a href="home.php" class="btn primary_btn">Home</a>
        <a href="Services.php" class="btn primary_btn">Services</a>
        <a href="history.php" class="btn primary_btn">History</a>
        <a href="changepassword.php" class="btn primary_btn">Change Password</a>
        <a href="logout.php" class="btn primary_btn">Logout</a>
</div>
    
    <div class="form-container">
        

        <form action="#" method="POST">
        <h3>Change Password</h3>
        
        <input type="password" name="pwd" required placeholder="Enter Your Password">
        
        <input type="password" name="npwd" required placeholder="Enter Your New Password">
        
        <input type="password" name="rpwd" required placeholder="Retype Your Password">
        

        
        <input type="submit" name="submit" value="password change" class="primary_btn">
        
</form>
</div>
</body>
</html>
