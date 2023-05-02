<?php
include 'session.php';

include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    $link = 'sign_in.php'; // Redirecting To Profile Page
    $home = "/";
} else {
    $link = 'upload_image.php';
    $home = "explore.php";
    include 'config.php';

    $sql = "SELECT * FROM users where username='$login_session'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $current_ammount = $row['current_balance'];
        }
    }
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
    <meta name="description" content="Earning Views">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Pic-Click">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Piclick local</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta property="og:url" content="https://piclick.xyz/explore.php" />
    <meta property="og:type" content="Image" />
    <meta property="og:title" content="Earn From your captures" />
    <meta property="og:description" content="<?php echo $description ?>" />
    <meta property="og:image" content="https://piclick.xyz/user_image/<?php echo $image ?>" />


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
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

    <!--bell-->
    <!--<link rel="stylesheet" href="assets/css/app.min.css">-->
    <!-- Template CSS -->
    <!--<link rel="stylesheet" href="assets/css/style.css">-->
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />

    <!----------------------Album Upload-------------------------->
    <!--<link href="./src/css/main.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="css/album/style.css">

    <!-- Exhibition-1 -->
    <link rel="stylesheet" href="css/exhibition-1/exhi.css">



    <!-- api -->

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="235229607446-4tq7bo2g3f583im5m9t6o4rai3gcc4rm.apps.googleusercontent.com ">

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

</head>

