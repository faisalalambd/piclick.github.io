<?php
include 'session.php';
echo $like_id=$_GET['like_id'];
echo $id=$_GET['id'];

// sql to delete a record
$sql = "DELETE FROM image_reaction WHERE id=$like_id";

if ($conn->query($sql) === TRUE) {
 header("Location: detail.php?id=$id");
} else {
  echo "Error deleting record: " . $conn->error;
}


?>