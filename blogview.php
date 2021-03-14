<?php include ("database/dbh.php")?>
<?php include ("header.php");?>
<?php include ("navbar.php");?>

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-9">
        <div class="shadow my-4 p-3" style="border-top: 5px solid #FF8B00;border-radius: 15px;">
                <p class="text-center mt-4"><small><strong> When you buy through links on our site, we may earn an affiliate commission. <span> <u><a href="" class="font-weight-bold">Learn more </u></span></a></strong></small></p>
                <div class="row mt-4">
                    <div class="col-12 col-md-6 text-lg-center font-weight-bold mb-4 mb-md-0">
                       <ul class="list-unstyled list-inline d-md-flex justify-content-center">
                            <li class="list-inline-item">Written By:<br> The FV Team</li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6  font-weight-bold">
                        <ul class="list-unstyled list-inline d-md-flex justify-content-center">
                            <li class="list-inline-item"> <img class="rounded-circle mb-2 mb-md-0" src="image/avatar/avatar.jpg" alt="img" width="60" height="60"></li>
                            <li class="list-inline-item">Last Edit By:<br> Alex Fredie </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="shdow p-4">
                <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM blog WHERE id ='$id';";
                $result = mysqli_query($conn,$sql);
                foreach($result as $row){
                ?>
                <h3 class="font-weight-bold mb-4 "><?php echo $row['name'];?></h3>
                <?php echo "<img class='blog-img img-thumbnail mb-4' src='karigor/image/blog/".$row['image_one']."' alt='img' width='100%'>" ?>
                <p class="mb-4 text-justify"><?php echo $row['des_one'];?></p>
                <h3 class="font-weight-bold mb-4"><?php echo $row['title_one'];?></h3>
                <p class="mb-4 text-justify"><?php echo $row['des_two'];?></p>
                <?php echo "<img class='blog-img img-thumbnail mb-4' src='karigor/image/blog/".$row['image_two']."' alt='img' width='100%'>" ?>
                <h3 class="font-weight-bold mb-4"><?php echo $row['title_two'];?></h3>
                <p class="mb-4 text-justify"><?php echo $row['des_three'];?></p>
                <?php
                }
                 ?>

            </div>

        </div>
        <div class="col-12 col-lg-3">
        <div class="bg-white py-5 px-2 mb-5 rounded-lg popular-post mt-4">
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
                                                <form action="tableview.php" method="POST" id="my-form">
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
                            <td> <a href="product.php?catagorie=<?php echo $row['catagory']?>&top-3=Top 3 Treadmills"  class="text-nowrap">
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




<?php include ("plugin.php");?>
<?php include ("footer.php");?>