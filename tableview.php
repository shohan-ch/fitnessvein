<?php include ("database/dbh.php")?>
<?php
  $page ="table";
 include ("header.php");
?>
<?php include ("navbar.php");?>



<div class="container mt-5" style="margin-bottom:100px">
    

            <table class="table table-bordered table-striped table-responsive-lg shadow" style="table-layout:fixed;">
                <thead>
                    <tr class="table-success">
                        <th style="width: 350px;"> Product </th>
                        <th style="width: 105px;">Type</th>
                        <th style="width: 105px;">Price</th>
                        <th style="width: 380px;">Features</th>
                        <th>Links</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                $catagorie = $_POST['catagorie'];
                
                  $sql = "SELECT * FROM compare_table WHERE catagorie ='$catagorie';";
                  $result = mysqli_query($conn,$sql);
                  foreach($result as $row){

                 ?>
                    <tr>
                        <td>

                            <div class="row">
                                <div class="col-md-8 p-3 ">
                                <?php  echo '<img src="karigor/image/table/'.$row["brand_img"].'" alt="image"> <br>';?>

                                    <span><?php  echo $row['name'];?></span>
                                </div>
                                <div class="col-md-4 mt-3">
                        
                                <?php echo '<img src ="karigor/image/table/'.$row['product_img'].'" width="74" height="74">';?>
                                
                                </div>

                            </div>


                        </td>
                        <td><?php echo $row['type'];?></td>
                        <td> <?php  echo'<img src="karigor/image/table/'.$row["price_img"].'" alt="image" width="24" height="22">';?></td>
                        <td>
                            <p>
                                <?php
                                echo $row['feature'];
                                
                                ?>
                            </p>
                        </td>
                        <td>
                        <a class="btn btn-warning text-light w-100"  target="_blank" href="<?php echo $row['link'];?>">See The Price</a>
            
                        
                        </td>
                    </tr>

                  <?php } ?>

                </tbody>
            </table>

            <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content p-4">
                            <div class="modal-header">
                                <h3 class="modal-title mx-auto text-warning font-weight-bold comparison-btn"
                                    id="exampleModalLabel">
                                    2020 Comparison Chart</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <?php 
                                        $sql  = " SELECT DISTINCT catagorie  FROM compare_table";
                                        $result = mysqli_query($conn,$sql);
                                        foreach($result as $row){?>
                                <form action="tableview.php" method="POST" id="my-form">
                                    <input type="hidden" name="catagorie" value="<?php echo $row['catagorie']?>">
                                    <button type="submit" class="btn btn-sm distinct-btn"><span><i
                                                class="far fa-hand-point-right text-warning"></i></span>
                                        <?php echo$row['catagorie']?></button>

                                </form>
                                <?php
                                        }
                                        
                                        ?>
                            </div>
                        </div>
                    </div>
                </div>

     
</div>




<?php include ("plugin.php")?>
<?php include ("footer.php");?>