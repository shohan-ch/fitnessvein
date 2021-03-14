<?php include ("database/dbh.php")?>
<?php $page ="about"; include ("header.php");?>
<?php include ("navbar.php");?>
<div class="container my-4">
    <div class="row">

        <div class="col-12 col-lg-3 order-2 order-lg-1 mt-5 mt-lg-0">
        <div class="shadow-sm border bg-white py-5 px-2 mb-5 rounded-lg popular-post">
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
                                <a type="button" data-toggle="modal" data-target="#exampleModal">
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

                            <td> <a href="product.php?catagorie=<?php echo $row['catagory']?>&top-3=Top 3 Treadmills">
                                    <span><i class="fas fa-star text-warning"></i></span>
                                    <?php echo "Top 3 " .$row['catagory'];?> </a></td>

                        </tr>

                        <?php }?>

                    </tbody>
                </table>
            </div>

        </div>

        <div class="col-12 col-lg-9 order-1 order-lg-2">
            <div class="shadow-sm p-4 text-light rounded" style="background-color: #262626!important;">
                <h2 class="font-weight-bold mb-4">EARNINGS/AFFILIATE DISCLOSURE</h2>

                <p style="font-size:19px !important; line-height:34px">FitnessVein is a participant in the Amazon Services LLC
                    Associates Program and other similar affiliate advertising
                    programs which are designed to provide a means for us to earn fees by linking to such affiliates’
                    websites such as Amazon.com. </p><br><br>


                <p style="font-size:19px !important; line-height:34px">We’re always objective in all of our ratings, whether we have an affiliate relationship with a
                    particular brand or not. Our goal is to help assess the quality and value of fitness equipment by
                    analyzing its features, pricing, competition, customer reviews, third party feedback and other data
                    points. When appropriate, we will suggest alternative products in our guides that we feel are a
                    better value. When certain models or brands are on sale and/or discounted, we try to bring that to
                    the user’s attention. These affiliate relationships make it possible for us to offer some of the
                    most detailed information about treadmills found on the Internet. It also offsets the costs of
                    maintaining this website. Our company is passionately proud of the quality and independent nature of
                    our editorial process and work. If readers choose to buy a treadmill that we recommend, our work is
                    sometimes – but not always – supported through an affiliate commission from the retailer when you
                    make a purchase. We don’t earn anything if a product is returned for any reason which innately
                    supports a strong editorial process;
                    we think that’s a pretty fair/honest system.</p>


            </div>

        </div>

    </div>

</div>








<?php include ("plugin.php")?>
<?php include ("footer.php");?>