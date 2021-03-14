<?php include ("../database/dbh.php")?>
<footer>
    <div class="container">
        <div class="text-center footer-social">
            <h3 class="font-weight-bolder mb-3" style="color: #666666">Follow Us</h3>
            <ul class="list-unstyled list-inline">
                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"
                            style="color:#666666; font-size:35px;"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"
                            style="color:#666666; font-size: 35px;"></i></a></li>
            </ul>
            <span class="colorful-footer"></span>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="footer-left">
                    <h3 class="font-weight-bold text-nowrap mb-3" style="color: #666666">The Mission of Fitness Vein
                    </h3>
                    <p class="text-justify">
                        Fitness Vein is dedicated to helping you make the most of fitness. We select and review
                        hundreds of products to give you an easy way to browse and shop.<br><br>
                        The site is also crammed with handy guides, training plans and tools. Whether you work out at
                        home or in the gym, Fitness Vein is here to help you crush your goals.
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="footer-center text-lg-center">
                    <h3 class="font-weight-bold" style="color: #666666">How can we improve Fitness Vein?</h3>
                    <br>
                    <h5 class="font-weight-bold mb-3" style="color: #666666">We want your feedback about everything. Got
                        feedback?
                    </h5>
                    <a href="contact.php" class="font-weight-bolder"><i class="far fa-envelope mb-4 text-warning"></i>
                        Contact
                        with us!</a>
                </div>
            </div>
            <span class="colorful-footer d-none d-md-block"></span>
            <div class="col-12">
                <div class="footer-right mt-3 text-center ">
                    <ul class="list-unstyled list-inline spark">
                        <li class="list-inline-item"> <a href="about.php">Disclaimer</a></li>
                        <?php 
                                     $sql ="SELECT * FROM catagory"; 
                                     $result =mysqli_query($conn,$sql);
                                     while($row = mysqli_fetch_assoc($result)){?>

                        <li class="list-inline-item"><a href="../product.php?catagorie=<?php echo $row['catagory']?>">
                                <?php echo $row['catagory']?></a></li>
                        <?php
                                     }
                        ?>
                    </ul>
                </div>

                <div>
                    <p style="font-family: -webkit-body;">Copyright FitnessVein.com (C) 2015-<?php echo date('Y');?></p>

                       <p style="font-family: -webkit-body;"> FitnessVein.com is a participant in the Amazon Services LC Associates Program, an affiliate
                        advertising program designed to provide a means for sites to earn fees by advertising to
                        Amazon.com. For more info check our Disclaimer page</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>