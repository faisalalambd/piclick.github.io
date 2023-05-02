<!-- ############################## Header Section ############################## -->


<?php
include('login.php'); // Includes Login Script
if (isset($_SESSION['login_user'])) {
    header("location: explore.php"); // Redirecting To Profile Page
}

$text = $_GET['text'];
?>

<?php include 'header.php';
include 'config.php'; ?>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
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

    .label {
        color: black;
        font-size: 12px;
        margin-top: 20px;


    }

    .c-btn {
        background-color: #04AA6D;
        color: white;
        padding: 5px 20px;
        margin-top: 25px;
        margin-bottom: 20px;
        border: none;
        cursor: pointer;
        border-radius: 20px;
        font-size: 13px;
        background-color: #009933;


    }

    .a-btn {
        background-color: white;
        color: #636364;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        cursor: pointer;
        border-radius: 30px;

    }
    .no-outline:focus {
        outline: none;
      }
   
</style>

<section style="background-image:url(img/background_signin.jpg); margin-top: -30px; margin-bottom: -50px; background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="img/adobe_logo_white.svg" alt="" class="vertical-center"> <br>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6">
                

                <form action="" method="POST" style="background-color: AliceBlue; opacity:0.9; margin:30px 0 115px 0; 
                padding:30px 40px 30px 40px;  border-radius:5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                <h2 style="margin-bottom:5px ; color:black;">Sign in</h2>
               
                <!-- <img src="img/google-logo.svg" alt="" style="width: 55px;border:2px solid #ccc; border-radius:50px;">
                <img src="img/f_logo_RGB-Blue_58.png" alt="" style="width: 55px; margin-left:15px; ">

                <hr style="margin-top:50px;"> -->

                <!-- <p style="margin-top: 50px;margin-bottom: 10px; font-size:14px; color:  #434242  "> <b>Sign up with email</b> </p> -->

                <p style="font-size:14px; margin-bottom:50px; display:inline; color:  #575353; ">New user?</p> <a href="sign_up.php" style="color: #2c5ec3;"> Create an account </a> <br>


                <h4 style="color:red"><?php echo $text?></h4>
                <label class="label" for="uname">Email address</label>
                <input type="email" name="username" class="input no-outline" required>



                <label class="label" for="psw">Password</label>
                <input type="password" name="password" class="input no-outline" required>

                <div class="row">
                    <div class="col-7 col-lg-7 col-md-7 col-sm-7 text-left" style="padding-top:30px;">
                        <a href="find_account.php" style="color:#2c5ec3;text-decoration:none; font-size:16px; ">Forgot password?</a>
                        
                    </div>

                    <div class="col-5 col-lg-5 col-md-5 col-sm-5 text-right">
                    <input name="submit" class="c-btn" type="submit"  value="Log In">
                      
                    </div>
                </div>

                <!--<div class="row">-->
                <!--    <div class="col-12 col-lg-12 col-md-12 col-sm-12">-->
                <!--    <div class="g-signin2" data-onsuccess="onSignIn" style="width: 100%; padding:10px 50px 10px 50px;"></div>-->


                <!--    </div>-->
                <!--</div>-->


                <!--<button class="a-btn" style="width: 100%; margin-top:15px; background-color: #dfdbdb ;  padding:5px 0 5px 0;">-->
                <!--    <img src="img/google-logo.svg" alt="" style="width: 35px;border-radius:50px;"> <b>Continue with Google</b>-->
                <!--</button>-->

                <!--<button class="a-btn" style="width: 100%; background-color: #dfdbdb; color:#1877f2; padding:10px 0 10px 0;">-->
                <!--    <img src="img/f_logo_RGB-Blue_58.png" alt="" style="width: 25px; border-radius:50px;"> <b> Continue with Facebook</b>-->
                <!--</button>-->

                


                </form>




            </div>
        </div>
    </div>

</section>


<!-- ############################## Footer Section ############################## -->

<?php include 'footer.php'; ?>