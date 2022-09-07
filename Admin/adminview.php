<?php
session_start();
if(!(isset($_SESSION['adminauth'])) && !($_SESSION['adminauth']=='auth')){
    header('location: index.php');
}
require('../templates/connection.php');

$userid = $_GET['userid'];

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
        <th>Username</th>
        <th>Email</th>
        <th>Service</th>
        <th>Date</th>
        <th>Time</th>
        <th>Status</th>
        <th>Edit</th>
      </tr>
      <?php
        $query = "SELECT * FROM booking JOIN service ON booking.sid=service.sid JOIN userprofile ON booking.uid=userprofile.userid WHERE uid='$userid'";
        $result = mysqli_query($conn, $query);
        while($data = mysqli_fetch_assoc($result)){
          echo "<tr>";
          echo "<td>".$data['uid']."</td>";
          echo "<td>".$data['username']."</td>";
          echo "<td>".$data['email']."</td>";
          echo "<td>".$data['sname']."</td>";
          echo "<td>".$data['date']."</td>";
          echo "<td>".$data['time']."</td>";
          echo "<td>".$data['status']."</td>";
          echo "<td><button onclick = \"pendingBook('".$data['sid']."','pending')\">pending</button>
            <button onclick = \"pendingBook('".$data['sid']."','complete')\">complete</button\></td>";
          echo "</tr>";
        }

      ?>
      
    </table>
  </div>

  <script type="text/javascript">
    var xhttp = new XMLHttpRequest();
    function pendingBook(sid, status){
      xhttp.open("GET", "Admin.php?sid="+sid+"&status="+status, true);
      xhttp.send();
      window.location.reload();
    }
  </script>

</body>
</html>




