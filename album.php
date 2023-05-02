<!-- ############################## Header Section ############################## -->
<?php include 'header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12  col-sm-12 ">
                <form action="" method="" enctype="multipart/form-data" id="my-form" style="border: 1px solid #ccc;padding-bottom:50px;padding-top:20px;">
                    <h4 class="text-center" style="margin-bottom:30px;"> Upload Your Albums</h4>

                    <style>
                        .album_detail {
                            display: flex;
                            flex-wrap: wrap;
                            justify-content: ;
                            margin: 20px auto;
                            cursor: pointer;
                            width: 80%;
                        }

                        .input {
                            width: 100%;
                            font-size: 18px;
                            padding: 0px 0px;
                            margin: 0px 0;
                            display: inline-block;
                            border: none;
                            background-color: #f5f5f5;
                            border-bottom: 1px solid #ccc;
                            box-sizing: border-box;
                        }

                        .no-outline:focus {
                            outline: none;
                        }

                        .submit-button {
                            color: white;
                            background-color: #28a745;
                            border: none;
                            padding: 5px 8px;
                            border-radius: 5px;
                        }
                    </style>

                    <div class="row album_detail">
                        <div class="col-12 col-lg-8 col-md-8 col-sm-12 " style="padding-left:0px; margin-bottom:15px;">
                            <select class="form-control selectric" name="medium" style=" background-color:#f5f5f5;">
                                <option>Category</option>
                                <option>Nature</option>
                                <option>Travel</option>
                                <option>Peoples & places</option>
                                <option>Food</option>
                                <option>Others</option>
                                <!--<option>Bank account</option>-->
                            </select>
                        </div>
                    </div>

                    <div class="row album_detail">
                        <div class="col-4 col-lg-2 col-md-2 col-sm-4 " style="padding-left:0px; padding-right:0px;margin-bottom:15px;">
                            <label for="myfile"><b>Cover image</b></label>
                        </div>

                        <div class="col-8 col-lg-6 col-md-6 col-sm-8 text-left" style="padding-left:0px;">
                            <input type="file" id="myfile" name="myfile" style="font-size: 12px;">
                        </div>

                    </div>


                    <div class="row album_detail">
                        <div class="col-4 col-lg-2 col-md-2 col-sm-4" style="padding-left:0px; padding-right:0px; margin-bottom:15px;">
                            <label for="title"><b>Album title</b></label>
                        </div>
                        <div class="col-8 col-lg-6 col-md-6 col-sm-8 " style="padding-left:0px;">
                            <input type="text" name="title" class="input no-outline" placeholder="" required>
                        </div>
                    </div>

                    
<style>
    @media screen and (max-width: 480px) {
  .album-mbl-view {
    margin-left:-70px ;
  }
}
</style>


                    <div class="upload__box">
                        <div class="upload__btn-box album-mbl-view">
                            <label class="upload__btn" style="margin-left:70px ;">
                                <p>Choose your images</p>
                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                            </label>
                        </div>
                        <div class="upload__img-wrap"></div>
                    </div>



                    <div class="row">
                        <div class="col-11 col-lg-11 col-md-11 col-sm-11 text-right" style="padding-right:35px;">
                            <input type="submit" value="Submit" class="submit-button">
                        </div>
                        <div class="col-1 col-lg-1 col-md-1 col-sm-1 text-right">

                        </div>
                    </div>

                </form>


            </div>
        </div>
    </div>
</section>




<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php'; ?>