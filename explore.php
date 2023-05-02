<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'session.php';
include 'config.php';
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
} ?>

<div class="container-fluid pt-0 pb-0">
    <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent pictures</span></h4>
    <div class="row px-xl-5">
        <?php
 
            $sql = "SELECT * FROM post where image!='No available Image.png' order by id DESC LIMIT 4";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                $id=$row['id'];
                ?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <a href="detail.php?id=<?php echo $row['id']?>"> <img  src="user_image/<?php echo $row['image']?>" alt="" width="100%" height="200"> </a>
                   
                </div>
                <div class="text-left py-2" style="padding-left: 16px;">
                    <a class="#" class="text-left" href=""><i class="fa-regular fa-heart" style="color:black;"></i></a>
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
    <!--<div class="row">-->
        <!--<div class="col-md-12 text-center">-->
        <!--    <a href="explore.php"><span class="btn" style="padding:0 25px 0 25px; border-radius:0px; color:black;">More...</span></a>-->
        <!--</div>-->
    <!--</div>-->
</div>

<!-- Categories Start -->
<div class="container-fluid pt-0">
    <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h4>
    <div class="row px-xl-5 pb-0">
        <?php
 $user_post=0;
            $sql = "SELECT * FROM category order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="category.php?category_name=<?php echo $row['category_name']?>">
                <div class="cat-item d-flex align-items-center mb-4 ">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/<?php echo $row['image']?>" alt="">
                    </div>
                    <div class="flex-fill pl-3" >
                        <h6 class="text-uppercase"><?php echo $row['category_name']?></h6>
                    </div>
                </div>
            </a>
        </div>
        <?php }}?>
      
       
    </div>
</div>
<!-- Categories End -->





<div class="container-fluid pt-0 pb-0">
    <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent pictures</span></h4>
    <div class="row px-xl-5">
        <?php
 
            $sql = "SELECT * FROM post where ((id<$id) && (image!='No available Image.png')) order by id DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                $id=$row['id'];
                ?>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <div class="product-item bg-light mb-4">
                <div class="product-img position-relative overflow-hidden">
                    <a href="detail.php?id=<?php echo $row['id']?>"> <img  src="user_image/<?php echo $row['image']?>" alt="" width="100%" height="200"> </a>
                   
                </div>
                <div class="text-left py-2" style="padding-left: 16px;">
                    <a class="#" class="text-left" href=""><i class="fa-regular fa-heart" style="color:black;"></i></a>
                    <a class="#" class="text-left" href="detail.php"><i class="fa-regular fa-comment" style="color:black;"></i></a>
                    <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>
                    <div class="text-left mt-2">
                        <a class="h6 text-decoration-none text-truncate" href="profile.php"><?php echo $row['uploader_name']?></a>
                        <p style="font-size: 13px;"><?php echo $row['text']?> </p>
                    </div>
                </div>
            </div>
        </div>
        <?php }}?>
       
    </div>
    <!--<div class="row">-->
        <!--<div class="col-md-12 text-center">-->
        <!--    <a href="explore.php"><span class="btn" style="padding:0 25px 0 25px; border-radius:0px; color:black;">More...</span></a>-->
        <!--</div>-->
    <!--</div>-->
</div>
<!-- Shop Start -->
<!--<div class="container-fluid">-->
<!--    <div class="row px-xl-5">-->

        <!-- Shop Product Start -->
<!--        <div class="col-lg-12 col-md-12">-->
<!--            <div class="row pb-0">-->
<!--                <div class="col-12 pb-1">-->
<!--                    <div class="d-flex align-items-center justify-content-between mb-0">-->
<!--                        <div>-->
<!--                            <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>-->
                            
