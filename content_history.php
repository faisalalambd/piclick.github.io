<?php
include 'session.php';
include('login.php'); // Includes Login Script
if (!isset($_SESSION['login_user'])) {
    header("location: sign_in.php"); // Redirecting To Profile Page

}

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
                            


                            <div class="col-9 col-lg-9 col-md- col-sm-9" style="padding-top:15px;">

                                <style>
                                    table {
                                        border-collapse: collapse;
                                        border-spacing: 0;
                                        width: 100%;
                                        border: 1px solid #ddd;
                                    }

                                    .scroll {
                                        width: 200px;
                                        overflow-y: hidden;
                                        overflow-x: scroll;
                                    }

                                    .content {
                                        display: flex;
                                    }
                                    
                                     .center {
                                        text-align: center;
                                    }


                                    th,
                                    td {
                                        text-align: left;
                                        padding: 8px;
                                        border-bottom: 1px solid #ddd;

                                    }

                                    .data {
                                        color: #343333;
                                        font-size: 13px;


                                    }

                                    tr:nth-child(even) {
                                        background-color: #f2f2f2
                                    }
                                </style>

                                <div class="row">

                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12" style="background-color: #fff;border-radius:5px;">
                                        <div style="overflow-x:auto;">
                                            <table>
                                                <tr>
                                                    <th class="data">Id</th>
                                                    <th class="data">Content</th>
                                                    <th class="data">Type</th>
                                                    <th class="data">Views</th>
                                                    <th class="data">Reactions</th>
                                                    
                                                    <th class="data">Comments</th>
                                                   
                                                    <th class="data">Earmings</th>
                                                </tr>
                                                <?php
                                                $sl=1;
$sql = "SELECT * FROM 	post where uploader='$login_session'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];

?>
                                                <tr>
                                                    <td class="data"><?php echo $sl++?></td>
                                                    <td class="data center">
                                                        <div class=" content">
                                                            <div class="">
                                                                <img src="user_image/<?php echo $row['image']?>" width="70" height="70px">
                                                            </div>
                                                            <div class="scroll">
                                                                <span class="data"> <?php echo $row['title']?></span> <br>
                                                                <!--<span class="data"> 5:19pm, 13/01/23</span>-->
                                                            </div>
                                                    </td>
                                                    <td class="data center"> <?php echo $row['category']?></td>
                                                    <td class="data center"> <?php echo $row['view']?></td>
                                                    <td class="data center"> <?php echo $row['likes']?></td>
                                                    <td class="data center"> <?php echo $row['comments']?></td>
                                                    <td class="data center"> $ <?php echo $row['earn']?></td>
                                                    
                                                </tr>
                                                <?php }}?>

                                            </table>
                                        </div>




                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-1 col-lg-1 col-md-1 col-sm-1">

                </div>
            </div>



        </section>






<!-- ############################## Footer Section ############################## -->

<?php include 'footer.php'; ?>