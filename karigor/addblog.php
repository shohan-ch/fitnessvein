<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>


<!----Add blog page-->

<div class="container-fluid" style="margin-bottom:50px" ;>
    <!----Nav bar-->
    <nav class="productnav sticky-top shadow rounded">
        <ul class="list-unstyled text-center">
            <li> <a href="#product" class="active">Blogs</a> </li>
            <li> <a href="#image">Images</a></li>
        </ul>

    </nav>
    <!----Nav bar-->

    <div class="card shadow mt-4" id="product">
        <div class="card-header border-0">
            <h3 class="">Add Blog</h3>
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
                <div >
                    <div class="row mb-5 mt-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Blog Name <span class="star">*</span></h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="blog_name" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-4 align-items-center">
                            <h5>Title <span class="star">*</span> </h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="blog_title_one" class="form-control">
                            <input type="text" name="blog_title_two" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Description <span class="star">*</span></h5>
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control summernote" name="blog_des_one" rows="3"></textarea>
                            <textarea class="form-control summernote" name="blog_des_two" rows="3"></textarea>
                            <textarea class="form-control summernote" name="blog_des_three" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                <hr>

                <div id="image" style="background-color: #4167D5" class="p-5 rounded-lg">

                    <div class="row shadow-lg p-4">
                        <div class="col-md-4">
                            <h5 class="text-light">Image <span class="star">*</span></h5>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 image-row mx-auto">
                                    <input type="file" name="blogImageOne" class="form-control">
                                    <input type="file" name="blogImageTwo" class="form-control">
                                </div>
                                

                            </div>


                        </div>

                    </div>


                </div>
                <button type="submit" name="add_blog_btn" class="btn btn-primary btn-lg float-right mt-3 shadow">Add
                    blog</button>
                <a href="blog.php" class="btn btn-danger btn-lg mt-3 shadow float-right mr-2">Cancel</a>
            </form>

        </div>
    </div>
</div>
<!----Add Blog page-->



<?php include ("includes/plugin.php");?>

<?php include ("includes/footer.php")?>
