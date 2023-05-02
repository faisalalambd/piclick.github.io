<!-- ############################## Header Section ############################## -->
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
        font-size: 10px;
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
        background-color: blue;


    }
</style>

<section style="background-image:url(img/background.jpg); margin-top: -30px; margin-bottom: -50px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="img/adobe_logo_white.svg" alt="" class="vertical-center"> <br>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-6" ">
                

                <form action=" /action_page.php" style="background-color: white; margin:30px 0 30px 0; 
                padding:40px 40px 40px 40px;  border-radius:5px;">

                <h2 style="margin-bottom:30px ; color:black; ">Create an account</h2>

                <img src="img/google-logo.svg" alt="" style="width: 55px;border:2px solid #ccc; border-radius:50px;">
                <img src="img/f_logo_RGB-Blue_58.png" alt="" style="width: 55px; margin-left:15px; ">

                <hr style="margin-top:50px;">

                <p style="margin-top: 50px;margin-bottom: 10px; font-size:14px; color:  #434242  "> <b>Sign up with email</b> </p>
                <p style="font-size:14px; margin-bottom: 30px; display:inline; color:black; ">Already have an account?</p> <a href="sign_in.php" style="color: #1473e6;"> Sign in</a> <br>

                <label class="label" for="name">Name</label>
                <input type="text" name="name" class="input" required>

                <label class="label" for="uname">Email</label>
                <input type="email" name="email" class="input" required>


                <label class="label" for="uname">Phone Number</label>
                <input type="text" name="number" class="input" required>


                <label class="label" for="psw">Password</label>
                <input type="password" name="password" class="input" required>

                <div class="row">
                    <div class="col-lg-6"></div>

                    <div class="col-lg-6 text-right">
                        <button class="c-btn"> <b>Create</b></button>
                    </div>
                </div>





                </form>




            </div>
        </div>
    </div>

</section>


<!-- ############################## Footer Section ############################## -->

<?php include 'footer.php'; ?>