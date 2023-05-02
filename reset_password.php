<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php'; 
$email=$_GET['email'];
$text=$_GET['text']?>

<style>

    .card{
        background-color: #fff;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding-top: 20px;
        padding-bottom: 30px;
        padding-left: 20px;
        padding-right: 20px;
    }
     .password {
        color: #000;
        font-weight: 600;
        font-size: 16px;
    }
    .srch-input{
        padding: 10px 10px;
        width: 100%;
        border-radius: 6px;
        border: 1px solid #ccc;
    }

    .srch-btn{
        padding: 5px 10px; 
        border-radius: 6px;
        border: none;
        color: #fff;
        background-color: #28a745;
    }
</style>

<section style="margin-bottom:175px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 col-md-3 col-sm-12"></div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <form action="change_password.php?email=<?php echo $email?>" method="POST">
                    <div class="text-center" style="border-bottom: 1px solid #ccc;">
                    <h4 style="color: black;"><?php echo $email?> </h4> 
                    <h6 style="color: red;">Reset Password</h6>
                    </div>
                    <div style=" padding-top: 20px; padding-bottom: 20px;">
                        <p style="color:black;">Please enter your new password...</p>
                    </div>
                    
                    <div style=" padding-bottom: 20px;">
                    <label for="pass"  style="color: black;">New Password </label><br>
                    <input class="srch-input" type="password" id="" name="password" placeholder="New password..">
                    </div>

                    <div style=" padding-bottom: 20px;">
                    <label for="pass"  style="color: black;">Confirm Password </label><br>
                    <input class="srch-input" type="password" id="" name="c_password" placeholder="Confirm password..">
                    </div>

                    <div class="text-right">
                         <a href=""><input class="srch-btn" type="submit" value="Confirm"></a>
                    
                    </div>
                    </form>
                   
                   
                  
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-3 col-sm-12"></div>
        </div>
    </div>
</section>




<!-- ############################footer section################################ -->

<?php include 'footer.php'; ?>