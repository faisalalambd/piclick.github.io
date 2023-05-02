<?php
include 'session.php';
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: sign_in.php"); // Redirecting To Profile Page
    
}
$pass=$_GET['pass'];
$passs=$_GET['passs'];
$text = $_GET['text'];
?>

<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php'; ?>

<style>
    .edit_nav {
        color: #343333;
        margin-bottom: 15px;
        padding-left: 15px;
        font-size: 17px;
        font-weight: 500;

    }

    .label {
        color: black;
        font-size: 14px;


    }

    .input-field {
        width: 71%;
        height: 30px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .nav:hover {
        border-left: none;

    }



    .edit_nav:active {
        font-weight: none;

    }
</style>
 <?php
            $sql = "SELECT * FROM 	users where username='$login_session'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $name=$row['name'];
                
            ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-1 col-lg-1 col-md-1 col-sm-1">

            </div>
            <div class="col-10 col-lg-10 col-md-10 col-sm-10" style="border: 1px solid #ccc;  background-color:white; border-radius:5px;">
                <div class="row">
                    <div class="col-3 col-lg-3 col-md-3 col-sm-3" style="padding-left: 0px; padding-top:20px;">

                        <div class="nav" style="padding-left: 15px; margin-bottom:10px; ">
                            <a href="#edit_profile" style="text-decoration:none;">
                                <p class="edit_nav">Edit Profile </p>
                            </a>
                        </div>


                        <div class="nav " style="padding-left: 15px; margin-top:10px; margin-bottom:10px;">
                            <a href="#change_password" style="text-decoration:none;">
                                <p class="edit_nav">Change Password</p>
                            </a>
                        </div>

                        <div class="nav " style="padding-left: 15px;margin-top:10px; margin-bottom:10px;">
                            <a href="#privacy" style="text-decoration:none;">
                                <p class="edit_nav">Privacy & Security</p>
                            </a>
                        </div>

                        <div class="nav " style="padding-left: 15px; margin-top:10px; margin-bottom:10px;">
                            <a href="termsandconditions.php" style="text-decoration:none;">
                                <p class="edit_nav">Terms & Conditions </p>
                            </a>
                        </div>
                        
                        <div class="nav " style="padding-left: 15px; margin-top:10px; margin-bottom:10px;">
                                    <a href="content_history.php" style="text-decoration:none;">
                                        <p class="edit_nav">Content History</p>
                                    </a>
                                </div>
                        
                        <div class="nav " style="padding-left: 15px; margin-top:10px; margin-bottom:10px;">
                            <a href="withdraw.php" style="text-decoration:none;">
                                <p class="edit_nav">Withdraw</p>
                            </a>
                        </div>
                        
                        <div class="nav " style="padding-left: 15px; margin-top:10px; margin-bottom:10px;">
                            <a href="withdraw_history.php" style="text-decoration:none;">
                                <p class="edit_nav">Withdraw History</p>
                            </a>
                        </div>



                    </div>
                    <div class="col-1  col-lg-1 col-md-1 col-sm-1">
                        
                    </div>
             

                    <div class="col-8 col-lg-8 col-md- col-sm-8" style="padding-top:15px; border-left: 2px solid #ccc; height: 950px;">

                        <div class="row">
                            <div class="col-1 col-sm-1 col-md-1 col-lg-1">

                            </div>

                            <div class=" col-10 col-sm-10 col-md-10">
                                 <h6 style="color:green;text-align:right"><?php echo $text?></h6><br>

                                <div class="row">
                                           
                                            <div class="col-3 col-sm-3 col-md-3 text-left">
                                            <img src="user_profile/<?php echo $row['pro_pic']?>" alt="" style="border-radius: 50%; width: 60px;height:60px; margin-bottom:10px;">
                                               
                                            </div>
     <form action="update_profile.php?id=<?php echo $row['id']?>" method="POST" enctype="multipart/form-data">
                                            <div class="col-12 col-md-12 text-left" style="margin-bottom: 0.4rem;">
                                            <p style="color:#5e5b5b; margin-bottom: 0px;"> <b><?php echo $row['name']?></b> </p>
                                            <input type="file" id="myfile" name="choosefile" style="font-size: 8px;">
                                            
                                                
                                            </div>

                                        </div>



                                <div id="">

                               

                                        <div class="row">

                                            <div class="col-3 col-sm-3 col-md-3 text-left">
                                                <label for="name">
                                                    <p class="label">Name</p>
                                                </label>
                                            </div>

                                            <div class="col-9 col-sm-9 col-md-9 text-left" style="margin-bottom: 0.4rem;">
                                                <input type="name" id="fname" name="name" value="<?php echo $row['name']?>" style="width:71%; height:30px; border: 1px solid #ccc; border-radius:5px; padding-left:5px;">
                                            </div>

                                        </div>
                                        
 <style>
        @media screen and (max-width: 540px) {
            .bio-mbl-view {
                width: 100%;

            }
        
        }
    </style>

                                        <div class="row">

                                            <div class="col-3 col-sm-3 col-md-3 text-left">
                                                <label for="bio">
                                                    <p class="label">Bio</p>
                                                </label>
                                            </div>

                                            <div class="col-9 col-sm-9 col-md-9 text-left">
                                                <textarea class="bio-mbl-view" name="bio" id="" cols="34" rows="2" style="border: 1px solid #ccc; border-radius:5px; "><?php echo $row['bio']?></textarea>
                                                <p style="font-size: 11px;margin-bottom: 0.6rem;"> (1-100) words..</p>

                                                <p style="font-size: 12px; margin-bottom: 0.4rem;"> <b>Personal information</b></p>
                                                <p style="font-size: 10px;  margin-bottom: 0.4rem;"> 
                                                Provide your personal information, even if the account is used for a 
                                            <br>business or something else. This won't be a part of your public profile.</p>


                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-3 col-sm-3 col-md-3 text-left">
                                                <label for="email">
                                                    <p class="label">Email</p>
                                                </label>
                                            </div>

                                            <div class="col-9 col-sm-9 col-md-9 text-left">
                                                <input class="input-field" type="email" id="fname" name="email" value="<?php echo $login_session?>" readonly>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-3 col-sm-3 col-md-3 text-left">
                                                <label for="phone">
                                                    <p class="label">Phone</p>
                                                </label>
                                            </div>

                                            <div class="col-9 col-sm-9 col-md-9 text-left">
                                                <input class="input-field" type="text" id="fname" name="phone" value="<?php echo $row['phone_no']?>">
                                            </div>

                                        </div>

                                        
                         <div class="text-right">
                       <button type="submit" style="background-color: green; border: none; color: white;font-size: 14px;padding: 7px 20px;border-radius: 7px;margin-right: 118px;margin-bottom: 10px;" name="uploadfile">Update</button>
                    
                </div>
                                    </form>

                                </div>


                                <!--------------------------------------change password----------------------------- -->

                                <div id="change_password" style="padding-top:30px;">

                                    <h6 class="text-left" style="color: #5e5b5b;margin-bottom: 10px; font-size:20px;">Change Password</h6>
                                       <h6 style="color:green;text-align:right"><?php echo $passs?></h6><br>
                                    <form action="update_password.php?id=<?php echo $row['id']?>" method="POST">


                                        <div class="row">

                                            <div class="col-3 col-sm-3 col-md-3 text-left">
                                                <label for="old_password">
                                                    <p class="label">Old password</p>
                                                </label>
                                            </div>

                                            <div class="col-9 col-sm-9 col-md-9 text-left">
                                                <input class="input-field" type="password" id="fname" name="old_password" value=<?php echo $row['password']?>>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-3 col-sm-3 col-md-3 text-left">
                                                <label for="new_password">
                                                    <p class="label">New password </p>
                                                </label>
                                            </div>

                                            <div class="col-9 col-sm-9 col-md-9 text-left">
                                                <input class="input-field" type="text" id="fname" name="new_password">
                                            </div>
                                        <h6 style="color:red;text-align:right"><?php echo $pass?></h6>
                                        </div>

                                        <div class="row" style="margin-bottom:5px ;">

                                            <div class="col-3 col-sm-3 col-md-3 text-left">
                                                <label for="phone">
                                                    <p class="label">Confirm password </p>
                                                </label>
                                            </div>

                                            <div class="col-9 col-sm-9 col-md-9 text-left">
                                                <input class="input-field" type="text" id="fname" name="c_password">
                                            </div>

                                        </div>


                                        <div class="row" style="margin-bottom:5px ;">

                                            <div class="col-3 col-sm-1col-md-3 text-left">

                                            </div>

                                            <div class="text-right">
                       <button type="submit" style="background-color: green; border: none; color: white;font-size: 14px;padding: 7px 20px;border-radius: 7px;margin-right: 40px;margin-bottom: 10px;" name="uploadfile">Upload</button>
                    
                </div>

                                        </div>



                                    </form>


                                </div>


                                <!--------------------------------------------Privacy & security ----------- ------------------- -->


                                <!-- <div id="privacy" style="padding-top:30px;">

                                    <h6 class="text-center" style="color: #5e5b5b;margin-bottom: 10px; font-size:20px;">Privacy & Security</h6>


                                    <p>Here will be the Privacy and Security</p>




                                </div> -->



                                <!---------------------------Trems & Conditions----------------------------- -->


                                <!-- <div id="conditions" style="padding:30px;">

                                    <h6 class="text-center" style="color: #5e5b5b;margin-bottom: 10px; font-size:20px;">Terms & Conditions</h6>


                                    <ol>
                                        <li style="color: black;"></li>
                                        <li style="color: black;"> </li>
                                        <li style="color: black;"> </li>
                                        <li style="color: black;"></li>
                                        <li style="color: black;"> </li>

                                    </ol>


                                </div> -->

                            </div>

                            <div class="col-1 col-sm-1 col-md-1 col-lg-1">

                            </div>
                        </div>






                    </div>
                </div>

            </div>
            <div class="col-1 col-lg-1 col-md-1 col-sm-1">

            </div>
        </div>


    </div>
</section>


<?php }}?>




<!-- ############################## Footer Section ############################## -->

<?php include 'footer.php'; ?>