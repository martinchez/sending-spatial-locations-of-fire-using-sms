<?php
        include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Send sms</title>
</head>
<body>
    <div>
        <form action="insert.php" method="POST">
            <h3>Report A fire incidence</h3>
            
            <div class="form-wrapper">
                <label for="" >Latitude</label>
                <input type="text" name="latitude" class="form-control">
            </div>
            <div class="form-wrapper">
                <label for="">Longitude</label>
                <input type="text" name="longitude" class="form-control">
            </div>
            <div class="form-wrapper">
                <label for="">Message</label>
                <input type="text" name="message" class="form-control">
            </div>
            <button type="submit" name="submit">Send</button>
            <?php
            $msg= $_POST['message'];
            $lat=$_POST['latitude'];
            $long=$_POST['longitude'];
            $userName1='Devmartin';
            $key='84mLatvcNOhBfZmRfRjRpSl2LXmRXJfZPppVvxO6ZwaMGgVgEP';
            $senderid='SMARTLINK';
            $phonenumber='254714611486';
            $message = urlencode('FIRE EMERGENCY AT:'.$lat.','.$long.' **IMPORTANT INFO** '.$msg);
            $live_url ='https://sms.movesms.co.ke/api/compose?username='.$userName1.'&api_key='.$key.'&sender='.$senderid.'&to='.$phonenumber.'&message='.$message.'&msgtype=5&dlr=0';
            $parse_url=file($live_url);
            $output1=  $parse_url[0];
            ?>
        </form>
        
    </div>
    
</body>
</html>