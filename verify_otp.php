<?php
include 'config.php';
echo $otp_code          = ($_REQUEST['otp_code']);
echo $email          = $_GET['email'];
$sql = "SELECT * FROM users where username='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
       echo $otp=$row['otp'];
    }}
    if($otp_code==$otp){
         header("Location: reset_password.php?email=$email");
    }else{
        $text="Otp Does not Match";
    //   header("Location: otp.php?text=$text");
    }
?>