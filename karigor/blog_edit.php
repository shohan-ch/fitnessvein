<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>

<div class="container-fluid" style="margin-bottom:50px" ;>
 <!----Nav bar-->
    <nav class="productnav sticky-top shadow rounded">
        <ul class="list-unstyled text-center">
            <li> <a href="#product" class="active">Blog</a> </li>
            <li> <a href="#image">Images</a></li>
        </ul>

    </nav>
 <!----Nav bar-->


    <div class="card shadow mt-4" id="product">
        <div class="card-header border-0">
            <h3 class="">Edit Blogs</h3>
        </div>
        <div class="card-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">
            <?php 
             
             if(isset($_POST['blog_edit_btn'])){
                 $id = $_POST['blog_edit_id'];
                 $sql = "SELECT * FROM blog WHERE id = '$id';";
                 $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($result)){
            ?>

                <div>
                    <div class="row mb-5 mt-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Blog Name</h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="blog_name" class="form-control" value="<?php echo $row['name']?>">
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-4 align-items-center">
                            <h5>Title</h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="title_one" class="form-control" value="<?php echo $row['title_one']?>">
                            <input type="text" name="title_two" class="form-control"  value="<?php echo $row['title_two']?>">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Description</h5>
                        </div>
                        <div class="col-md-8">
                           
                            <textarea class="form-control summernote" name="des_one" rows="3"> <?php  echo $row['des_one']?></textarea>
                            <textarea class="form-control summernote" name="des_two" rows="3"> <?php echo $row['des_two']?></textarea>
                            <textarea class="form-control summernote" name="des_three" rows="3"> <?php echo $row['des_three']?></textarea>
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
                            
                            <div class="row">
                                <div class="col-md-6 image-row ml-auto">
                                <input type="file" name="image_one" class="form-control" value="<?php echo $row['image_one']?>"> 
                                    <input type="file" name="image_two" class="form-control"  value="<?php echo $row['image_two']?>">
                                   
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
               <input type="hidden" name="blog_update_id" value="<?php echo $id?>">
                <button type="submit" name="blog_update_btn" class="btn btn-primary btn-lg float-right mt-3 shadow">Update</button>
                <a href="blog.php" class="btn btn-danger btn-lg mt-3 shadow float-right mr-2">Cancel</a>

                <?php
              }
            }

            ?>
            </form>


        </div>
    </div>
</div>



<?php include ("includes/plugin.php")?>

<?php include ("includes/footer.php")?>
