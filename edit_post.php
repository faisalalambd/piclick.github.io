<!-- ############################## Header Section ############################## -->
<?php include 'header.php';
include 'config.php'; 
$id=$_GET['id']?>

<style>
    .bord {
        border: none;
        border-bottom: 1px solid #ccc;

    }

    bord:focus {
        outline: none;
    }

    .withdraw-btn {
        color: #fff;
        border: none;
        font-size: 16px;
        background-color: green;
        padding: 5px 10px;
        border-radius: 10px;
    }
</style>

<section>
    <div class="row">
        <div class="col-3 col-lg-3 col-md-3 col-sm-3"></div>
        <div class="col-12 col-lg-6 col-md-6 col-sm-12" style="border:1px solid #dfdfdf; background-color: #fff;border-radius:5px; ">
            <h4 class="text-center" style="padding-top:15px;">Edit post</h4>
            <hr>

            <div>
                <div class="modal-body">
                    <?php

                                            $sql = "SELECT * FROM post where id=$id";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                                $category=$row['category'];
                                                $title=$row['title'];
                                                $image=$row['image'];
                                                
                                                }}?>
                    <form action="update_post.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data">
                        <section class="section">
                            <div class="section-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">


                                            <div class="card-body mbl-label input-mbl-view">
                                                <div class="row" style:"margin-bottom:40px;">
                                                    <div class="col-12 col-lg-12 col-md-12 col-sm-12  ">
                                                        <select class="form-control selectric" name="category">
                                                            <option><?php echo $category?></option>
                                                            <?php

                                            $sql = "SELECT * FROM category where category_name!='$category' && category_name!='Recent'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {?>
                                                            <option><?php echo $row['category_name']?></option>
                                                            <?php }}?>


                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="row" style="margin-bottom: 40px;margin-top:20px">


                                                    <div class="col-12">
                                                        <input type="text" name="title" class="input no-outline" value="<?php echo $title?>" placeholder="Caption...">

                                                    </div>
                                                </div>


                                                <div class="form-group row mb-4">

                                                    <div class="col-12 col-sm-12 col-md-7 col-lg-7  mbl-view" style="margin-bottom:0px;">
                                                        <img src="user_image/<?php echo $image?>" alt="" width="320" height="300">


                                                    </div>
                                                    <div class="col-12 col-sm-12 col-md-5 col-lg-5  mbl-view">
                                                        <style>
                                                            .center {
                                                                margin: 0;
                                                                position: absolute;
                                                                top: 50%;
                                                                left: 60%;
                                                                transform: translate(-50%, -50%);
                                                            }

                                                            @media screen and (max-width: 540px) {
                                                                .edit-mbl-view {
                                                                    margin-top: 40px;
                                                                    margin-bottom: 60px;
                                                                    margin-left: 20px;
                                                                }

                                                                .input-mbl-view {
                                                                    padding-bottom: 30px
                                                                }

                                                            }
                                                        </style>


                                                        <input class="center edit-mbl-view" type="file" id="myFile" name="choosefile">

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                </div>
                <div class="text-right">
                    <button type="submit" style="background-color: green; border: none; color: white;font-size: 14px;padding: 7px 20px;border-radius: 7px;margin-right: 40px;margin-bottom: 10px;" name="uploadfile">Upload</button>

                </div>
                </form>
              
            </div>


        </div>

    </div>
    <div class="col-3 col-lg-3 col-md-3 col-sm-3"></div>
    </div>
</section>








<!-- ############################## Footer Section ############################## -->

<?php include 'footer.php'; ?>