
<?php
include 'session.php';

include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
   $link='sign_in.php'; // Redirecting To Profile Page
}else{
    $link='upload_image.php';
    include 'config.php'; 

$sql = "SELECT * FROM users where username='$login_session'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                
                    $current_ammount=$row['current_balance'];
                   
                    
                }}
}

$id=$_GET['id'];

$sql = "SELECT * FROM post where id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $description=$row['title'];
                    $image=$row['image'];
                }}
                
                if($description==null){
                    $description="Piclick is an online photo sharing platform to help you share yout images and get paid for it.";
                }
?>
<!-- ############################## Header Section ############################## -->
<?php include 'header2.php';
include 'session.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
      <meta name="description" content="<?php echo $description?>">
  <meta name="keywords" content="image, search image, earn,online earn,sharing, camera phone, video phone, free, upload">
  <meta name="author" content="Pic-Click">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Piclick</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta property="og:url"                content="https://piclick.xyz/explore.php" />
<meta property="og:type"               content="Image" />
<meta property="og:title"              content="Earn From your captures" />
<meta property="og:description"        content="<?php echo $description?>" />
<meta property="og:image"              content="user_image/<?php echo $image?>" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    
<!--multiple upload  -->
    <!--<link rel="stylesheet" href="assets/css/app.min.css">-->
  <link rel="stylesheet" href="assets/bundles/dropzonejs/dropzone.css">
  <!-- Template CSS -->
  <!--<link rel="stylesheet" href="assets/css/style.css">-->
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico'/>


    
 <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-14ZBXWL147"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-14ZBXWL147');
    </script>
    
    
    <!-- api -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="235229607446-4tq7bo2g3f583im5m9t6o4rai3gcc4rm.apps.googleusercontent.com ">
    
</head>

<body>


    <style>
        @media screen and (max-width: 540px) {
            .upload-view {
                width: 100%;

            }
            .mbl-view{
                margin-top: -20px;

            }
            .mbl-label{
                padding-top: 5px;

            }
        }
         .input {
        width: 100%;
        color: ;
        font-size: 16px;
        padding: 0px 0px;
        margin: 0px 0;
        display: inline-block;
        border: none;
        border-bottom: 1px solid #ccc;
        box-sizing: border-box;
    }
    
     .no-outline:focus {
        outline: none;
      }

    </style>



    <!-- Modal -->
    <div class="modal fade" id="upload_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" >
            
        <style>
    
        .input {
        width: 100%;
        color: ;
        font-size: 18px;
        padding: 0px 0px;
        margin: 0px 0;
        display: inline-block;
        border: none;
        border-bottom: 1px solid #ccc;
        box-sizing: border-box;
    }
    
     .no-outline:focus {
        outline: none;
      }
      
     .dropbtn {
  
  color: #6c757d;
  margin-left:15px;
  font-size: 18px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-bottom:5px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:#f9f9f9; 
  min-width: 160px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content p {
  color: black;
  padding: 0px 0px;
  padding-left:10px;
  text-decoration: none;
  display: block;
 }



 .dropdown:hover .dropdown-content {
  display: block;
 }

  .dropdown:hover .dropbtn {
  color: #3e8e41;
  }

    </style>
            
            <div class="modal-content" style="border-radius:0px ;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: green;">Upload Image</h5>
                    
                </div>
                <div class="modal-body">
                   <form action="<?php echo $link?>" method="POST" enctype="multipart/form-data">
                    <section class="section">
                        <div class="section-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        

                                        <div class="card-body mbl-label">
                                            <select id="cars" name="category" style="margin-bottom:15px">
                                            <option>Category....</option>
                                            <?php 
                                            $sql = "SELECT * FROM category where id!=1 order by id ASC";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {?>
                                            <option value="<?php echo $row['category_name']?>"><?php echo $row['category_name']?></option>
                                            <?php }}?>
                                           
                                          </select>
                                
                                               <div class="row" style="margin-bottom: 20px;margin-top:20px">
                                               
                                                  <div class="col-"></div>
                                                  <div class="col-12">
                                                     <input type="text" name="title" class="input no-outline" placeholder="Caption...">

                                                </div>
                                        </div>


                                            <div class="form-group row mb-4">
                                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"  style="color: #747474; line-height: 2.5;font-size:18px;">Image</label>
                                                <div class="col-sm-12 col-md-7 mbl-view">
                                                    <div id="image-preview" class="image-preview " style="margin-top: 20px;">
                                                        <label class="intro" for="image-upload" id="image-label" cl-label style="background-color: #fafafa05;color: black; font-size: 20px; font-weight:500"><i class="fa-solid fa-plus"></i></label>
                                                        <input class="upload-view" type="file" name="choosefile" id="image-upload" />
                                                      
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
                <div class="text-right">
                       <button type="submit" style="background-color: green; border: none; color: white;font-size: 14px;padding: 7px 20px;border-radius: 7px;margin-right: 40px;margin-bottom: 10px;" name="uploadfile">Upload</button>
                    
                </div>
                </form>
            </div>
        </div>
    </div>




    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">

            <div class="col-lg-3 d-none d-lg-block">

                <a href="/">  <img src="img/Picclick-logo.png" alt="" style="width:60px; hight:60px"></a>
 
            </div>

            <style>
                @media screen and (min-width: 720px) {
                    .large-display {
                        display: none;

                    }

                }
            </style>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <img src="img/Picclick-logo.png" alt="" style="width: 50px;">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">

