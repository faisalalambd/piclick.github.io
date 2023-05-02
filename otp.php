<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php';
$email=$_GET['email'];
$text=$_GET['text'];
?>

<style>
    .card{
        background-color: #fff;
        border-radius: 5px;
        border: 1px solid #ccc;
        padding: 20px;
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

<section style="margin-bottom:170px;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 col-md-3 col-sm-12"></div>
            <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div style="border-bottom: 1px solid #ccc;">
                    <h4 style="color: black;">Verification OTP</h4> 
                    <h6 style="color: red;"><?php echo $text?></h6> 
                    </div>
                    <div style=" padding-top: 20px; padding-bottom: 20px;">
                        <p style="color:black;">Please check your email for an OTP.</p>
                    </div>
                    <form action="verify_otp.php?email=<?php echo $email?>" method="POST">
                    <div style=" padding-bottom: 20px;">
                    <input class="srch-input" type="text" id="otp" name="otp_code" placeholder="Enter the code..">
                    </div>

                    <div class="text-right">
                    <input class="srch-btn" type="submit" value="Submit">
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