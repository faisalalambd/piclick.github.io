<?php 
include 'config.php';
?>

<?php

  $name          = ($_REQUEST['name']);
  $username   = ($_REQUEST['email']);
  $number        = ($_REQUEST['number']);
  $password      = ($_REQUEST['password']);
  $c_password     = ($_REQUEST['c_password']);

 $key=0;
            $sql = "SELECT * FROM users where username='$username'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $key=1;
                }}
                if($key==1){
                    $text="You Have An Account";
      header("Location: sign_up.php?text=$text");
                }
if($password==$c_password){
$sql = "INSERT INTO users (username, password, name, phone_no,pro_pic) VALUES ('$username', '$password', '$name', '$number','avater.jpeg')";

if (mysqli_query($conn, $sql)) {
    // $text="Registration Successfull.Please login";
    header("Location: login1.php?username=$username&&password=$password");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

}else{
    $text="Passwords Doesn't Match";
      header("Location: sign_up.php?text=$text");
}