<?php

include 'session.php';
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: sign_in.php"); // Redirecting To Profile Page

}
include 'config.php';
echo $id=$_GET['id'];

// sql to delete a record
$sql = "DELETE FROM post WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

// sql to delete a record
$sql = "DELETE FROM view WHERE image_id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

// sql to delete a record
$sql = "DELETE FROM image_reaction WHERE image_id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}



// sql to delete a record
$sql = "DELETE FROM comment WHERE image_id=$id";

if ($conn->query($sql) === TRUE) {
  header("Location: profile.php?uploader=");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>