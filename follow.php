
<?php
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: sign_in.php"); // Redirecting To Profile Page
}

$text = $_GET['text'];
?>
<?php
include 'session.php';
echo $uploader=$_GET['uploader'];
echo $id=$_GET['id'];
echo $login_session;

$sql = "INSERT INTO follow_list (following, follower) VALUES ('$uploader', '$login_session')";

if (mysqli_query($conn, $sql)) {
      header("Location: detail.php?id=$id");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>