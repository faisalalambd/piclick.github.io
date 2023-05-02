<!-- ############################## Header Section ############################## -->
<?php
include 'session.php';
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: sign_in.php"); // Redirecting To Profile Page

}
$emails = $_GET['uploader'];
$text = $_GET['text'];
?>

<?php include 'header.php';
// include 'header1.php';

include 'config.php'; ?>
<?php
$user_post = 0;
$sql = "SELECT * FROM post where uploader='$login_session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $user_post++;
    }
} ?>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .header {
        text-align: center;
        padding: 0px;
    }

    .row {
        display: -ms-flexbox;
        /* IE 10 */
        display: flex;
        -ms-flex-wrap: wrap;
        /* IE 10 */
        flex-wrap: wrap;
        padding: 0 4px;
    }

    /* Create two equal columns that sits next to each other */
    .column {
        -ms-flex: 50%;
        /* IE 10 */
        flex: 50%;
        padding: 0 4px;
    }

    .column img {
        margin-top: 8px;
        vertical-align: middle;
    }

    /* Style the buttons */
    .btn {
        border: none;
        outline: none;
        padding: 7px 12px;
        background-color: #fafafa;
        cursor: pointer;
        font-size: 18px;
        color: black;
    }

    /* .btn:hover {
        background-color: #ddd;
    } */

    .btn.active {
        /* background-color: #666; */
        color: #666;
        /* border-top: 2px solid black; */
    }

    @media screen and (max-width: 540px) {
        .name-view {
            text-align: center;
            margin-top: 5px;

        }

        .profile-mbl-view {
            width: 33%;
        }


    }
