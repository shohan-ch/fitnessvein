<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>


<!----Blog Sectiopn---->

<div class="container-fluid mt-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between border-0 mb-3">
            <h3 class="card-title">Blog List</h3>
            <a href="addblog.php" class="btn btn-primary float-right btn-lg">Add
                blog</a>
        </div>
        <div class="card-body">


            <table class="table table-striped table-bordered table-hover">

                <thead class="thead-light">
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>First Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

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

                    <?php
                  $sql = "SELECT * FROM blog;";
                  $result = mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result)>0){
                      $i = 0;
                  foreach($result as $row){
                      $i++;

                 ?>
                    <tr>

                        <td><?php echo $i ?></td>
                        <td><?php echo $row['name']?></td>
                        <td>

                            <?php  echo '<img src="image/blog/'.$row["image_one"].'" alt="image" width="160px" height="86px">' ?>

                        </td>
                        <td>
                            <form action="blog_edit.php" method="POST">
                                <input type="hidden" name="blog_edit_id" value="<?php echo $row['id'];?>">
                                <button type="submit" name="blog_edit_btn" class="btn btn-primary">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="blog_delete_id" value="<?php echo $row['id'];?>">
                                <button type="submit" name="blog_delete_btn" onclick="confirm('Are you sure to delete!')" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    }
        
                 }
                  else{
                     echo "<h3 class='text-center bg-danger p-2 text-light'>No blog are found</h3>";
                     
                 }
                  ?>
                </tbody>
            </table>

        </div>
    </div>


</div>
<!----Blog Sectiopn---->








<?php include ("includes/plugin.php")?>