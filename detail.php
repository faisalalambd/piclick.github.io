<!-- ############################## Header Section ############################## -->
<?php include 'header_share.php';
include 'session.php';
include 'config.php';
$id=$_GET['id'];
$previous_id=$_GET['previous_id'];


            $sql = "SELECT * FROM post where id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                $views=$row['view'];
                $uploader=$row['uploader'];
                }}?>
                
            <?php

            $followed_by=0;
            $sql = "SELECT * FROM follow_list where following='$uploader'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                 $followed_by++;
                }}?>
                <?php
           $image_like=0;
            $sql = "SELECT * FROM image_reaction where image_id='$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                 $image_like++;
                }}?>
                
                  <?php
         $comment_sl=0;
            $sql = "SELECT * FROM comment where image_id='$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                 $comment_sl++;
}}?>
<?php         

    $sql = "UPDATE users SET followed_by='$followed_by' WHERE username='$uploader'";

if ($conn->query($sql) === TRUE) {
    // $passs="Password Updated Successfully";
//   header("Location: edit_profile.php?passs=$passs");
} else {
  echo "Error updating record: " . $conn->error;
}
?>
<?php
    $sql = "UPDATE post SET likes='$image_like',comments='$comment_sl' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    // $passs="Password Updated Successfully";
//   header("Location: edit_profile.php?passs=$passs");
} else {
  echo "Error updating record: " . $conn->error;
}
?>
                
        <?php
  $key=0;
   $host = gethostbyaddr($_SERVER["REMOTE_ADDR"]);//get the user ip
$sql = "SELECT * FROM view where user_ip='$host' && image_id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $key=1;
                }}
                
                 $key;
                if($key==0){
$sql = "INSERT INTO view (image_id, user_ip) VALUES ('$id', '$host')";

if (mysqli_query($conn, $sql)) {
  
   
} else {
    // $error = mysqli_error($conn);
    // echo "ERROR: Could not able to execute  $error";
}
}
$view=0;//initiate the view counter
$sql = "SELECT * FROM view where image_id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $key=1;
                    $view++;//calculate views
                }}
               
         $earning=$view/1000;//calculate earning        
   $sql = "UPDATE post SET view='$view',earn='$earning' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    // $passs="Password Updated Successfully";
//   header("Location: edit_profile.php?passs=$passs");
} else {
  echo "Error updating record: " . $conn->error;
}?>
                
<?php 

include('login.php'); // Includes Login Script
if (isset($_SESSION['login_user'])) {
    $earnings=0;
      $sql = "SELECT * FROM post where uploader='$login_session'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    
                    $earnings+=$row['earn'];
                }}
                 $sql = "SELECT * FROM users where username='$login_session'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    
                    $withdraw+=$row['total_withdrawal'];
                }}
                
                $current_ammount=$earnings-$withdraw;
                
                // echo $earnings;
                
    $sql = "UPDATE users SET total_earn='$earnings',current_balance='$current_ammount' WHERE username='$login_session'";

if ($conn->query($sql) === TRUE) {
    // $passs="Password Updated Successfully";
//   header("Location: edit_profile.php?passs=$passs");
} else {
  echo "Error updating record: " . $conn->error;
}
}
?>            

                


