<?php

require('connection.php');
if(isset($_POST['submit']))
{

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];

    $user_exist_query="SELECT * FROM userprofile WHERE username='$username' OR email='$email'";
    $result=mysqli_query($conn,$user_exist_query);
    if($pwd != $cpwd){
        echo "
        <script>
       alert('password and comfirmation password does not match');
       window.location.href='register.php';
       </script>
       ";
    }
    if($result)
    {

        
        if(mysqli_fetch_array($result)) 
        {
            #if any user has alrady taken username and email
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$username)
            {
                #error for username alrady registered
                echo "<script>alert('".$result_fetch['username']."-Username already taken');window.location.href='register.php';</script>";

            }
            else if($result_fetch['email']==$email){
                #error for email already registered
                echo "
                <script>
               alert('".$result_fetch['email']."-Email already registered');
               window.location.href='register.php';
               </script>
               ";

            }
            
            else{
                echo "
                <script>
               alert('something went wrong');
               window.location.href='register.php';
               </script>";
            }
        }
        
    
        else #it will be executed if no has taken username and email
        {
            $query="INSERT INTO userprofile (`username`, `email`, `pwd`) VALUES ('$username','$email','$pwd')";
            if(mysqli_query($conn,$query))
            {
              #if data inserted successfully
              echo "
        <script>
        alert('Registration Successful');
        window.location.href='login.php';
        </script>
        ";
            }
        }
    }

        
    else{
        #if data cannot be inserted
        echo "
        <script>
        alert('Cannot Run Query');
        </script>
        ";
    }
}

    

              
else {
    echo "
    <script>
    alert('Cannot Run Query');

    </script>
    ";

}





?>