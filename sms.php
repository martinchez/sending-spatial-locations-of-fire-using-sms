<?php
include "index.php";
            $msg= $_POST['message'];
            $lat=$_POST['latitude'];
            $long==$_POST['longitude'];
            $userName1='Devmartin';
            $key='84mLatvcNOhBfZmRfRjRpSl2LXmRXJfZPppVvxO6ZwaMGgVgEP';
            $senderid='SMARTLINK';
            $phonenumber='254713297997';
            $message = urlencode('ADDRESS FIRE EMERGENCY INCIDENCE AT: '.$lat.$long.'THIS INFORMATION WILL HELP YOU: '.$msg);
            $live_url ='https://sms.movesms.co.ke/api/compose?username='.$userName1.'&api_key='.$key.'&sender='.$senderid.'&to='.$phonenumber.'&message='.$message.'&msgtype=5&dlr=0';
            $parse_url=file($live_url);
            $output1=  $parse_url[0];
?>