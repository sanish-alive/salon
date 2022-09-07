<?php
session_start();
if(!(isset($_SESSION['auth'])) && !($_SESSION['auth']=='auth')){
    header('location: login.php');
}

require "connection.php";

$userid = $_SESSION['userid'];
$sid = $_GET['id'];

echo $userid;
echo $sid;
if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $time = $_POST['time'];
    $comment = $_POST['comment'];
    $serviceid = $_POST['serviceid'];


    $query = "INSERT INTO `booking`(`uid`, `sid`, `date`, `time`, `description`) VALUES ('$userid', '$sid', '$date', '$time', '$comment')";
    if(mysqli_query($conn, $query)){
        echo "<script>alert('booking added')</script>";
        header("location: userpage.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking Form</title>
    <link rel="stylesheet" href="css/bookings.css">
   
</head>

<body>

<div class="form-container">
    <?php 
        
        $serviceQuery = "SELECT * FROM service WHERE sid='$sid'";
        $retval = mysqli_query($conn, $serviceQuery);
        $data = mysqli_fetch_assoc($retval);
    ?>
  <form action="#" method="post">
    <h1><?php echo $data['sname']; ?> Book Now</h1><br>
    <img src="../serviceimage/<?php echo $data['simage']; ?>" alt="service"><br>

    <br>
    <label for="date"><b>Book Date</b></label>
    <input type="date"  name="date" required>
    <label for="date"><b>Time</b></label>
    <input type="time"  name="time" required>
    <input type="hidden"  name="serviceid" value="<?php echo $sid; ?>">

    <label for="comment"><b>Description</b></label><br>
    <textarea name="comment" rows="5" cols="86"placeholder="Type Here.."></textarea>    
    <input type="submit" name='submit' class="btn">
   

</form>
</div>


</body>
</html>