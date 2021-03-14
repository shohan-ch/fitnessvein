<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>

<div class="container-fluid" style="margin-bottom:50px" ;>

    <div class="card shadow mt-4" id="product">
        <div class="card-header border-0">
            <h3 class="">Edit Table Row/Data</h3>
        </div>
        <div class="card-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">
            <?php 
             
             if(isset($_POST['table_edit_btn'])){
                 $id = $_POST['table_edit_id'];
                 $sql = "SELECT * FROM compare_table WHERE id = '$id';";
                 $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
            ?>

                <div>
                    <div class="row mb-5 mt-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Name</h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-4">
                            <h5 style="margin-bottom: 13px !important;">Type <span class="star">*</span> </h5>
                            <h5 style="margin-bottom: 13px !important;">Catgories <span class="star">*</span> </h5>
                            <h5>Link <span class="star">*</span> </h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="type" class="form-control"  value="<?php echo $row['type']?>">
                            <select name="catagorie"  class="form-control mb-2">
                                <option>Select catagories</option>
                                <option selected> <?php echo $row['catagorie']?></option>
                                <option>Treadmill</option>
                                <option>Elliptical</option>
                                <option>Home gym</option>
                                <option>Doumbell</option>
                                <option>Gym bar</option>
                            </select>
                            <input type="text" name="link" class="form-control" value="<?php echo $row['link']?>">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Features <span class="star">*</span></h5>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control summernote" name="feature" rows="3"><?php echo $row['feature']?></textarea>
            
                        </div>
                    </div>
                </div>

                <hr>
                <div id="image" style="background-color: #4167D5" class="p-5 rounded-lg">
                    <div class="row shadow-lg p-4">
                        <div class="col-md-4">
                        <h5 class="text-light">Product image <span class="star">*</span></h5>
                        <h5 class="text-light">Brand image <span class="star">*</span></h5>
                        <h5 class="text-light">price image <span class="star">*</span></h5>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 image-row mx-auto">
                                    <input type="file" name="product_img" class="form-control" value="<?php echo $row['product_img']?>" >
                                    <input type="file" name="brand_img" class="form-control" value="<?php echo $row['brand_img']?>">
                                    <input type="file" name="price_img" class="form-control" value="<?php echo $row['price_img']?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <input type="text" name="table_update_id" value="<?php echo $id?>">
                <button type="submit" name="table_update_btn" class="btn btn-primary btn-lg float-right mt-3 shadow">Update</button>
                <a href="table.php" class="btn btn-danger btn-lg mt-3 shadow float-right mr-2">Cancel</a>
                <?php
              }
            }

            ?>
            </form>


        </div>
    </div>
</div>

















<?php include ("includes/plugin.php")?>
