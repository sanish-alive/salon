<?php
session_start();
if(!(isset($_SESSION['adminauth'])) && !($_SESSION['adminauth']=='auth')){
    header('location: index.php');
}
require('../templates/connection.php');


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/All.css">
    <link rel="stylesheet" href="css/component.css">
    <link rel="stylesheet" href="css/style.css">
  <title>Admin</title>
</head>
<body>
  <center>
  <h1>Admin View</h1>
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



<style>
.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
<div class="row">
  <div class="column">
    <table>
      

      <tr>
        <th>Id</th>
        <th>Fist Name</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Subject</th>
        <th>message</th>
       
      </tr>
      <?php
        $query = "SELECT * FROM contact";
        $result = mysqli_query($conn, $query);
        while($data = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>".$data['con_id']."</td>";
          echo "<td>".$data['firstname']."</td>";
          echo "<td>".$data['lastname']."</td>";
          echo "<td>".$data['email']."</td>";
          echo "<td>".$data['subject']."</td>";
          echo "<td>".$data['message']."</td>";
          echo "</tr>";
        }

      ?>
      
    </table>
  </div>

</body>
</html>

