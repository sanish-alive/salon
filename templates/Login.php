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
    
    <form id="form" method="POST">
        <h3>Login</h3>
        
        <input id="name" type="email" name="email" required placeholder="Enter Your Email">
        
        <input id="password" type="password" name="pwd" required placeholder="Enter Your Password">

        <input type="submit" name="submit" value="Login now" class="primary_btn">
        <p>Don't have an account?<a href="register.php">Register now</a></p>

        </form>

</div>
<!--END-->
<script>
const form=document.getElementById('form')
const email =document.getElementById('email')
const password=document.getElementById('password')

form.addEventListener('submit',(e) =>{
    e.preventDefault();

    checkInputs();
});

fucntion checkInputs(){

    const emailValue=email.value.trim();
    const passwordValue=password.value.trim();


fucntion setError(input,message){
    const form-container=input.parentElement;
    const small=form-container.querySelector('small');

    small.innertext=message;
    formControl.className='form-c'
}


    if(emailValue === ''){
        setError(email,'Email is required');
    }else if(!isValidEmail(emailValue)){
        setError(email,'Provide a valid email address');
    }
    else{
        setSuccess(email);
    }

    if(passwordValue === ''){
        setError(password,'Password is required');
    }else if(passwordValue.length<8){
        setError(password,'Password must be atleast of 6 character');
    }
    else{
        setSuccess(password);
    }

};


    </script>
    
</body>
</html>
