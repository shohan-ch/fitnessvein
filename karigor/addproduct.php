<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>


<!----Add product page-->

<div class="container-fluid" style="margin-bottom:50px" ;>

    <div class="card shadow mt-4">
        <div class="card-header border-0">
            <h3 class="">Add Products</h3>
        </div>
        <div class="card-body">
        <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                    echo "<h3 class='text-center bg-primary p-2 text-light'>".$_SESSION['success']."</h3>";
                    unset($_SESSION['success']);
                }
                elseif(isset($_SESSION['status']) &&  $_SESSION['status'] !=''){
                    echo "<h3 class='text-center bg-danger p-2 text-light'>".$_SESSION['status']."</h3>";
                    unset($_SESSION['status']);
              }
                ?>
            <form action="code.php" method="POST" enctype="multipart/form-data">
                <div id="product">
                    <div class="row mb-5 mt-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Product Name</h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="product_name" class="form-control" placeholder="Product Name...">
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-4 align-items-center">
                            <h5 style="margin-bottom: 45px !important;">Catagories</h5>
                            <h5 style="margin-bottom: 45px !important;">Product Link</h5>
                            <h5 style="margin-bottom: 75px !important;">Video Link</h5>
                            <h5>Price</h5>
                        </div>
                        <div class="col-md-8">
                            <select name="catagorie" id="" class="form-control" style="margin-bottom: 35px;">
                            <option selected>Select catagorie</option>
                            <?php
                                $query = "SELECT * FROM catagory ";
                                $result =mysqli_query($conn,$query);
                                foreach ($result as $row){
                                    ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['catagory'] ?> </option>
                                <?php
                                  
                                }
                            ?>     
                            </select>
                            <input type="text" name="product_link" class="form-control" placeholder="product Link" style="margin-bottom: 35px;">
                            <input type="text" name="video_link" class="form-control" placeholder="video Link" style="margin-bottom: 45px;">
                            <input type="text" name="price" class="form-control" placeholder="Price...">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4 align-items-center">
                            <h5 style="margin-bottom: 95px !important;">Pros</h5>
                            <h5 style="margin-bottom: 65px !important;">Cons</h5>
                            <h5 style="margin-bottom: 65px !important;">Details</h5>
                            <h5>Description</h5>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" name="pros" rows="3" placeholder="Write pros..."></textarea>
                            <textarea class="form-control" name="cons" rows="3" placeholder="Write Cons..."></textarea>
                            <textarea class="form-control summernote" name="detail" rows="3" placeholder="Write Details..."></textarea>
                            <textarea class="form-control summernote" name="description" rows="3" placeholder="Write Descriptions..."></textarea>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="image" style="background-color: #4167D5" class="p-5 rounded-lg">

                    <div class="row shadow-lg p-4">
                        <div class="col-md-4">
                            <h5 class="text-light">Image</h5>
                        </div>
                        <div class="col-md-8 text-center">
                            <input type="file" name="product_image" class="form-control w-25 float-right">
                        </div>
                    </div>
                </div>
                <button type="submit" name="product_btn" class="btn btn-primary btn-lg float-right mt-3 shadow">Add
                    Product</button>
                <a href="product.php" class="btn btn-danger btn-lg mt-3 shadow float-right mr-2">Cancel</a>
            </form>
        </div>
    </div>
</div>
<!----Add product page-->



<?php include ("includes/plugin.php");?>
<?php include ("includes/footer.php")?>

