<?php
include_once "index.php";

$servername= "localhost";
$username="root";
$password="";
$database="fire";

$conn = mysqli_connect($servername,$username,$password,$database);

// echo $_POST['username'];
// // THE API FOR SENDING  DATA
// $userName1='Devmartin';
// $key='84mLatvcNOhBfZmRfRjRpSl2LXmRXJfZPppVvxO6ZwaMGgVgEP';
// $senderid='SMARTLINK';
// $phonenumber='254713297997';
// $message = urlencode('2735724234,23878324 FIRE ISUE AT CHEPTILEI MARKET');
// $live_url ='https://sms.movesms.co.ke/api/compose?username='.$userName1.'&api_key='.$key.'&sender='.$senderid.'&to='.$phonenumber.'&message='.$message.'&msgtype=5&dlr=0';
// $parse_url=file($live_url);
// $output1=  $parse_url[0];
// echo $message;

?>