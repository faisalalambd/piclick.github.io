<?php 
include 'config.php';
echo $id=$_GET['id'];
 $category          = ($_REQUEST['category']);
  $title          = ($_REQUEST['title']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "user_image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}
echo $filename;
if($filename==null){
    
    $sql = "SELECT * FROM post where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $filename=$row['image'];
    }}
}
$sql = "UPDATE post SET image='$filename',title='$title',category='$category' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $text="Post Updated Successfully";
  header("Location: profile.php?text=$text");
} else {
  echo "Error updating record: " . $conn->error;
}

?>