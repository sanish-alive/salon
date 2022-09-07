<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Client Management System</title>

<style type="text/css">
    body{
        background-image:url("..//Images/g.jpg");
        background-size:cover;
        background-attachment:fixed;
    }
    .content{
        background:white;
        width: 50%;
        padding: 40px;
        margin:100px auto;
    }
    </style>
    </head>
    <body>
  
    <style>
body {
  margin: 0;
  font-size:15px;
}

.sidebar {
  margin:0;
  padding: 5px;
  width: 150px;
  position: absolute;
  height: 100%;
  overflow: auto;
background:#26643b;
  
}

.sidebar a {
  display: block;
  color: white;
  padding: 16px;
}
.sidebar a:hover {
  color: green;
}


@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<body>

<div class="sidebar">
  <a href="Home.php"><b>Home</b></a>
  <a href="Services.php"><b>Services</b></a>
  <a href="About.php"><b>About US</b></a>
  <a href="Contact.php"><b>Contact</b></a>
  <a href="Login.php"><b>Login Now</b></a>
</div>
<style>
    
    
    h1{
        text-align:center;
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%) translateY(-50%);

    }
    img{
  height: 26.3vh;
    margin-left: 1vh;
    }

 .btn {
  background-color:#26643b;
  font-size: 20px;
  color:whitesmoke;
  padding: 16px 20px;
  justify-content: center;
  align-items: center;
  display: flex;
 }
</style>

<center>
<img src="../Images/glam.png" alt="service"><img src="../Images/nails.png" alt="service"><img src="../Images/ped.png" alt="service">
<img src="../Images/manicure.png" alt="service">
</center>

<h1>Book An Appointments<br>When Do You Want To Come...</h1> 
<center>
<a href="./Services.php" class="btn">
Book Now</a>
</center>
</body>
</html>
  
   