  <?php
include 'session.php';
echo $f_id=$_GET['f_id'];
echo $id=$_GET['id'];
// sql to delete a record
$sql = "DELETE FROM follow_list WHERE id=$f_id";

if ($conn->query($sql) === TRUE) {
 header("Location: detail.php?id=$id");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>