<!--                        </div>-->
<!--                        <div class="ml-2">-->
<!--                            <div class="btn-group">-->
<!--                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>-->
<!--                                <div class="dropdown-menu dropdown-menu-right">-->
<!--                                    <a class="dropdown-item" href="#">Latest</a>-->
<!--                                    <a class="dropdown-item" href="#">Popular</a>-->
                                    
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="btn-group ml-2">-->
<!--                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>-->
<!--                                <div class="dropdown-menu dropdown-menu-right">-->
<!--                                    <a class="dropdown-item" href="#">10</a>-->
<!--                                    <a class="dropdown-item" href="#">20</a>-->
                                    
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- Shop Product End  -->
<!--    </div>-->
<!--</div>-->
<!--Shop End -->
<!-- Products Start -->
<!--<div class="container-fluid pt-4 pb-0">-->
<!--    <div class="row px-xl-5">-->
<!--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">-->
<!--            <div class="product-item bg-light mb-4">-->
<!--                <div class="product-img position-relative overflow-hidden">-->
<!--                    <a href="detail.php"> <img class="img-fluid w-100" src="img/product-1.jpg" alt=""> </a>-->

<!--                </div>-->
<!--                <div class="text-left py-2" style="padding-left: 16px; padding-right: 16px;">-->
<!--                    <div class="row">-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-6" >-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-heart"-->
<!--                            style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-comment" style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>-->

<!--                        </div>-->
                       

<!--                    </div>-->

<!--                    <div class="text-left mt-2"> -->
<!--                        <a class="h6 text-decoration-none text-truncate" href="">User</a>-->
<!--                        <p style="font-size: 13px;">Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">-->
<!--            <div class="product-item bg-light mb-4">-->
<!--                <div class="product-img position-relative overflow-hidden">-->
<!--                    <a href="detail.php"> <img class="img-fluid w-100" src="img/product-2.jpg" alt=""> </a>-->

<!--                </div>-->
<!--                <div class="text-left py-2" style="padding-left: 16px; padding-right: 16px;">-->
<!--                <div class="row">-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-6" >-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-heart"-->
<!--                            style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-comment" style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>-->

<!--                        </div>-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-12 text-right">-->
<!--                            <a href=""><i class="fa fa-shopping-cart" style="color:black;"></i></a>-->

<!--                        </div>-->

<!--                    </div>-->
<!--                    <div class="text-left mt-2">-->
<!--                        <a class="h6 text-decoration-none text-truncate" href="">User</a>-->
<!--                        <p style="font-size: 13px;">Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">-->
<!--            <div class="product-item bg-light mb-4">-->
<!--                <div class="product-img position-relative overflow-hidden">-->
<!--                    <a href="detail.php"> <img class="img-fluid w-100" src="img/product-2.jpg" alt=""> </a>-->

<!--                </div>-->
<!--                <div class="text-left py-2" style="padding-left: 16px; padding-right: 16px;">-->
<!--                <div class="row">-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-6" >-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-heart"-->
<!--                            style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-comment" style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>-->

<!--                        </div>-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-12 text-right">-->
<!--                            <a href=""><i class="fa fa-shopping-cart" style="color:black;"></i></a>-->

<!--                        </div>-->

<!--                    </div>-->
<!--                    <div class="text-left mt-2">-->
<!--                        <a class="h6 text-decoration-none text-truncate" href="">User</a>-->
<!--                        <p style="font-size: 13px;">Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">-->
<!--            <div class="product-item bg-light mb-4">-->
<!--                <div class="product-img position-relative overflow-hidden">-->
<!--                    <a href="detail.php"> <img class="img-fluid w-100" src="img/product-2.jpg" alt=""> </a>-->

<!--                </div>-->
<!--                <div class="text-left py-2" style="padding-left: 16px; padding-right: 16px;">-->
<!--                <div class="row">-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-6" >-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-heart"-->
<!--                            style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-comment" style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>-->

<!--                        </div>-->
                      

