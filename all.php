<?php
include "index.php";

$servername= "localhost";
$username="root";
$password="";
$database="fire";

$conn = mysqli_connect($servername,$username,$password,$database);

// adding the data into the database
// Escape user inputs for security
$latitude = mysqli_real_escape_string($conn, $_REQUEST['latitude']);
$longitude = mysqli_real_escape_string($conn, $_REQUEST['longitude']);
$message = mysqli_real_escape_string($conn, $_REQUEST['message']);

$sql = "INSERT  INTO cases (latitude,longitude,message) VALUES 
('$latitude','$longitude','$message')";

if (mysqli_query($conn,$sql)) {
    // die('érror: ' . mysqli_error());
    // echo "correct the error added";
}
else {
    $userName1='Devmartin';
    $key='84mLatvcNOhBfZmRfRjRpSl2LXmRXJfZPppVvxO6ZwaMGgVgEP';
    $senderid='FIRERESPONSE';
    $phonenumber='254713297997';
    $message=urlencode('testing in all.php');
    $live_url ='https://sms.movesms.co.ke/api/compose?username='.$userName1.'&api_key='.$key.'&sender='.$senderid.'&to='.$phonenumber.'&message='.$message.'&msgtype=5&dlr=0';
    $parse_url=file($live_url);
    $output1=  $parse_url[0];
    echo $message;
    

}


// THE API FOR SENDING  DATA

?>