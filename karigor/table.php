<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>





<div class="container-fluid mt-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between border-0 mb-3">
            <h3 class="card-title">Table Row/Record List</h3>
            <a href="addtable.php" class="btn btn-primary float-right btn-lg">Add
                table row</a>
        </div>
        <div class="card-body">


            <table class="table table-striped table-bordered table-hover">

                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Catagorie</th>
                        <th> Image</th>
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
                  $sql = "SELECT * FROM compare_table;";
                  $result = mysqli_query($conn,$sql);
                  echo "<h5 class='mb-4'> Total table row ".mysqli_num_rows($result)."</h5>";
                  foreach($result as $row){

                 ?>
                
                    <tr>

                        <td><?php  echo $row['id'] ?></td>
                        <td><?php  echo $row['name']?></td>
                        <td><?php  echo $row['catagorie']?></td>
                        <td>

                            <?php  echo '<img src="image/table/'.$row["product_img"].'" alt="image" width="50" height="53">' ?>

                        </td>
                        <td>
                            <form action="table_edit.php" method="POST">
                                <input type="hidden" name="table_edit_id" value="<?php echo $row['id'];?>">
                                <button type="submit" name="table_edit_btn" class="btn btn-primary">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="table_delete_id" value="<?php echo $row['id'];?>">
                                <button type="submit" name="table_delete_btn" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                 }
        
                
                
                
                  ?>
                </tbody>
            </table>

        </div>
    </div>


</div>




<!---
<div class="container mt-5" style="margin-bottom:100px">
    

            <table class="table table-bordered table-striped table-responsive-lg shadow" style="table-layout:fixed;">
                <thead>
                    <tr class="table-success">
                        <th style="width: 280px;"> Treadmill </th>
                        <th style="width: 105px;">Type</th>
                        <th style="width: 80px;">Price</th>
                        <th style="width: 300px;">Features</th>
                        <th style="width: 150px;">Our Rating</th>
                        <th>Links</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                /*
                  $sql = "SELECT * FROM compare_table;";
                  $result = mysqli_query($conn,$sql);
                  foreach($result as $row){

                 ?>
                    <tr>
                        <td>

                            <div class="row">
                                <div class="col-md-8 p-3 ">
                                <?php  echo '<img src="image/table/'.$row["brand_img"].'" alt="image">';?>

                                    <span><?php  echo $row['name'];?></span>
                                </div>
                                <div class="col-md-4 mt-3">
                        
                                <?php echo '<img src ="image/table/'.$row['product_img'].'" width="74p" height="74">';?>
                                
                                </div>

                            </div>


                        </td>
                        <td><?php echo $row['type'];?></td>
                        <td> <?php  echo'<img src="image/table/'.$row["price_img"].'" alt="image" width="24" height="22">';?></td>
                        <td>
                            <p>
                                <?php
                                echo $row['feature'];
                                
                                ?>
                            </p>
                        </td>
                        <td><?php  echo $row['rating'];?> </td>
                        <td>
                        <a class="btn btn-primary"  target="_blank" href="<?php echo $row['link'];?>">Link</a>
            
                        
                        </td>
                    </tr>

                  <?php } */?>

                </tbody>
            </table>


     
</div>
--->



<!----Blog Sectiopn---->

<!--
<div class="container mt-5" style="margin-bottom:100px">
    <table class="table table-responsive-lg bg-white border shadow table-bordered" style="table-layout:fixed;">
        <tbody>
            <tr>
                <th style="background-color: #FFF5EC">
                    <p style="transform: translatey(145px);">Preview</p>
                </th>
                <td class="text-center"><img src="image/product/a.jpg" alt="" class="img-fluid"></td>
                <td class="text-center"><img src="image/product/b.jpg" alt="" class="img-fluid"></td>
                <td class="text-center"><img src="image/product/a.jpg" alt="" class="img-fluid"></td>
            </tr>
            <tr>
                <th style="background-color: #FFF5EC">Product</th>
                <td class="text-center"><a href="#">3G Cardio 80i Fold Flat Treadmill</a></td>
                <td class="text-center"><a href="#">UMAY Bluetooth Motorized Treadmill/Speakers/MP3 & Folding for
                        Running & Walking</a></td>
                <td class="text-center"><a href="#">Aceshin Treadmills for Home with Incline, Treadmill Folding for
                        Small Spaces Running, Motorized Fitness Smartphone APP...</a></td>
            </tr>
            <tr>

            <tr>
                <th style="background-color: #FFF5EC">First Name</th>
                <td>John</td>
                <td>-</td>
                <td>John</td>
            </tr>
            <tr>
                <th style="background-color: #FFF5EC">Last Name</th>
                <td>Carter</td>
                <td>Parker</td>
                <td>Rambo</td>
            </tr>
            <tr>
                <th style="background-color: #FFF5EC">Email</th>
                <td>johncarter@mail.com </td>
                <td>peterparker@mail </td>
                <td>johnrambo@mail.com</td>
            </tr>

            <tr>
                <th style="background-color: #FFF5EC">Price</th>
                <td>$150</td>
                <td>$250</td>
                <td>$150</td>
            </tr>

            <tr>
                <th style="background-color: #FFF5EC">Our rating</th>
                <td><i class="fas fa-star"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star-half-alt"></i></td>
                <td><i class="fas fa-star"></i><i class="fas fa-star "></i><i class="fas fa-star"></i></td>
                <td><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                        class="fas fa-star"></i></td>

            </tr>

            <tr>
                <th style="background-color: #FFF5EC">See the Price</th>
                <td><a href="#" class="btn btn-warning shadow-lg text-white w-100">See price</a></td>
                <td><a href="#" class="btn btn-warning shadow-lg text-white w-100">See price</a></td>
                <td><a href="#" class="btn btn-warning shadow-lg text-white w-100 ">See price</a></td>
            </tr>
        </tbody>
    </table>
</div>

                -->

            

    







<?php include ("includes/plugin.php")?>

