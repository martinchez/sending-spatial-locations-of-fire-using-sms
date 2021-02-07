<?php
include "conn.php";
include_once "index.php";
// Escape user inputs for security
$latitude = mysqli_real_escape_string($conn, $_REQUEST['latitude']);
$longitude = mysqli_real_escape_string($conn, $_REQUEST['longitude']);
$message = mysqli_real_escape_string($conn, $_REQUEST['message']);

$sql = "INSERT  INTO cases (latitude,longitude,message) VALUES 
('$latitude','$longitude','$message')";
if (mysqli_query($conn,$sql)) {
    // die('érror: ' . mysqli_error());
}
else {
    echo "one record added";
}
   
?>