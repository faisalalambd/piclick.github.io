
<?php
include 'session.php';
include 'config.php';

echo  $title          = ($_REQUEST['title']);
echo  $category         = ($_REQUEST['category']);
echo  $keywords        = ($_REQUEST['keywords']);
$sale="no";
$view=0;

            $sql = "SELECT * FROM 	users where username='$login_session'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $name = $row['name'];
                    $pro_pic=$row['pro_pic'];
                  
           }} 
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
$sql = "INSERT INTO post (image, uploader, uploader_name,title,category,view,is_for_sale,user_image,keywords) VALUES ('$filename', '$login_session', '$name', '$title','$category','$view','$sale','$pro_pic','$keywords')";

if (mysqli_query($conn, $sql)) {
    $text="Registration Successfull.Please login";
    header("Location: profile.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}


?>