<!-- Shop Detail Start -->
<div class="container-fluid pb-5">
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <!--<div class="carousel-inner bg-light">-->
                <!--    <div class="carousel-item active">-->
                <!--        <img class="w-100 h-100" src="img/product-1.jpg" alt="Image">-->
                <!--    </div>-->
                <!--    <div class="carousel-item">-->
                <!--        <img class="w-100 h-100" src="img/product-2.jpg" alt="Image">-->
                <!--    </div>-->
                <!--    <div class="carousel-item">-->
                <!--        <img class="w-100 h-100" src="img/product-3.jpg" alt="Image">-->
                <!--    </div>-->
                <!--    <div class="carousel-item">-->
                <!--        <img class="w-100 h-100" src="img/product-4.jpg" alt="Image">-->
                <!--    </div>-->
                <!--</div>-->
                
                <!-- <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">-->
                <!--    <i class="fa fa-2x fa-angle-left text-dark"></i>-->
                <!--</a>-->
                <!--<a class="carousel-control-next" href="#product-carousel" data-slide="next">-->
                <!--    <i class="fa fa-2x fa-angle-right text-dark"></i>-->
             
                
                      <?php

            $sql = "SELECT * FROM follow_list where following='$uploader' && follower='$login_session'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
              $follow=1;
              $f_id=$row['id'];//follower id
                }}?>
                
                       <?php

            $sql = "SELECT * FROM image_reaction where reacted_email='$login_session' && image_id='$id'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
              $like=1;
              $like_id=$row['id'];//reaction table id
         
                }}?>
                
                 <div class="carousel-inner">
                     <?php
 
            $sql = "SELECT * FROM post where id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
              
                ?>
                    <div class=" active">
                        <img class="w-100 h-100" src="user_image/<?php echo $row['image']?>" alt="Image">
                    </div>
                    
                    
                </div>
                <a class="carousel-control-prev" style="color:#fff" href="previous_image.php?id=<?php echo $row['id']?>" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="next_image.php?id=<?php echo $row['id']?>" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>


        <style>
            @media screen and (max-width: 480px) {
                .mbl-avater img {
                    width: 70px;

                }

                .left-mbl-view {
                    padding-left: 35px;
                }

                .right-mbl-view {
                    padding-left: 0px;
                    padding-right: 20px;
                }

            }
        </style>

        <div class="col-lg-5 h-auto mb-30">
            <div class="h-100 bg-light p-30">
                  <a href="profile.php" style="text-decoration:none;"> <h5><?php echo $row['uploader_name']?></h5></a>
                 
                <hr>

                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-3 col-lg-3 col-md-3 col-sm-3 text-center">
                        <img class="mbl-avater" src="user_profile/<?php echo $row['user_image']?>" alt="" style="border-radius: 50%;width: 90px; height:90px;">

                    </div>

                    <div class=" col-3 col-lg-3 col-md-3 col-sm-3  text-center left-mbl-view">
                        <img src="img/detail/follower.png" alt="" style="width: 25px;padding-top:20px;">
                        <p style="font-size: 13px;"><?php echo  $followed_by?></p>
                    </div>

                    <div class=" col-3 col-lg-3 col-md-3 col-sm-3  text-center">
                        <img src="img/detail/view.png" alt="" style="width: 25px; padding-top:20px;">
                        <p style="font-size: 13px;"> <?php echo $view?></p>
                    </div>
                    <div class="col-3 col-lg-3 col-md-3 col-sm-3 text-center right-mbl-view">
                        <img src="img/detail/love.png" alt="" style="width: 25px; padding-top:20px; ">
                        <p style="font-size: 13px;"><?php echo $image_like?></p>
                    </div>
                </div>
                <hr>


                <style>
                    .profile-btn {
                        background-color: #f6f6f7;
                        border: none;
                        border-radius: 5px;
                        width: 80%;
                        margin-bottom: 5px;
                        padding: 5px 5px 5px 5px;
                        font-size: 12px;

                    }

                    @media screen and (max-width: 540px) {
                        .mbl-view {
                            width: 33%;
                        }

                        .social-view {
                            width: 70%;
                            margin-bottom: 0px;
                            margin-top: 0px;
                            padding: 0px;
                        }

                        .detail-profile-btn {
                            margin-top: 30px;

                        }

                        .profile-btn {
                            margin-left: 10px;
                        }

                    }
                </style>

                <section class="" style="margin-bottom: 20px;">
                    <div class="row respo detail-profile-btn">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center mbl-view" style="padding-left: 0px; padding-right: 5px; ">
                         <a href="user_profile.php?uploader=<?php echo $row['uploader']?>"><button class="profile-btn"> <i class="fa-solid fa-circle-info" style="color: black;"></i> Profile </button></a>

                        </div>
<?php if($like==1){?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center mbl-view" style="padding-left: 0px; padding-right: 5px; ">
                          <a href="unlike.php?id=<?php echo $id?>&&like_id=<?php echo $like_id?>">  <button class="profile-btn"> <i class="fa-solid fa-heart"></i> Liked </button></a>

                        </div>
                        <?php }else {?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center mbl-view" style="padding-left: 0px; padding-right: 5px; ">
                          <a href="image_reaction.php?id=<?php echo $id?>&&type=like">  <button class="profile-btn"> <i class="fa-solid fa-heart"></i> Like </button></a>

                        </div>
                        <?php }?>