</style>
<section>
    <div class="container" style="background-color:#fafafa; padding:30px;">
        <?php
        $sql = "SELECT * FROM 	users where username='$login_session'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $name = $row['name'];

        ?>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 text-center" style="padding-top:20px;">
                        <?php if ($row['pro_pic'] != null) { ?>
                            <img src="user_profile/<?php echo $row['pro_pic'] ?>" alt="" style="border-radius: 50%; width: 120px; height:120px; margin-bottom:10px;"> <br>
                        <?php } else { ?>
                            <img class="" src="img/detail/avater.jpeg" alt="" style="border-radius: 50%; width:120px;height:120px; margin-bottom:10px;">
                        <?php }
                        if ($uploader == null) { ?>

                           
                        <?php } ?>

                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 ">
                        <div class="row" style="padding-top:15px; padding-bottom:15px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 name-view" style="padding-left:20px;">
                                <h4><?php echo $row['name'] ?></h4>
                                 <a href="edit_profile.php"> <button style="border:1px solid #ccc; background-color:#fafafa; border-radius:5px; padding:3px 10px 3px  10px;"><b>Settings</b></button></a>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 text-center">

                            </div>
                        </div>

                        <div class="row" style="padding-top:15px; padding-bottom:15px;">
                            <div class="col-lg-2 col-md-2 col-sm-2 text-center profile-mbl-view" style="padding-left:0px ;">
                                <p style="color:black"><span><?php echo $user_post ?></span> posts</p>


                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 text-center profile-mbl-view" style="padding-left:0px ;">
                               <a href="followers.php"><p style="color:black"><span><?php echo $row['followed_by']?></span> followers</p></a> 
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 text-center profile-mbl-view" style="padding-left:0px ;">
                            <a href="following.php"><p style="color:black"><span><?php echo $row['followed_by']?></span> following</p></a> 



                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">

                            </div>


                        </div>

                        <div class="row" style="padding-top:15px; padding-bottom:15px;">
                            <div class="col-lg-6 col-md-6 col-sm-6 " style="padding-left:20px;">
                                <h6>Biography</h6>
                                <p style="color:black; font-size:14px;"><?php echo $row['bio'] ?></p>

                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 ">
                            </div>
                        </div>



                    </div>
                </div>
        <?php }
        } ?>
        <hr style="margin-bottom: 0px;">






        <section class="section">
            <div class="section-body">
                <div class="row mt-sm-0">

                    <!-- --------------------------- profile need--------------------------------------------------->

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card" style="border: none;">
                            <div class="padding-20">
                                <div class="row">
                                    <div class=" col-lg-12  col-md-12  col-sm-12" style="background-color:#fafafa  ;">

                                        <style>
                                            .mobile-display {
                                                margin-left: 300px;

                                            }

                                            .mobile-display li a {
                                                padding: 5px 25px 10px 25px;
                                                font-size: 14px;
                                                font-weight: 500;
                                                color: #262525;


                                            }

                                            /* .mobile-display li a:active {
                                                font-weight: 800;
                                                color: red;

                                            } */

                                            @media screen and (max-width: 540px) {
                                                .mobile-display {
                                                    margin-left: 0px;

                                                }

                                                .post-mbl-view {
                                                    width: 20%;
                                                    display: none;

                                                }
                                            }
                                        </style>

                                        <ul class="nav nav-tabs mobile-display" id="myTab2" role="tablist">
                                            <!--<li class="nav-item ">-->
                                            <!--    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#posts" role="tab" aria-selected="true" onClick="style.fontWeight='bold'"> <i class="fa-solid fa-table-cells" style="font-size:14px;"></i> <span class="post-mbl-view">Posts</span> </a>-->

                                            <!--</li>-->
                                            <!-- <li class="nav-item ">
                                                <a class="nav-link " id="profile-tab2" data-toggle="tab" href="#liked" role="tab" onClick="style.fontWeight='bold'" aria-selected="false"> <i class="fa-solid fa-heart" style="font-size:14px;"></i> <span class="post-mbl-view">Liked</span>  </a>
                                            </li> -->

                                            <!--<li class="nav-item ">-->
                                            <!--    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#albums" role="tab" aria-selected="false" onClick="style.fontWeight='bold'"> <i class="fa-regular fa-images" style="font-size:14px;"></i> <span class="post-mbl-view">Albums</span> </a>-->
                                            <!--</li>-->
                                            <!--<li class="nav-item ">-->
                                            <!--    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#saved" role="tab" aria-selected="false" onClick="style.fontWeight='bold'"> <i class="fa-solid fa-bookmark" style="font-size:14px;"></i> <span class="post-mbl-view">Saved</span> </a>-->
                                            <!--</li>-->

                                            <!--<li class="nav-item ">-->
                                            <!--    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#shops" role="tab" aria-selected="false" onClick="style.fontWeight='bold'"> <i class="fa-solid fa-bag-shopping" style="font-size:14px;"></i><span class="post-mbl-view"> Shops</span> </a>-->
                                            <!--</li>-->

                                        </ul>

                                    </div>


                                </div>



                                <div class="tab-content tab-bordered" id="myTab3Content" style="background-color:#fafafa;margin-top:20px  ;">

                                    <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="home-tab2">

                                        <div class="row px-xl-5 mt-0">
                                            <?php

                                            $sql = "SELECT * FROM post where uploader='$login_session' Order by id DESC";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) { ?>
                                                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                                                        <div class="product-item bg-light mb-4">
                                                            <div class="product-img position-relative overflow-hidden">
                                                                <a href="detail.php?id=<?php echo $row['id'] ?>"> <img src="user_image/<?php echo $row['image'] ?>" alt="" width="100%" height="200"> </a>

                                                            </div>
                                                            <div class="text-left py-2" style="padding-left:5px; padding-right: 8px;">
                                                                <div class="row">

                                                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-left">
                                                                        <a class="#" class="text-left" href=""><i class="fa-solid fa-heart" style="color:black;"></i></a>
                                                                        <a class="#" class="text-left" href="detail.php"><i class="fa-regular fa-comment" style="color:black;"></i></a>
                                                                        <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>
                                                                    </div>
                                                                    <div class="col-6 col-lg-6 col-md-6 col-sm-6 dropleft text-right">
                                                                           <i class="fa-solid fa-ellipsis-vertical"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                                                                            <div class="dropdown-menu dropleft" style="border:none;background-color:#fafafa;width:0px;">
                                                                                <a class="dropdown-item" href="edit_post.php?id=<?php echo $row['id']?>"> Edit</a>
                                                                                <a class="dropdown-item" href="delete_image.php?id=<?php echo $row['id']?>">Delete</a>
                                                                            </div>
                                                                   
                                                                    </div>
                                                                </div>
                                                                <div class="text-left mt-2">
                                                                    <a class="h6 text-decoration-none text-truncate" href=""><?php echo $row['uploader_name'] ?></a>
                                                                    <p style="font-size: 13px;"><?php echo $row['title'] ?> </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <?php }
                                            } ?>


                                        </div>





                                    </div>



                                    <div class="tab-pane fade" id="liked" role="tabpanel" aria-labelledby="profile-tab2">

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-3.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-3.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-3.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-3.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>


                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="albums" role="tabpanel" aria-labelledby="profile-tab2">

                                        <div class="row">
                                            
                                            <div class="col-lg-3 col-md-3 col-sm-3" style="">
                                                <a href="album.php"><img src="assets/img/cover.png" alt="" style="width: 100%;max-height:260px;"> </a>
                                            </div>
                                  
                                         
                                            <div class="col-lg-3 col-md-3 col-sm-3" style="">
                                                <img src="assets/img/" alt="" style="width: 100%;max-height:260px;">
                                            </div>
                                            
                                            <div class="col-lg-3 col-md-3 col-sm-3" style="">
                                                <img src="assets/img/" alt="" style="width: 100%;max-height:260px;">
                                            </div>
                                            
                                            <div class="col-lg-3 col-md-3 col-sm-3" style="">
                                                <img src="assets/img/" alt="" style="width: 100%;max-height:260px;">
                                            </div>
                                       

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="saved" role="tabpanel" aria-labelledby="profile-tab2">

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-2.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-2.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-2.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-2.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="shops" role="tabpanel" aria-labelledby="profile-tab2">

                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-1.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-1.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-1.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <img src="assets/img/pro-1.jpg" alt="" style="width: 100%;padding-bottom:5px;">
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>





<!-- ############################## Footer Section ############################## -->

<?php include 'footer1.php';
include 'footer.php';?>