<!--                    </div>-->
<!--                    <div class="text-left mt-2">-->
<!--                        <a class="h6 text-decoration-none text-truncate" href="">User</a>-->
<!--                        <p style="font-size: 13px;">Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">-->
<!--            <div class="product-item bg-light mb-4">-->
<!--                <div class="product-img position-relative overflow-hidden">-->
<!--                    <a href="detail.php"> <img class="img-fluid w-100" src="img/product-2.jpg" alt=""> </a>-->

<!--                </div>-->
<!--                <div class="text-left py-2" style="padding-left: 16px; padding-right: 16px;">-->
<!--                <div class="row">-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-6" >-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-heart"-->
<!--                            style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-comment" style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>-->

<!--                        </div>-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-12 text-right">-->
<!--                            <a href=""><i class="fa fa-shopping-cart" style="color:black;"></i></a>-->

<!--                        </div>-->

<!--                    </div>-->
<!--                    <div class="text-left mt-2">-->
<!--                        <a class="h6 text-decoration-none text-truncate" href="">User</a>-->
<!--                        <p style="font-size: 13px;">Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">-->
<!--            <div class="product-item bg-light mb-4">-->
<!--                <div class="product-img position-relative overflow-hidden">-->
<!--                    <a href="detail.php"> <img class="img-fluid w-100" src="img/product-2.jpg" alt=""> </a>-->

<!--                </div>-->
<!--                <div class="text-left py-2" style="padding-left: 16px; padding-right: 16px;">-->
<!--                <div class="row">-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-6" >-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-heart"-->
<!--                            style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-comment" style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>-->

<!--                        </div>-->
                        

<!--                    </div>-->
<!--                    <div class="text-left mt-2">-->
<!--                        <a class="h6 text-decoration-none text-truncate" href="">User</a>-->
<!--                        <p style="font-size: 13px;">Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">-->
<!--            <div class="product-item bg-light mb-4">-->
<!--                <div class="product-img position-relative overflow-hidden">-->
<!--                    <a href="detail.php"> <img class="img-fluid w-100" src="img/product-2.jpg" alt=""> </a>-->

<!--                </div>-->
<!--                <div class="text-left py-2" style="padding-left: 16px; padding-right: 16px;">-->
<!--                <div class="row">-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-6" >-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-heart"-->
<!--                            style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-comment" style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>-->

<!--                        </div>-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-12 text-right">-->
<!--                            <a href=""><i class="fa fa-shopping-cart" style="color:black;"></i></a>-->

<!--                        </div>-->

<!--                    </div>-->
<!--                    <div class="text-left mt-2">-->
<!--                        <a class="h6 text-decoration-none text-truncate" href="">User</a>-->
<!--                        <p style="font-size: 13px;">Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">-->
<!--            <div class="product-item bg-light mb-4">-->
<!--                <div class="product-img position-relative overflow-hidden">-->
<!--                    <a href="detail.php"> <img class="img-fluid w-100" src="img/product-2.jpg" alt=""> </a>-->

<!--                </div>-->
<!--                <div class="text-left py-2" style="padding-left: 16px; padding-right: 16px;">-->
<!--                <div class="row">-->
<!--                        <div class="col-lg-6 col-md-6 col-sm-6" >-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-heart"-->
<!--                            style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-comment" style="color:black;"></i></a>-->
<!--                            <a class="#" class="text-left" href=""><i class="fa-regular fa-bookmark" style="color:black;"></i></a>-->

<!--                        </div>-->
                        

<!--                    </div>-->
<!--                    <div class="text-left mt-2">-->
<!--                        <a class="h6 text-decoration-none text-truncate" href="">User</a>-->
<!--                        <p style="font-size: 13px;">Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-12">-->
<!--        <nav>-->
<!--            <ul class="pagination justify-content-center">-->
<!--                <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>-->
<!--                <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
<!--                <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                <li class="page-item"><a class="page-link" href="#">Next</a></li>-->
<!--            </ul>-->
<!--        </nav>-->
<!--    </div>-->
<!--</div>-->
<!-- Products End -->







 <!-- ############################## Footer Section ############################## -->

 <?php include 'footer.php'; ?>