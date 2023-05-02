<?php
include 'config.php';
echo $id=$_GET['id'];
echo  $old_password = ($_REQUEST['old_password']);
echo  $new_password  = ($_REQUEST['new_password']);
echo  $c_password        = ($_REQUEST['c_password']);

if($c_password==$new_password){
    $sql = "UPDATE users SET password='$new_password' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $passs="Password Updated Successfully";
  header("Location: edit_profile.php?passs=$passs");
} else {
  echo "Error updating record: " . $conn->error;
}
}else{
    $pass="Password Doesn't Match";
    header("Location: edit_profile.php?pass=$pass");
}