<?php if($follow==1){?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center detail-follow-btn mbl-view" style="padding-left: 0px; padding-right: 5px; ">
                            <a href="unfollow.php?f_id=<?php echo $f_id?>&&id=<?php echo $id?>"><button class="profile-btn"> <i class="fa-solid fa-square-plus"></i> Following</button></a>

                        </div>
                        <?php } else{?>
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center detail-follow-btn mbl-view" style="padding-left: 0px; padding-right: 5px; ">
                            <a href="follow.php?uploader=<?php echo $uploader?>&&id=<?php echo $id?>"><button class="profile-btn"> <i class="fa-solid fa-square-plus"></i> Follow</button></a>

                        </div>
                        <?php }?>
                        
                    </div>
                </section>

                <!-- ------------- Share section---------------- -->

                <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0&appId=3454604981533938&autoLogAppEvents=1" nonce="P7GFKq4y"></script>

                <section>
                    <style>
                        .social-view {
                            padding-left: 0px;
                            padding-right: 0px;

                        }

                        @media screen and (max-width: 540px) {
                            .share-mbl-view {
                                padding-right: 30px;
                            }

                        }
                    </style>

                    <div class="d-flex align-items-center pt-0" style="padding-left: 12px; margin-top: 30px;">
                        <div class="row share-mbl-view">
                            <div class=" col-3 col-lg-3 col-md-3 col-sm-3 text-center  social-view">
                                <p style="margin-bottom: 8px;"><strong class="text-dark mr-1">Share on:</strong></p>

                            </div>

                            <div class=" col-3 col-lg-3 col-md-3 col-sm-3  social-view">
                            <div class="fb-share-button" data-href="https://piclick.xyz/detail.php?id=593" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpiclick.xyz%2Fdetail.php%3Fid%3D593&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                            
                                <!-- <a class="text-dark px-2" href="https://www.facebook.com">
                                    <button style="width:100%;background-color:#1f4aea; border: none; color: white; font-size:9px; border-radius:8px; padding:5px 8px 5px 8px; margin-bottom:5px;"><i class="fa-brands fa-facebook"></i> <b>Facebook</b></button>
                                </a> -->

                            </div>

                            <div class="col-3 col-lg-3 col-md-3 col-sm-3 text-left  social-view">
                                <a class="text-dark px-2" href="https://www.instagram.com">
                                    <button style="width:100%; background-color: #E1306C; border: none; color: white; font-size:9px; border-radius:8px; padding:5px 8px 5px 8px; margin-left: 5px;   margin-bottom:5px;"><i class="fab fa-instagram"></i><b> Instagram</b></button>

                                </a>

                            </div>

                            <div class="col-3 col-lg-3 col-md-3 col-sm-3 text-left social-view">
                                <a class="text-dark px-2" href="https://www.pinterest.com/">
                                    <button style=" margin-left: 10px; width:100%; background-color:#f52121 ; border: none; color: white; font-size:9px; border-radius:8px; padding:5px 8px 5px 8px;margin-bottom:5px;"><i class="fab fa-pinterest"></i><b> Pinterest</b></button>

                                </a>

                            </div>
                        </div>
                    </div>


                </section>




                <!----------- Add to cart ------------>
<?php if($row['is_for_sale']=='yes'){?>
                <div class="d-flex align-items-center mb-4 pt-2" style="padding-left:0rem;">
                    <!--<button class="btn btn-primary px-3" style="border-radius: 4px; width: 100%;" ><a href="checkout.php" > <i class="fa fa-shopping-cart mr-1" > </i>Buy Now </a> </button>-->
                    <a class="btn btn-primary px-3" style="border-radius: 4px; width: 100%;" href="cart.php">Buy Now</a>
                </div>
                <?php }?>

<?php }}?>


                <!---------------- Comments section start --------------------->
                    <style>
                        .center {
                            margin: auto;

                        }
                        .scroll-sec {
                            width:100%;
                            height:120px;
                            overflow-y: scroll;
                            overflow-x: hidden;
                        }
                        
                    </style>
                    
                <section style="margin-top:40px ;">
                    <div class="row" style="margin-top:20px ;">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <?php
