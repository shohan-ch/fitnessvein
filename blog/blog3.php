<?php include ("../database/dbh.php");?>
<?php include ("header.php");?>
<?php include ("navbar.php");?>


<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-lg-9">
            <div class="shadow-sm border rounded-lg p-4">
                <?php
                $sql = "SELECT * FROM blog WHERE id BETWEEN 9 AND 10";
                $result = mysqli_query($conn,$sql);
                foreach($result as $row){
                    ?>
                <a href="../blogview.php?id=<?php echo $row['id']?>">
                    <div class="row border mb-5 p-4 rounded">
                        <div class=" col-12 col-md-4">
                            <?php echo "<img class='shadow img-thumbnail' src='../karigor/image/blog/".$row['image_one']."' alt='img'>" ?>
                        </div>
                        <div class="col-12 col-md-8">
                            <h3 class="font-weight-bold mb-2 mt-3 mt-lg-0"><?php echo $row['name']?></h3>
                            <p class="text-muted mb-3">By: The FI Team</p>
                            <p class="text-justify">
                                <?php   
                       $p= $row['des_one'];
                       $short = strip_tags(substr($p,0,205)).'<b>  . . .</b> <br><span class="text-warning">Read More</span>';
                       echo $short;
                       ?>
                            </p>
                        </div>
                    </div>
                </a>
                <?php 
                }
                ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="blog1.php">1</a></li>
                        <li class="page-item"><a class="page-link" href="blog2.php">2</a></li>
                        <li class="page-item active"><a class="page-link" href="blog3.php">3</a></li>
                    </ul>
                </nav>

            </div>

        </div>
        <div class="col-12 col-lg-3">
            <div class="bg-white py-5 px-2 mb-5 rounded-lg popular-post">
            <table class="table table-hover card-table">
                    <thead>
                        <tr>
                            <h4 class="font-weight-bold"> EDITOR CHOICES</h4>
                            <span class="colorful"></span>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <!-- Button trigger modal -->
                                <a type="button" data-toggle="modal" data-target="#exampleModal" style="background-color: #ffc10780; padding: 9px; width: 100%;">
                                    <span><i class="fas fa-chart-bar text-warning font-weight-bold"></i></span> 2020
                                    Comparison
                                    Chart
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content p-4">
                                            <div class="modal-header">
                                                <h3 class="modal-title mx-auto text-warning font-weight-bold comparison-btn"
                                                    id="exampleModalLabel">
                                                    2020 Comparison Chart</h3>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <?php 
                                        $sql  = " SELECT DISTINCT catagorie  FROM compare_table";
                                        $result = mysqli_query($conn,$sql);
                                        foreach($result as $row){?>
                                                <form action="../tableview.php" method="POST" id="my-form">
                                                    <input type="hidden" name="catagorie"
                                                        value="<?php echo $row['catagorie']?>">
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
                            </td>
                        </tr> 
                        <?php 
                        $sql ="SELECT * FROM catagory "; 
                        $result =mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($result)){?>
                        <tr>
                            <td> <a href="../product.php?catagorie=<?php echo $row['catagory']?>&top-3=Top 3 Treadmills"  class="text-nowrap">
                                    <span><i class="fas fa-star text-warning"></i></span>
                                    <?php echo "Best " .$row['catagory']." of 2020 – by Awards";?> </a></td>

                        </tr>
                        <?php }?>

                    </tbody>
                </table>
            </div>

        </div>

    </div>

</div>



<?php include ("plugin.php")?>
<?php include ("footer.php");?>