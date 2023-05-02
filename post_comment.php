<?php 
include 'session.php';
include 'config.php';
?>
<?php
 
            $sql = "SELECT * FROM users where username='$login_session'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                $name=$row['name'];
                }}?>
<?php
$id=$_GET['id'];
echo  $comment          = ($_REQUEST['comment']);


$sql = "INSERT INTO comment (image_id, view_name, view_email, comment) VALUES ('$id', '$name', '$login_session', '$comment')";

if (mysqli_query($conn, $sql)) {
    $text="Registration Successfull.Please login";
    header("Location: detail.php?id=$id");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
