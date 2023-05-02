<?php
include 'session.php';
include 'config.php';
echo $id=$_GET['id'];
echo  $name          = ($_REQUEST['name']);
echo  $bio   = ($_REQUEST['bio']);
echo  $number        = ($_REQUEST['phone']);


// //upload image
$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "user_profile/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}
echo $filename;


$sql = "UPDATE users SET name='$name',phone_no='$number',bio='$bio',pro_pic='$filename'  WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $text="Profile Updated Successfully";
//   header("Location: edit_profile.php?text=$text");
} else {
  echo "Error updating record: " . $conn->error;
}


$sql = "UPDATE post SET user_image='$filename' WHERE uploader='$login_session'";

if ($conn->query($sql) === TRUE) {
    $text="Profile Updated Successfully";
  header("Location: edit_profile.php?text=$text");
} else {
  echo "Error updating record: " . $conn->error;
}