<style>
    .pri_hover:hover {
        color: #28a745 !important;

    }
</style>

                        <div class="navbar-nav mr-auto py-0 ">

                            <a href="/" class="nav-item nav-link  pri_hover" >Home</a>
                            <a href="explore.php" class="nav-item nav-link pri_hover">Explore</a>
                            <!-- <a href="shop.php" class="nav-item nav-link">Gallery</a> -->
                            <a href="marketplace.php" class="nav-item nav-link pri_hover">Marketplace</a>
                            <?php
include 'session.php';
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: sign_in.php"); // Redirecting To Profile Page
    

?>
                            
                            <a href="sign_in.php" class="nav-item nav-link pri_hover" >Sign in</a>
                            <a href="sign_up.php" class="nav-item nav-link pri_hover" >Sign up</a>
<?php }else{?>
                            <a href="logout.php" class="nav-item nav-link pri_hover" >Sign Out</a>
<?php }?>
                            <a href="#" class="nav-item nav-link large-display pri_hover" data-toggle="modal" data-target="#upload_modal">Upload</a>
                            <a href="profile.php?uploader="<?php echo $login_session?>" class="nav-item nav-link large-display pri_hover" style="color: #28a745;">Profile</a>

                        </div>

                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">

                            <a href="#" class="px-0" style="text-decoration:none; ">
                                <i class="fa-solid fa-arrow-up-from-bracket pri_hover" style="color: #fff;"></i>
                                <span class="pri_hover" style="padding-bottom: 2px; color: #fff;" data-toggle="modal" data-target="#upload_modal">Upload</span>
                            </a>
                            
                             <a href="#" class="px-0" style="text-decoration:none; ">
                                <i class="fa-solid fa-bell" style="color: #fff; padding:10px;"></i>
                            </a>
<!--    <div class="wrapper">-->
<!--	<div class="notification_wrap">-->
<!--		<div class="notification_icon">-->
<!--			<i class="fas fa-bell"></i>-->
<!--		</div>-->
<!--		<div class="dropdown">-->
<!--			<div class="notify_item">-->
<!--				<div class="notify_img">-->
<!--					<img src="images/not_1.png" alt="profile_pic" style="width: 50px">-->
<!--				</div>-->
<!--				<div class="notify_info">-->
<!--					<p>Alex commented on<span>Timeline Share</span></p>-->
<!--					<span class="notify_time">10 minutes ago</span>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="notify_item">-->
<!--				<div class="notify_img">-->
<!--					<img src="images/not_2.png" alt="profile_pic" style="width: 50px">-->
<!--				</div>-->
<!--				<div class="notify_info">-->
<!--					<p>Ben hur commented on your<span>Timeline Share</span></p>-->
<!--					<span class="notify_time">55 minutes ago</span>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->
                            
                             <a href="profile.php?uploader="<?php echo $login_session?>" style="text-decoration: none;" class=" px-0 ml-3">
                               <i class="fa-solid fa-user pri_hover" style="color: #fff;"></i> 
                                <!-- <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span> -->
                            </a>



                            <a href="#" class=" px-0 ml-3" style="text-decoration:none ; color:#fff">
                              
                                <i class="fa fa-usd pri_hover" aria-hidden="true"></i>
                                <span class="pri_hover badge text-secondary"> <?php echo $current_ammount?></span> 
                                <!--<span class="pri_hover badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;"> 0</span>-->
                            </a>
                           
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- ############################## Footer Section ############################## -->

    <?php include 'footer2.php'; ?>