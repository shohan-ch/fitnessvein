<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>

<!-----Dashboard-->
<div class="container-fluid">
    <h3 class="my-4">Dashboard</h3>
    <div class="row">
        <div class="col-md-3">
            <div class="card bg-white shadow" style="border-radius: 5px">
                <div class="card-body" style="border-left: 4px solid #4167D5;border-radius:5px">
                    <ul class="list-unstyled d-flex justify-content-between">
                        <li>
                            <h5>Registerd Admin</h5>
                            <p>
                         <?php
                              $sql = "SELECT * FROM register;";
                              $result = mysqli_query($conn,$sql);
                              echo "<h5 class='text-center'>".mysqli_num_rows($result)."</h5>"; 
                           
                            ?>
                            </p>
                        </li>
                        <li><i class="fas fa-list-alt fa-3x mt-2 text-muted"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-white shadow" style="border-radius: 5px">
                <div class="card-body" style="border-left: 4px solid #E74A3B;border-radius:5px">
                    <ul class="list-unstyled d-flex justify-content-between">
                        <li>
                        
                            <h5>Total Products</h5>
                            <p>
                         <?php
                              $sql = "SELECT * FROM product;";
                              $result = mysqli_query($conn,$sql);
                              echo "<h5 class='text-center'>".mysqli_num_rows($result)."</h5>"; 
                           
                            ?>
                            </p>
                        </li>
                        <li><i class="fas fa-list-alt fa-3x mt-2 text-muted"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-white shadow" style="border-radius: 5px">
                <div class="card-body" style="border-left: 4px solid #82C91E;border-radius:5px">
                    <ul class="list-unstyled d-flex justify-content-between">
                        <li>
                            <h5>Total Blogs</h5>
                            <p>
                         <?php
                              $sql = "SELECT * FROM blog;";
                              $result = mysqli_query($conn,$sql);
                              echo "<h5 class='text-center'>".mysqli_num_rows($result)."</h5>"; 
                           
                            ?>
                            </p>
                        </li>
                        <li><i class="fas fa-list-alt fa-3x mt-2 text-muted"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-white shadow" style="border-radius: 5px">
                <div class="card-body" style="border-left: 4px solid #20DDFF;border-radius:5px">
                    <ul class="list-unstyled d-flex justify-content-between">
                        <li>
                            <h5>Total table row</h5>
                            <p>
                         <?php
                              $sql = "SELECT * FROM compare_table;";
                              $result = mysqli_query($conn,$sql);
                              echo "<h5 class='text-center'>".mysqli_num_rows($result)."</h5>"; 
                           
                            ?>
                            </p>
                        </li>
                        <li><i class="fas fa-list-alt fa-3x mt-2 text-muted"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----Dashboard-->

<?php include ("includes/plugin.php")?>
<?php include ("includes/footer.php")?>








