<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>




<div class="container-fluid mt-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between border-0 mb-3">
            <h3 class="card-title">Product List</h3>
            <a href="addproduct.php" class="btn btn-primary float-right btn-lg">Add
                Product</a>
        </div>
        <div class="card-body">
                 
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Serial</th>
                        <th>Name</th>
                        <th>Catagories</th>
                        <th>Price</th>
                        <th>Image</th>
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
                
                  $sql = " SELECT  catagory.catagory, product.* FROM catagory INNER JOIN product on catagory.id = product.ct_id WHERE product.ct_id = catagory.id ORDER BY product.id DESC";
                  $result = mysqli_query($conn,$sql);
                  echo "<h5 class='mb-3'>Total products: ".mysqli_num_rows($result)."</h5>";
                  if(mysqli_num_rows($result)>0){
                      $i = 0;
                  foreach($result as $row){
                      $i++;
                 ?>
                    <tr>
                       <td><?php echo $i; ?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['catagory']?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td>
                        <?php echo '<img src="image/product/'.$row['img'].'" alt="img" width="100%" height="100">' ?>
                            
                            </td>
                        <td>
                        <form action="product_edit.php" method="POST">
                            <input type="hidden" name="product_edit_id" value="<?php echo $row['id'];?>">
                            <button type="submit" name="product_edit_btn" class="btn btn-primary">Edit</button>
                        </form>
                        </td>
                        <td>
                        <form action="code.php" method="POST">
                            <input type="hidden" name="product_delete_id" value="<?php echo $row['id'];?>">
                            <button type="submit" name="product_delete_btn" onclick="return confirm('Are you sure to delate!')"class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                    </tr>
                    <?php
                    }
        
                  }
                  else{
                      echo "<h3 class='text-center bg-danger p-2 text-light'>No product are found</h3>";
                     
                  }
                  ?>                      
                </tbody>
            </table>

        </div>
    </div>
</div>











<?php include ("includes/plugin.php")?>
<?php include ("includes/footer.php")?>