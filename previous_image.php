<?php
include 'config.php';
 $id=$_GET['id'];
 if($id>1){
 echo $id-=1;
 }
  header("Location: detail.php?id=$id");
?>