include('login.php'); // Includes Login Script
if (isset($_SESSION['login_user'])) {?>
                            <form action="post_comment.php?id=<?php echo $id?>" method="POST">
                                <div class="row">
                                    <div class="col-9 col-lg-9 col-md-9 col-sm-9 form-group text-right" style="padding-right:0px;">
                                        <input type="text" id="fname" name="comment" placeholder="Add a comment..." class="form-control" style="border-radius:4px;">
                                    </div>

                                    <div class="col-3 col-lg-3 col-md-3 col-sm-3 text-left" style="padding-left:3px ;">
                                        <input type="submit" value="Post" style="background-color: green; color:white; border:none; padding: 6px 15px; border-radius:4px;">

                                    </div>

                                    <!-- <div class="col-md-2" style="padding-left:12px;">
                                            <div class="form-group mb-0">
                                                <input type="submit" value="Post" class="btn btn-secondary px-3" style="border-radius:5px;">
                                            </div>

                                        </div> -->
                                </div>

                            </form>
<?php }?>
                        </div>
                    </div>
                    
                    <div>
                         <h5 class="mb-4">Comments </h5>
                    </div>
                   
                    <div class="scroll-sec">
                        <?php


            $sql = "SELECT * FROM comment where image_id=$id order by id DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                 
                ?> 
                    <div class="row " style="margin-bottom:20px ;" >
                        <div class="col-2 col-lg-2 col-md-2 col-sm-2 text-center center">
                            <img class="mbl-avater" src="img/detail/avater.jpeg" alt="" style="border-radius: 50%; width: 40px;">
                        </div>
                        
                        <div class="col-10 col-lg-10 col-md-10 col-sm-10 center" style="padding-left:0px;">
                             <a href="profile.php" style="text-decoration:none;"><h6 class="center"><?php echo $row['view_name']?></h6> </a>
                       
                           
                        </div>
                        <div class="col-2 col-lg-2 col-md-2 col-sm-2 center"></div>
                        <div class="col-10 col-lg-10 col-md-10 col-sm-10 center" style="padding-left:0px;">
                             <p class="center" style="font-size:14px;"><?php echo $row['comment']?></p>
                        </div>
                    </div>
                <?php }}?>
                   
                </div> 
                    

                    

                </section>

                <!----------------- Comments section end -------------------------->


            </div>
        </div>
    </div>
</div>



<div class="container-fluid pt-0 pb-0">
    <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Other Pictures</span></h4>
    <div class="row px-xl-5">
        <?php
 $user_post=0;
            $sql = "SELECT * FROM post where id!=$id order by id DESC LIMIT 8";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <a href="detail.php?id=<?php echo $row['id']?>"> <img  src="user_image/<?php echo $row['image']?>" alt="" width="100%" height="200"> </a>
                   
                </div>
                <div class="text-left py-2" style="padding-left: 16px;">
                    <a class="#" class="text-left" href=""><i class="fa-solid fa-heart" style="color:black;"></i></a>
                    <?php 
                       include('login.php'); // Includes Login Script
                    if (isset($_SESSION['login_user'])) {
                       
                      ?>
                      <a class="#" class="text-left" href="detail.php?id=<?php echo $row['id']?>"><i class="fa-regular fa-comment" style="color:black;"></i></a>
                      <?php  }else{?>
                           <a class="#" class="text-left" href="sign_in.php"><i class="fa-regular fa-comment" style="color:black;"></i></a>
                   <?php  }?>
                    <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>
                    <div class="text-left mt-2">
                        <a class="h6 text-decoration-none text-truncate" href="user_profile.php?uploader=<?php echo $row['uploader']?>"><?php echo $row['uploader_name']?></a>
                        <p style="font-size: 13px;"><?php echo $row['title']?> </p>
                    </div>
                </div>
            </div>
        </div>
        <?php }}?>
       
    </div>
   
</div>
<!-- Products End -->


<!-- ############################## Footer Section ############################## -->

<?php include 'footer.php'; ?>