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
    <title>Project-Client Management System</title>
</head>
<body>

<center>
    <h1>History Page</h1>
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
  <a href="userpage.php"><b>Go Back</b></a>
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
        <th>Service Name</th>
        <th>Date</th>
        <th>Time</th>
        <th>Price</th>
      </tr>

      <?php
        $query = "SELECT * FROM booking JOIN service ON booking.sid=service.sid WHERE uid='$userid'";
        $result = mysqli_query($conn, $query);
        while($data = mysqli_fetch_assoc($result)){
      ?>
        <tr>
          <td><?php echo $data['sname']; ?></td>
          <td><?php echo $data['date']; ?></td>
          <td><?php echo $data['time']; ?></td>
          <td><?php echo $data['scost']; ?></td>
        </tr>
      <?php
      }
      ?>

</table>
</body>
</html>