<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php';
?>
<style>
    .heading {
        background: -webkit-linear-gradient(#f60f28, #333);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-left: 40px;
        padding-top: 90px;
        font-size: 50px;
        font-weight: 700;
    }

    .ex-btn {
        color: #fff;
        /* background-color: #28a745; */
        background-image: linear-gradient(#28a745, #009900);
        border-radius: 4px;
        border: none;
        padding: 5px 15px;
        margin-top: 115px;
    }

    .photo-btn {
        color: #fff;
        font-size: 12px;
        background-color: #28a745;
        border-radius: 4px;
        border: none;
        padding: 3px 15px;
    }

    .photo-btn:hover {
        background-color: #3bc15a;
    }

    .about-btn {
        color: #fff;
        font-size: 12px;
        background-color: #28a745;
        border-radius: 4px;
        border: none;
        padding: 3px 15px;
    }

    .about-btn:hover {
        background-color: #3bc15a;
    }

    .exi-label {
        color: #000;
        font-size: 15px;
    }

    .exi-input {
        border: 2px solid #d6dadf;
        width: 100%;
        padding: 3px 5px 3px 10px;
        font-size: 15px;
    }

    .text-area {
        border: 2px solid #d6dadf;
        width: 100%;
        padding: 3px 5px 3px 10px;
        font-size: 15px;
    }

    .upload-btn {
        margin-top: 115px;
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

        .logo-mbl-view {
            text-align: center;
            width: 100px;
            height: 100px;
        }

        .heading-mbl-view {
            font-size: 28px;
            padding-top: 10px;
        }

        .upload-btn-mbl-view {
            text-align: center;
            margin-top: 8px;
            margin-bottom: 12px;
        }

        .about-btn-mbl-view {
            margin-left: 90px;
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
        .header-mbl-view {
            color: #28a745;
        }
        .exhibition-submit-mbl-view {
        margin-right: 13px;
    }
    }

    @media screen and (min-width:768px){
        .about-btn-desk-view{
            margin-left: 760px;
        }
    }
</style>

<!----------- modal start --------->



<!------------- Banner  ------------>

<section>
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">

        </div>
    </div>
</section>

<!------------- Logo & Heading section ------------>
<section>
    <div class="container" style="border-bottom: 2px solid #ddd;">
        <div class="row">
            <div class="col-12 col-lg-2 col-md-2 col-sm-12 logo-mbl-view">
                <img class="logo-mbl-view" src="img/Exi-1-logo.png" alt="" width="200" height="170">
            </div>
            <div class="col-12 col-lg-8 col-md-8 col-sm-12 text-left">
                <p class="heading heading-mbl-view">The Maiden Exhibition</p>
            </div>

            <!----------- Modal start ---------->
            <style>
                .md-header {
                    font-size: 18px;
                    font-weight: 450;
                    color: #28a745;
                }

                .md-head {
                    font-size: 10px;
                    font-weight: 300;
                    color: #797676;
                }
            </style>
            <div class="col-12 col-lg-2 col-md-2 col-sm-2 upload-btn-mbl-view">

                <!-- Modal Start -->
                <button type="button" class="btn btn-primary upload-btn upload-btn-mbl-view" data-toggle="modal" data-target=".bd-example-modal-lg"> <span style="color: #fff;">Upload Photo</span></button>

                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-mbl-view">
                        <div class="modal-content " style="padding:15px; border-radius:4px;">
                            <form action="">
                                <div class="container" style="border-bottom: 1px solid #ccc;">
                                    <div class="row" style="margin-bottom:15px;">
                                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
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
                                                            <input type="file" class="image-upload" accept="image/*" />
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-lg-7 col-md-7 col-sm-12">
                                            <div class="row" style="margin-bottom: 8px;">
                                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 input-mbl-view input-cat-mbl-view ">
                                                    <select class="form-control selectric text-area" name="medium">
                                                        <option>Category</option>
                                                        <option>Nature</option>
                                                        <option>Travel</option>
                                                        <option>Landscape</option>
                                                        <option>Peoples & Places</option>
                                                        <option>Art</option>
                                                        <option>Food</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-bottom: 8px;">
                                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 input-mbl-view  label-mbl-view">
                                                    <label for="fname" class="exi-label exi-label-mbl-view">Image Name</label><br>
                                                    <input class="exi-input" type="text" id="fname" name="fname" placeholder=" Add name"><br>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-bottom: 8px;">
                                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 input-mbl-view label-mbl-view">
                                                    <label for="fname" class="exi-label exi-label-mbl-view">Description</label><br>
                                                    <textarea class="text-area" id="" name="w3review" rows="4" cols="50" placeholder=" Add a description"></textarea><br>
                                                </div>
                                            </div>

                                            <div class="row" style="margin-bottom: 12px;">
                                                <div class="col-12 col-lg-12 col-md-12 col-sm-12 input-mbl-view label-mbl-view">
                                                    <label for="fname" class="exi-label exi-label-mbl-view">Tags</label><br>
                                                    <textarea class="text-area" id="" name="w3review" rows="3" cols="50" placeholder=" Add tags"></textarea><br>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="row" style="margin-top: 15px; margin-bottom:0px; margin-right: 5px;">
                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12 text-right">
                                        <input class="exhibition-submit exhibition-submit-mbl-view" type="submit" value="Upload">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal End -->
            </div>


        </div>
    </div>
</section>

<section>
    <div class="container" style="background-color:#f5f5f5;">
        <div class="row px-xl-5">
            <div class="col">
                <div class=" p-30" style="background-color:#f5f5f5;">
                    <div class="nav nav-tabs mb-4">
                        <a class="nav-item nav-link text-dark active" data-toggle="tab" href="#tab-pane-1"><button class="photo-btn">Photos</button> </a>
                        <a class="nav-item nav-link text-dark " data-toggle="tab" href="#tab-pane-2"><button class="about-btn about-btn-mbl-view about-btn-desk-view">About</button></a>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row ">
                                <?php
                                $user_post = 0;
                                $sql = "SELECT * FROM post where image!='No available Image.png' order by id DESC LIMIT 20";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        $pic_id = $row['id'];
                                        if ($pic_id > 609) {
                                            $location = "user_image";
                                        } else {
                                            $location = "archives";
                                        }


                                ?>
                                        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                                            <div class="product-item bg-light mb-4">
                                                <div class="product-img position-relative overflow-hidden">
                                                    <a href="detail.php?id=<?php echo $row['id'] ?>"> <img src="<?php echo $location ?>/<?php echo $row['image'] ?>" alt="" width="100%" height="200"> </a>

                                                </div>
                                                <div class="text-left py-2" style="padding-left: 16px;">
                                                    <div class="row">

                                                        <div class="col-lg-6 col-md-6 col-sm-6 text-left">
                                                            <a class="#" class="text-left" href=""><i class="fa-regular fa-heart" style="color:black;"></i></a>
                                                            <?php
                                                            include('login.php'); // Includes Login Script
                                                            if (isset($_SESSION['login_user'])) {

                                                            ?>
                                                                <a class="#" class="text-left" href="detail.php?id=<?php echo $row['id'] ?>"><i class="fa-regular fa-comment" style="color:black;"></i></a>
                                                            <?php  } else { ?>
                                                                <a class="#" class="text-left" href="sign_in.php"><i class="fa-regular fa-comment" style="color:black;"></i></a>
                                                            <?php  } ?>
                                                            <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 text-right">


                                                        </div>
                                                    </div>

                                                    <div class="text-left mt-2">
                                                        <a class="h6 text-decoration-none text-truncate" href="user_profile.php?uploader=<?php echo $row['uploader'] ?>"><?php echo $row['uploader_name'] ?></a>
                                                        <p style="font-size: 13px;"><?php echo $row['title'] ?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php }
                                } ?>

                            </div>
                        </div>

                        <!---------- About portion start------------>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <h4 class="mb-4 stat-mbl-view" style="margin-top: 40px; margin-left:15px;">Statistics</h4>
                            <div class="row " style="padding-bottom: 15px;">
                                <div class="col-12 col-lg-7 col-md-7 col-sm-12">
                                    <div class="row">
                                        <div class=" col-4 col-lg-4 col-md-4 col-sm-4  text-center left-mbl-view" style="border-right:2px solid #ddd; padding-bottom:15px;">
                                            <img src="img/detail/follower.png" alt="" style="width: 25px;padding-top:20px;">
                                            <p style="font-size: 13px;"><?php echo  $followed_by ?></p>
                                        </div>

                                        <div class=" col-4 col-lg-4 col-md-4 col-sm-4 text-center" style="border-right:2px solid #ddd; padding-bottom:15px;">
                                            <img src="img/detail/view.png" alt="" style="width: 25px; padding-top:20px;">
                                            <p style="font-size: 13px;"> <?php echo $view ?></p>
                                        </div>
                                        <div class="col-4 col-lg-4 col-md-4 col-sm-4 text-center right-mbl-view">
                                            <img src="img/detail/love.png" alt="" style="width: 25px; padding-top:20px; ">
                                            <p style="font-size: 13px;"><?php echo $image_like ?></p>
                                        </div>
                                    </div>
                                    <hr class="hr-mble-view">
                                </div>




                            </div>


                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4">1 review for "Product Name"</h4>
                                    <div class="media mb-4">
                                        <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            <h6>John Doe<small> - <i>01 Jan 2045</i></small></h6>
                                            <div class="text-primary mb-2">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p>Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4">Leave a review</h4>
                                    <small>Your email address will not be published. Required fields are marked *</small>
                                    <div class="d-flex my-3">
                                        <p class="mb-0 mr-2">Your Rating * :</p>
                                        <div class="text-primary">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <label for="message">Your Review *</label>
                                            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Your Name *</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your Email *</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group mb-0">
                                            <input type="submit" value="Leave Your Review" class="btn btn-primary px-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php'; ?>