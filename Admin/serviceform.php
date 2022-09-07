<?php
session_start();
if(!(isset($_SESSION['adminauth'])) && !($_SESSION['adminauth']=='auth')){
    header('location: index.php');
}
require('../templates/connection.php');

if($_SERVER['REQUEST_METHOD']=="POST"){


  if(isset($_POST['submit'])){
    $sname = $_POST['sname'];
    $cprice = $_POST['cprice'];

   if($_FILES['file']['name']!=""){
      $temp = explode(".", $_FILES["file"]["name"]);
      $newFileName =  round(microtime(true)).".".end($temp);
      $fileType = end($temp);

      $allowTypes = array('jpg','png','jpeg');

      if(in_array($fileType, $allowTypes)){
        $query = "INSERT INTO service (sname, scost, simage) VALUES('$sname', '$cprice', '$newFileName')";
        if(mysqli_query($conn, $query) && move_uploaded_file($_FILES['file']['tmp_name'], "../serviceimage/".$newFileName)){
          echo "<script>alert('service have added')</script>";
          header("location: adminpanel.php");
        }else{
          echo "<script>alert('try again')</script>";
        }
      }
    }
  }
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="sform.css">
	<title>Admin</title>
</head>
<body>
	<center>
	<h1>Update</h1>
    </center>

    <style>
.topnav {
  overflow: hidden;
  background-color:#a2de96;
}

.topnav a {
  float: left;
  color:black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:#26643b;
  color: black;
}

.topnav a.split {
  float: right;
  background-color: #26643b;
  color: white;
}
</style>
</head>
<body>

<div class="topnav">
  <a href="adminnewservice.php">New Service</a>
  <a href="serviceform.php">Add Service</a>
  <a href="adminpanel.php">Dashboard</a>
  <a href="adminlogout.php" class="split">Log Out</a>
</div>
<div class="form-container">
  <form action="#" method="post" enctype="multipart/form-data">
    <h1>Services Updation</h1><br>
    <img src="../Images/1.png" alt="service"><img src="../Images/2.png" alt="service"><br>

    <label for="sname"><b>Service Name</b></label>
    <input type="text"  name="sname" required><br>
    <label for="cprice"><b>Cost Price</b></label>
    <input type="text"  name="cprice" required><br>

    <label for="text"><b>Picture of new service</b></label><br>
     <input type="file"  name="file" required><br>

    <input type="submit" class="btn" name='submit'>
   
</form>
</div>

</body>
</html>