<?php
include 'session.php';
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: sign_in.php"); // Redirecting To Profile Page

}

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
        $name = $row['name'];

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
                                    <a href="edit_profile.php#edit_profile" style="text-decoration:none;">
                                        <p class="edit_nav">Edit Profile </p>
                                    </a>
                                </div>


                                <div class="nav " style="padding-left: 15px; margin-top:10px; margin-bottom:10px;">
                                    <a href="edit_profile.php#change_password" style="text-decoration:none;">
                                        <p class="edit_nav">Change Password</p>
                                    </a>
                                </div>

                                <div class="nav " style="padding-left: 15px;margin-top:10px; margin-bottom:10px;">
                                    <a href="edit_profile.php#privacy" style="text-decoration:none;">
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

                                    <section>
                                        <div class="row">
                                          
                                            <div class="col-12 col-lg-12 col-md-12 col-sm-12" style="background-color: #fff;border-radius:5px;">
                                                <div style="margin:20px 0px;">
                                                    <h4 class="text-center" style="padding:10px 0px;text-align:center">Terms and Conditions</h4>
                                                    
                                               <p>Enter Your terms and conditions here</p>


                                                </div>

                                            </div>
                                          
                                        </div>
                                    </section>
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


<?php }
} ?>




<!-- ############################## Footer Section ############################## -->

<?php include 'footer.php'; ?>