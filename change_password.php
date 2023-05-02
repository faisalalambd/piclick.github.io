<?php
include 'config.php';
echo $email=$_GET['email'];
$username=$email;
 echo $password   = ($_REQUEST['password']);
 echo $c_password  = ($_REQUEST['c_password']);
 if($c_password==$password){
    $sql = "UPDATE users SET password='$password' WHERE username='$email'";

if ($conn->query($sql) === TRUE) {
    $passs="Password Updated Successfully";
  header("Location: login1.php?username=$username&&password=$password");
} else {
  echo "Error updating record: " . $conn->error;
}
}else{
    $pass="Password Doesn't Match";
    header("Location: reset_password.php?email=$email");
}
?>