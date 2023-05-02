<?php
include 'config.php';
 $id=$_GET['id'];
 
 
            $sql = "SELECT * FROM post order by id DESC LIMIT 1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                $latest_id=$row['id'];
                }}
                
if($id!=$latest_id){
 echo $id+=1;
}
  header("Location: detail.php?id=$id");
?>