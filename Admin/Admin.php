<?php
session_start();
if(!(isset($_SESSION['adminauth'])) && !($_SESSION['adminauth']=='auth')){
    header('location: index.php');
}
require('../templates/connection.php');





if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET['sid'])){
        $sid = $_GET['sid'];
        $status = $_GET['status'];
        echo $userid;

        $query = "UPDATE booking SET status='$status' WHERE sid='$sid'";
        if(mysqli_query($conn, $query)){
            echo "done";
            
        }
    }
}



?>