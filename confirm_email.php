<?php 
include 'config.php';
 $email          = ($_REQUEST['email']);
$sql = "SELECT * FROM users where username='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if($row['username']==$email){
            $key=1;
        }
    }}
    
    if($key!=1){
         $c_acc="You Do not have any account... Please Signup";
      header("Location: sign_up.php?c_acc=$c_acc");
    }else{
        $otp=(rand(10000,1000000));
        $otp="P-".$otp;
        echo $otp;
        // the message
        $msg = "$otp is Your Pic-Click verification OTP";
        
        // use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);
        
        // send email
        mail("$email","Piclick Verification OTP",$msg);
           $sql = "UPDATE users SET otp='$otp' WHERE username='$email'";

            if ($conn->query($sql) === TRUE) {
                
              header("Location: otp.php?email=$email");
            } else {
              echo "Error updating record: " . $conn->error;
            }
    }
?>