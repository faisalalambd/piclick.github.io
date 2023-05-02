<?php
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: sign_in.php"); // Redirecting To Profile Page
}

$text = $_GET['text'];
?>
<?php
include 'session.php';
echo $type=$_GET['type'];
echo $id=$_GET['id'];
echo $login_session;

$sql = "INSERT INTO image_reaction (image_id, reacted_email,reaction_type) VALUES ('$id', '$login_session','$type')";

if (mysqli_query($conn, $sql)) {
      header("Location: detail.php?id=$id");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}

?>