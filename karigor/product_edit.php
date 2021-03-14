<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>


<!----Add product page-->

<div class="container-fluid" style="margin-bottom:50px" ;>

    <div class="card shadow mt-4">
        <div class="card-header border-0">
            <h3 class="">Edit Products</h3>
        </div>
        <div class="card-body">
            <?php 
            if(isset($_POST['product_edit_id'])){
                $id = $_POST['product_edit_id'];
                $sql = " SELECT * FROM product WHERE id = '$id';";
                $result = mysqli_query($conn,$sql);
                foreach($result as $row){
            }

            ?>

            <form action="code.php" method="POST" enctype="multipart/form-data">
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
                <div id="product">
                    <div class="row mb-5 mt-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Product Name</h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="product_name" class="form-control" value="<?php echo $row['name']?>">
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-4 align-items-center">
                            <h5 style="margin-bottom: 45px !important;">Catagories</h5>
                            <h5 style="margin-bottom: 75px !important;">Product Link</h5>
                            <h5 style="margin-bottom: 35px !important;">Video Link</h5>
                            <h5>Price</h5>
                       
                        </div>
                        <div class="col-md-8">
                        <select name="catagorie" id="" class="form-control" style="margin-bottom: 45px;">
                        <?php
                                $catgory_id = $row['ct_id'];
                                $qry = "SELECT catagory.*  FROM catagory INNER JOIN product on catagory.id = product.ct_id WHERE  '$catgory_id' = catagory.id AND product.id = '$id'";
                                $effect =  mysqli_query($conn,$qry);
                                foreach($effect as $into){
                                    ?>
                                <option selected value="<?php echo $into['id'] ?>" >
                                <?php
                                    echo $into['catagory'];
                                }
                                 ?>
                                 </option>
                                
                                <?php
                                $query = "SELECT * FROM catagory ";
                                $ans =mysqli_query($conn,$query);
                                foreach ($ans as $ex){
                                    ?>
                                <option value="<?php echo $ex['id'] ?>"><?php echo $ex['catagory'] ?> </option>
                                <?php
                                  
                                }
                            ?> 
                                
                            </select>
                            <input type="text" name="product_link" class="form-control" value="<?php echo $row["product_link"];?>">
                            <textarea name="video_link" rows="3" class="form-control"> <?php  echo $row['video_link']?></textarea>
                            <input type="text" name="price" class="form-control" value="<?php echo $row["price"];?>">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4 align-items-center">
                            <h5 style="margin-bottom: 95px !important; margin-top:30px !important ;">Pros</h5>
                            <h5 style="margin-bottom: 65px !important;">Cons</h5>
                            <h5 style="margin-bottom: 65px !important;">Details</h5>
                            <h5>Description</h5>
                        </div>
                        <div class="col-md-8">
                           
                            <textarea class="form-control" name="pros" rows="3"> <?php  echo $row['pros']?></textarea>
                            <textarea class="form-control" name="cons" rows="3"> <?php echo $row['cons']?></textarea>
                            <textarea class="form-control summernote" name="detail" rows="3"> <?php echo $row['details']?></textarea>
                            <textarea class="form-control summernote" name="description" rows="3"> <?php  echo $row['descriptions']?></textarea>
                        </div>
                    </div>
                </div>

                <hr>

                <div id="image" style="background-color: #4167D5" class="p-5 rounded-lg">

                    <div class="row shadow-lg p-4">
                        <div class="col-md-4">
                            <h5 class="text-light">Image</h5>
                        </div>
                        <div class="col-md-8 ">
                            <img src="image/product/<?php echo $row['img']?>" width="400" height="220">
                            <input type="file" name="update_image" class="form-control text-center w-25 float-right"> 
                    
                        </div>

                    </div>
                </div>
               <input type="hidden" name="product_update_id" value="<?php echo $id?>">
                <button type="submit" name="product_update_btn" class="mt-4 btn btn-primary btn-lg float-right mt-4 shadow">Update</button>
                <a href="product.php" class="btn btn-danger btn-lg mt-4 shadow float-right mr-2">Cancel</a>
                <?php
                    }

                ?>
            </form>
        </div>
    </div>
</div>




<?php include ("includes/plugin.php");?>

<?php include ("includes/footer.php")?>