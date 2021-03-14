<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>

<div class="container-fluid" style="margin-bottom:50px" ;>

    <div class="card shadow mt-4" id="product">
        <div class="card-header border-0">
            <h3 class="">Edit Catagory</h3>
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
                <?php 
             
                if(isset($_POST['catagory_edit_btn'])){
                $id = $_POST['catagory_edit_id'];
                $sql = "SELECT * FROM catagory WHERE id = '$id';";
                $result = mysqli_query($conn,$sql);
               while($row = mysqli_fetch_assoc($result)){
            ?>

                <div>

                    <div class="row mb-5">
                        <div class="col-md-4 align-items-center">
                            <h5>Title</h5>
                        </div>
                       <div class="col-md-8">
                            <input type="text" name="title" class="form-control mb-5"
                                value="<?php echo $row['title']?>">
                            <p style="margin-bottom: 50px;"> <span class="h5 text-primary">Introduction</span>
                            <textarea class="form-control summernote" name="intro" rows="5">
                             <?php  echo $row['introduction']?>
                             </textarea>
                            </p>

                            <p><span class="h5 text-primary">Conclusion</span> <textarea
                                    class="form-control summernote mb-5" name="conclu"
                                    rows="5"><?php  echo $row['conclusion']?> </textarea></p>

                        </div>
                    </div>
                    <div class="row mb-5 mt-4">
                        <div class="col-md-4 align-items-center">
                            <h5>Author Name</h5>
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="author" class="form-control" value="<?php echo $row['author']?>">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-4 align-items-center">
                            <h5 style="margin-bottom: 90px !important;">Meta Keyword</h5>
                            <h5>Meta Description</h5>
                        </div>
                        <div class="col-md-8">

                            <textarea class="form-control" name="keyword"
                                rows="3"> <?php  echo $row['m_description']?></textarea>
                            <textarea class="form-control" name="description"
                                rows="3"> <?php echo $row['m_keyword']?></textarea>

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

                            <img src="image/avatar/<?php echo $row['avatar_img']?>" alt="img" width="100px"
                                height="100px">
                            <div class="row">
                                <div class="col-md-6 image-row ml-auto">
                                    <input type="file" name="image" class="form-control">
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
                <input type="hidden" name="catagory_update_id" value="<?php echo $id?>">
                <button type="submit" name="catagory_update_btn"
                    class="btn btn-primary btn-lg float-right mt-3 shadow">Update</button>
                <a href="catagory.php" class="btn btn-danger btn-lg mt-3 shadow float-right mr-2">Cancel</a>

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