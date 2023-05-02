<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php'; 
$category_name=$_GET['category_name'];
?>
<!-- Categories Start -->
<div class="container-fluid pt-0" style="margin-top: 0px;">
    <h4 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Images of <?php echo $category_name?></span></h4>
  
</div>
<!-- Categories End -->

<!-- Shop Start -->
<div class="container-fluid">
    <div class="row px-xl-5">

        <!-- Shop Product Start -->
        <div class="col-lg-12 col-md-12">
            <div class="row pb-0">
                <div class="col-12 pb-1">
                    <div class="d-flex align-items-center justify-content-between mb-0">
                        <div>
                            <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                            <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                        </div>
                        <div class="ml-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popular</a>
                                    <a class="dropdown-item" href="#">Download</a>
                                </div>
                            </div>
                            <div class="btn-group ml-2">
                                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">10</a>
                                    <a class="dropdown-item" href="#">20</a>
                                    <a class="dropdown-item" href="#">30</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Product End  -->
    </div>
</div>
<!--Shop End -->



<!-- Products Start -->
<div class="container-fluid pt-4 pb-0">
    <div class="row px-xl-5">
        <?php
 $user_post=0;
            $sql = "SELECT * FROM post where category='$category_name' order by id DESC";
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
                    <div class="row">
                        
                     <div class="col-lg-6 col-md-6 col-sm-6 text-left" >
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
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12 text-right">
        
                            
                      </div>
                    </div>
                    
                    <div class="text-left mt-2">
                        <a class="h6 text-decoration-none text-truncate" href="user_profile.php?uploader=<?php echo $row['uploader']?>"><?php echo $row['uploader_name']?></a>
                        <p style="font-size: 13px;"><?php echo $row['title']?> </p>
                    </div>
                </div>
            </div>
        </div>
        <?php }}?>
     
      
    </div>
    <div class="col-12">
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- Products End -->







 <!-- ############################## Footer Section ############################## -->

 <?php include 'footer.php'; ?>