<body>

    <style>
        
        .input {
            width: 100%;
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

        .upload-btn {
            margin-top: 75px;
            border: none;
            border-radius: 5px;
            color: #fff;
        }

        .upload-btn:active {
            border: 1px soliod yellow;

        }

        .exhibition-submit {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 5px 15px;
            border-radius: 5px;
            font-size: 13px;
        }

        .exhibition-submit-mbl-view {
            margin-right: 13px;
        }

        .exhibition-submit:hover {
            background-color: #fff;
            color: green;
            border: 1px solid green;
            padding: 5px 15px;
            border-radius: 5px;
            font-size: 13px;
        }

        @media screen and (max-width:480px) {

            .upload-view {
                width: 100%;

            }

            .mbl-view {
                margin-top: -20px;

            }

            .mbl-label {
                padding-top: 5px;

            }

            .upload-btn-mbl-view {
                text-align: center;
                margin-top: 4px;
                margin-bottom: 12px;
            }



            .stat-mbl-view {
                text-align: center;
            }

            .hr-mble-view {
                width: 300px;
            }

            .modal-mbl-view {
                width: 400px;
                height: 800px;
            }

            .input-mbl-view {
                padding-left: 0px;
                padding-right: 30px;
                margin-top: 7px;
            }

            .input-cat-mbl-view {
                margin-top: 25px;
            }

            .label-mbl-view {
                text-align: left;

            }

            .exi-label-mbl-view {
                font-size: 13px;
            }
        }
    </style>


    <!-- modal jist -->
    <div class="modal fade bd-example-modal-lg" id="upload_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-mbl-view">
            <div class="modal-content " style="padding:15px; border-radius:4px;">
                <form action="upload_exhibition.php" method="post" enctype="multipart/form-data">
                    <div class="container" style="border-bottom: 1px solid #ccc;">
                        <div class="row" style="margin-bottom:15px;">
                            <div class="col-12 col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px;">
                                <p class="md-header">Upload a photo <span class="md-head">(maximum 3 photos)</span></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-lg-5 col-md-5 col-sm-5" style="padding-left: 0px; padding-right: 30px;">
                                <div class="wrapper">
                                    <div class="box">
                                        <div class="js--image-preview"></div>
                                        <div class="upload-options">
                                            <label>
                                                <input type="file" class="image-upload" accept="image/*" name="choosefile" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-7 col-md-7 col-sm-12">
                                <div class="row" style="margin-bottom: 8px;">
                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12 input-mbl-view input-cat-mbl-view ">
                                        <select class="form-control selectric text-area" name="category">
                                            <option>Category</option>
                                            <?php
                                            $sql = "SELECT * FROM category where id!=1 order by id ASC";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) { ?>
                                                    <option value="<?php echo $row['category_name'] ?>"><?php echo $row['category_name'] ?></option>
                                            <?php }
                                            } ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="margin-bottom: 8px;">
                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12 input-mbl-view  label-mbl-view">
                                        <label for="fname" class="exi-label exi-label-mbl-view">Title</label><br>
                                        <input class="exi-input" type="text" id="fname" name="title" placeholder=" Add name"><br>
                                    </div>
                                </div>

                                <div class="row" style="margin-bottom: 8px;">
                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12 input-mbl-view label-mbl-view">
                                        <label for="fname" class="exi-label exi-label-mbl-view">Description</label><br>
                                        <textarea class="text-area" id="" name="description" rows="4" cols="50" placeholder=" Add a short description"></textarea><br>
                                    </div>
                                </div>

                                <div class="row" style="margin-bottom: 12px;">
                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12 input-mbl-view label-mbl-view">
                                        <label for="fname" class="exi-label exi-label-mbl-view">Tags</label><br>
                                        <textarea class="text-area" id="" name="tags" rows="3" cols="50" placeholder=" Add tags"></textarea><br>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="row" style="margin-top: 15px; margin-bottom:0px; margin-right: 5px;">
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12 text-right">
                            <button type="submit" style="background-color: green; border: none; color: white;font-size: 14px;padding: 7px 20px;border-radius: 7px;margin-right: 40px;margin-bottom: 10px;" name="uploadfile">Upload</button>

                        </div>
                        <div class="text-right">


                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>



    <!----------------- Modal start ------------------->

    <!-- <div class="modal fade" id="upload_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <style>
                .input {
                    width: 100%;
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
                    margin-left: 15px;
                    font-size: 18px;
                    border: none;
                    cursor: pointer;
                }

                .dropdown {
                    position: relative;
                    display: inline-block;
                    margin-bottom: 5px;
                }

                .dropdown-content {
                    display: none;
                    position: absolute;
                    background-color: #f9f9f9;
                    min-width: 160px;
                    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
                    z-index: 1;
                }

                .dropdown-content p {
                    color: black;
                    padding: 0px 0px;
                    padding-left: 10px;
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
                    <form action="<?php echo $link ?>" method="POST" enctype="multipart/form-data">
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
                                                        while ($row = $result->fetch_assoc()) { ?>
                                                            <option value="<?php echo $row['category_name'] ?>"><?php echo $row['category_name'] ?></option>
                                                    <?php }
                                                    } ?>

                                                </select>

                                                <div class="row" style="margin-bottom: 20px;margin-top:20px">

                                                    <div class="col-"></div>
                                                    <div class="col-12">
                                                        <input type="text" name="title" class="input no-outline" placeholder="Caption...">

                                                    </div>


                                                </div>
                                                <div class="col-12" style="margin-top: 40px; margin-bottom: 30px;">
                                                    <input type="text" name="keywords" class="input no-outline" placeholder="Keyword-1,keyword-2..">

                                                </div>

                                                <div class="form-group row mb-4">
                                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" style="color: #747474; line-height: 2.5;font-size:18px;">Image</label>
                                                    <div class="col-sm-12 col-md-7 mbl-view">
                                                        <div id="image-preview" class="image-preview " style="margin-top: 20px;">
                                                            <label class="intro" for="image-upload" id="image-label" cl-label style="background-color: #fafafa05;color: black; font-size: 20px; font-weight:500"><i class="fa-solid fa-plus" style="color:#28a745;"></i></label>
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
    </div> -->


    <!------------ Modal end ------------------>

    <!----------- Navbar Start ----------------->

    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">

            <div class="col-lg-3 d-none d-lg-block">

                <a href="/"> <img src="img/white-logo-Picclick.png" alt="" style="width:45%; height:40px;margin-top: 15px;"></a>

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

                            <a href="/" class="nav-item nav-link  pri_hover" style="padding-top:21px;">Home</a>
                            <a href="explore.php" class="nav-item nav-link pri_hover" style="padding-top:21px;">Explore</a>
                            <!-- <a href="shop.php" class="nav-item nav-link">Gallery</a> -->
                            <a href="marketplace.php" class="nav-item nav-link pri_hover" style="padding-top:21px;">Marketplace</a>
                            <?php
                            include 'session.php';
                            include('login.php'); // Includes Login Script
                            if (!isset($_SESSION['login_user'])) {
                                header("location: sign_in.php"); // Redirecting To Profile Page


                            ?>
                                <style>
                                    .search-bar:focus {
                                        outline: none;
                                    }

                                    .input-icons i {
                                        position: absolute;
                                    }

                                    .input-icons {
                                        width: 120%;
                                        margin-bottom: 0px;

                                    }

                                    .icon {
                                        padding: 10px;
                                        min-width: 40px;
                                    }

                                    .input-field {
                                        width: 148%;
                                        padding-top: 5px;
                                        padding-bottom: 5px;
                                        padding-left: 30px;
                                        border: none;
                                        font-size: 14px;
                                        background-color: #6c6c6ce3;
                                        color: #FFFFFF;
                                        border-radius: 15px;
                                    }

                                    @media screen and (min-width: 720px) {
                                        .large-display {
                                            display: none;

                                        }
                                    }
                                </style>

                                <a href="sign_in.php" class="nav-item nav-link pri_hover" style="padding-top:21px;">Sign in</a>

                                <a href="sign_up.php" class="nav-item nav-link pri_hover" style="padding-top:21px;">Sign up</a>

                                <a href="exhibiton_1.php" class="nav-item nav-link pri_hover" style="padding-top:21px;">Exhibition</a>



                                <form class="nav-item nav-link pri_hover">

                                    <!--<div class="input-icons search-bar">-->
                                    <!--    <i class="fa fa-search icon"></i>-->
                                    <!--    <input class="input-field" type="text" placeholder="search...">-->
                                    <!--</div>-->

                                </form>

                            <?php } else { ?>
                                <a href="logout.php" class="nav-item nav-link pri_hover" style="padding-top:21px;">Sign Out</a>
                            <?php } ?>

                            <a href="#" class="btn btn-primary upload-btn upload-btn-mbl-view nav-item nav-link large-display pri_hover" style="padding-top:21px;" data-toggle="modal" data-target="#upload_modal">Upload</a>

                            <!-- <button type="button" class="" > <span style="color: #fff;">Upload Photo</span></button> -->

                            <?php
                            include('login.php'); // Includes Login Script
                            if (isset($_SESSION['login_user'])) {


                            ?>
                                <a href="notifications.php?uploader=<?php echo $login_session ?>" class="nav-item nav-link large-display pri_hover small-display" style="padding-top:21px;">Notifications</a>

                            <?php } ?>



                            <a href="profile.php?uploader=<?php echo $login_session ?>" class="nav-item nav-link large-display pri_hover small-display" style="padding-top:21px;padding-bottom: 21px;">Profile</a>


                            <a href="#" class="large-display px-0 ml-0" style="text-decoration:none; color:#fff;">
                                <i class="fa fa-usd pri_hover" aria-hidden="true"></i>
                                <span class="pri_hover badge text-secondary"> <?php echo $current_ammount ?></span>
                            </a>




                        </div>

                        <!---------------- Also mobile view on the up ------------------->



                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">


                            <a href="#" class="px-0" style="text-decoration:none; ">
                                <i class="fa-solid fa-arrow-up-from-bracket pri_hover" style="color: #fff;"></i>

                                <span class="pri_hover" style="padding-bottom: 2px; color: #fff;" data-toggle="modal" data-target="#upload_modal">Upload</span>
                            </a>



                            <!----------------Notification---------------------------->

                            <style>
                                .center {
                                    margin: auto;

                                }

                                .scroll-sec {
                                    width: 100%;
                                    height: 120px;
                                    overflow-y: scroll;
                                    overflow-x: hidden;
                                }
                            </style>

                            <?php
                            include('login.php'); // Includes Login Script
                            if (isset($_SESSION['login_user'])) {


                            ?>
                                <li class="dropdown dropdown-list-toggle "><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg pri_hover" style="padding-right:0px;"> <i data-feather="bell" class="bell "></i>
                                    </a>
                                <?php } ?>
                                <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown" style="width: 300px; border-radius: 5px;">

                                    <div class="row" style="margin-bottom: -5px;">
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-left" style="padding-left:10px; padding-top:2px;">
                                            <p style="font-size:16px;color:#000;margin-left:15px;font-weight:500;">Notifications</p>
                                        </div>
                                        <div class="col-6 col-lg-6 col-md-6 col-sm-6 text-right" style="padding-right:30px;">
                                            <a href="notifications.php" style="text-decoration:none;"><span style="color:#2773dc;font-size:14px;">See all</span></a>
                                        </div>
                                    </div>
                                    <hr style="margin-top: 0px;margin-bottom: 5px;">


                                    <div class="scroll-sec" style="width: 300px; height:300px;">

                                        <a href="detail.php">
                                            <div class="row " style="margin-bottom:10px ;">

                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center">
                                                    <img class="mbl-avater" src="img/detail/avater.jpeg" alt="" style="margin-left:20px; border-radius: 50%; width: 35px;">
                                                </div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 center">
                                                    <h6 class="center" style="margin-left:15px; font-size:12px;color:black;">Sheikh Saiful Ahmed</h6>
                                                </div>


                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center"></div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 ">
                                                    <p class="center" style="color:#646464; margin-left:15px; font-size:10px;line-height: 1;padding-top:0px; margin-top: -7px;">Changed his profile picture</p><span style="margin-left:15px; font-size:9px;color:black;">35 minutes ago</span>
                                                </div>

                                            </div>
                                        </a>

                                        <a href="detail.php">
                                            <div class="row " style="margin-bottom:10px ;">

                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center">
                                                    <img class="mbl-avater" src="img/detail/avater.jpeg" alt="" style="margin-left:20px; border-radius: 50%; width: 35px;">
                                                </div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 center">
                                                    <h6 class="center" style="margin-left:15px; font-size:12px;color:black;">Sheikh Saiful Ahmed</h6>
                                                </div>


                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center"></div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 ">
                                                    <p class="center" style="color:#646464; margin-left:15px; font-size:10px;line-height: 1;padding-top:0px; margin-top: -7px;">Changed his profile picture</p><span style="margin-left:15px; font-size:9px;color:black;">35 minutes ago</span>
                                                </div>

                                            </div>
                                        </a>

                                        <a href="detail.php">
                                            <div class="row " style="margin-bottom:10px ;">

                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center">
                                                    <img class="mbl-avater" src="img/detail/avater.jpeg" alt="" style="margin-left:20px; border-radius: 50%; width: 35px;">
                                                </div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 center">
                                                    <h6 class="center" style="margin-left:15px; font-size:12px;color:black;">Sheikh Saiful Ahmed</h6>
                                                </div>


                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center"></div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 ">
                                                    <p class="center" style="color:#646464; margin-left:15px; font-size:10px;line-height: 1;padding-top:0px; margin-top: -7px;">Changed his profile picture</p><span style="margin-left:15px; font-size:9px;color:black;">35 minutes ago</span>
                                                </div>

                                            </div>
                                        </a>

                                        <a href="detail.php">
                                            <div class="row " style="margin-bottom:10px ;">

                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center">
                                                    <img class="mbl-avater" src="img/detail/avater.jpeg" alt="" style="margin-left:20px; border-radius: 50%; width: 35px;">
                                                </div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 center">
                                                    <h6 class="center" style="margin-left:15px; font-size:12px;color:black;">Sheikh Saiful Ahmed</h6>
                                                </div>


                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center"></div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 ">
                                                    <p class="center" style="color:#646464; margin-left:15px; font-size:10px;line-height: 1;padding-top:0px; margin-top: -7px;">Changed his profile picture</p><span style="margin-left:15px; font-size:9px;color:black;">35 minutes ago</span>
                                                </div>

                                            </div>
                                        </a>

                                        <a href="detail.php">
                                            <div class="row " style="margin-bottom:10px ;">

                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center">
                                                    <img class="mbl-avater" src="img/detail/avater.jpeg" alt="" style="margin-left:20px; border-radius: 50%; width: 35px;">
                                                </div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 center">
                                                    <h6 class="center" style="margin-left:15px; font-size:12px;color:black;">Sheikh Saiful Ahmed</h6>
                                                </div>


                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center"></div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 ">
                                                    <p class="center" style="color:#646464; margin-left:15px; font-size:10px;line-height: 1;padding-top:0px; margin-top: -7px;">Changed his profile picture</p><span style="margin-left:15px; font-size:9px;color:black;">35 minutes ago</span>
                                                </div>

                                            </div>
                                        </a>

                                        <a href="detail.php">
                                            <div class="row " style="margin-bottom:10px ;">

                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center">
                                                    <img class="mbl-avater" src="img/detail/avater.jpeg" alt="" style="margin-left:20px; border-radius: 50%; width: 35px;">
                                                </div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 center">
                                                    <h6 class="center" style="margin-left:15px; font-size:12px;color:black;">Sheikh Saiful Ahmed</h6>
                                                </div>


                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center"></div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 ">
                                                    <p class="center" style="color:#646464; margin-left:15px; font-size:10px;line-height: 1;padding-top:0px; margin-top: -7px;">Changed his profile picture</p><span style="margin-left:15px; font-size:9px;color:black;">35 minutes ago</span>
                                                </div>

                                            </div>
                                        </a>

                                        <a href="detail.php">
                                            <div class="row " style="margin-bottom:10px ;">

                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center">
                                                    <img class="mbl-avater" src="img/detail/avater.jpeg" alt="" style="margin-left:20px; border-radius: 50%; width: 35px;">
                                                </div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 center">
                                                    <h6 class="center" style="margin-left:15px; font-size:12px;color:black;">Sheikh Saiful Ahmed</h6>
                                                </div>


                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center"></div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 ">
                                                    <p class="center" style="color:#646464; margin-left:15px; font-size:10px;line-height: 1;padding-top:0px; margin-top: -7px;">Changed his profile picture</p><span style="margin-left:15px; font-size:9px;color:black;">35 minutes ago</span>
                                                </div>

                                            </div>
                                        </a>

                                        <a href="detail.php">
                                            <div class="row " style="margin-bottom:10px ;">

                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center">
                                                    <img class="mbl-avater" src="img/detail/avater.jpeg" alt="" style="margin-left:20px; border-radius: 50%; width: 35px;">
                                                </div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 center">
                                                    <h6 class="center" style="margin-left:15px; font-size:12px;color:black;">Sheikh Saiful Ahmed</h6>
                                                </div>


                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center"></div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 ">
                                                    <p class="center" style="color:#646464; margin-left:15px; font-size:10px;line-height: 1;padding-top:0px; margin-top: -7px;">Changed his profile picture</p><span style="margin-left:15px; font-size:9px;color:black;">35 minutes ago</span>
                                                </div>

                                            </div>
                                        </a>

                                        <a href="detail.php">
                                            <div class="row " style="margin-bottom:10px ;">

                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center">
                                                    <img class="mbl-avater" src="img/detail/avater.jpeg" alt="" style="margin-left:20px; border-radius: 50%; width: 35px;">
                                                </div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 center">
                                                    <h6 class="center" style="margin-left:15px; font-size:12px;color:black;">Sheikh Saiful Ahmed</h6>
                                                </div>


                                                <div class="col-2 col-lg-2 col-md-2 col-sm-2 center"></div>

                                                <div class="col-10 col-lg-10 col-md-10 col-sm-10 ">
                                                    <p class="center" style="color:#646464; margin-left:15px; font-size:10px;line-height: 1;padding-top:0px; margin-top: -7px;">Changed his profile picture</p><span style="margin-left:15px; font-size:9px;color:black;">35 minutes ago</span>
                                                </div>

                                            </div>
                                        </a>

                                    </div>

                                </div>
                                </li>



                                <a href="profile.php?uploader=<?php echo $login_session ?>" style="text-decoration: none;" class=" px-0 ml-3">
                                    <i class="fa-solid fa-user pri_hover" style="color: #fff;"></i>
                                    <!-- <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span> -->
                                </a>

                                <a href="#" class=" px-0 ml-3" style="text-decoration:none ; color:#fff">
                                    <i class="fa fa-usd pri_hover" aria-hidden="true"></i>
                                    <span class="pri_hover badge text-secondary"> <?php echo $current_ammount ?></span>
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