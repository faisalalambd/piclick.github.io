   <!-- ############################## Header Section ############################## -->
   <?php include 'header.php';
    include 'config.php';
    $text = $_GET['text'];
    $c_acc=$_GET['c_acc'];
    ?>
    
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
           padding: 5px 17px;
           margin-top: 40px;
           margin-bottom: 10px;
           border: none;
           cursor: pointer;
           border-radius: 15px;
           font-size: 13px;
           background-color: #009933;
       }

       .no-outline:focus {
           outline: none;
       }

       .terms-conditions{
        color: #000;
        font-size: 10px;
       }

       @media screen and (max-width: 480px) {
                .check-box-mbl{
                    font-size: 13px;

                }
                .c-btn-mbl{
                    padding: 5px 12px;
                    font-size: 9px;
                    margin-top: 45px;
                }

            }
   </style>

   <section style="background-image:url(img/background_signup.png); margin-top: -30px; margin-bottom: -50px; background-repeat: no-repeat;">
       <div class="container">
           <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6">
                   <!-- <img src="img/adobe_logo_white.svg" alt="" class="vertical-center"> <br> -->

               </div>

               <div class="col-lg-6 col-md-6 col-sm-6">


                   <form action="index.php" style="background-color: AliceBlue; opacity:0.9; margin:30px 0 30px 0; padding:30px 40px 20px 40px;  border-radius:5px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                       <h3 style="margin-bottom:20px; color:black; font-family:Sans-serif;">Register Now</h3>
                         <h6 style="color:red"><?php echo $c_acc ?></h6>
                       <!--<img src="img/google-logo.svg" alt="" style="width: 40px;border:2px solid #ccc; border-radius:50px;">-->
                       <!--<img src="img/f_logo_RGB-Blue_58.png" alt="" style="width: 40px; margin-left:15px; ">-->

                       <hr style="margin-top:20px;">

                      <p style="margin-top: 20px;margin-bottom: 5px; font-size:14px; color:  #434242  "> <b>Register & win exciting prize money!</b> </p>
                       <!-- <p style="font-size:14px; margin-bottom: 30px; display:inline; color:black; ">Already have an account?</p> <a href="sign_in.php" style="color: #1473e6;"> Sign in</a> <br>  -->

                       <label class="label" for="name">Name</label>
                       <input type="text" name="name" class="input no-outline" required>

                       <label class="label" for="uname">Email</label>
                       <input type="email" name="email" class="input no-outline" required>


                       <label class="label" for="uname">Phone Number</label>
                       <input type="text" name="number" class="input no-outline" required>


                       <!-- <label class="label" for="psw">Password</label>
                       <input type="password" name="password" class="input no-outline" required>

                       <label class="label" for="psw">Confirm Password</label>
                       <input type="password" name="c_password" class="input no-outline" required> -->

                       <div class="row">
                           <div class="col-9 col-lg-9 col-md-9 col-sm-9 text-lef" style="margin-top: 45px;margin-bottom: 10px;">
                   
                          
                               <input type="checkbox" id="accept" name="accept" value="" required>
                               <label class="check-box-mbl" for="accept" style="color:black; font-size:14px;"> I accept all terms & conditions.</label><br>
                               <p class="terms-conditions">Terms & Conditions:</p>
                               <p class="terms-conditions">1. Users can upload 3 images(may) for this event.</p>
                               <p class="terms-conditions"> 2. The image got maximum likes will considered as winner.</p>
                               <p class="terms-conditions">3. The highest 3 images will get the winning prizes.</p>
                               <p class="terms-conditions">4. Erotic/any kind of photos that effect our society does not allowed.</p>
                               <p class="terms-conditions">5. Winning Prizes must have to collect from Piclick office.</p>
                               <p class="terms-conditions"></p>
                           </div>

                           <div class="col-3 col-lg-3 col-md-3 col-sm-3 text-right">
                               <button type="submit" class="c-btn c-btn-mbl"> <b>Register</b></button>
                           </div>
                       </div>

                       <div class="row">
                           <div class="col-8 col-lg-8 col-md-8 col-sm-8">
                               <h6 style="color:red"><?php echo $text ?></h6>
                           </div>

                       </div>

                   </form>

               </div>
           </div>
       </div>

   </section>


   <!-- ############################## Footer Section ############################## -->

   <?php include 'footer.php'; ?>