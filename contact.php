<?php include ("database/dbh.php");?>
<?php $page ="contact"; include ("header.php");?>
<?php include ("navbar.php");?>
<div class="container my-4">
    <div class="row">
        <div class="col-12 col-lg-8 shadow-sm border p-2 p-lg-5" style="margin-bottom: 90px !important;">
            <h2 class="font-weight-bold">Contact Us</h2>
            <div class="shadow bg-warning p-4 rounded-lg">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="image/avatar/contact_avatar.jpg" alt="img" width="100">
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="text-light">
                            <h2 class="font-weight-bold">Shohan C.H</h2>
                            <h4 class="font-weight-bold mb-4">Founder, Fitness Vein</h4>
                            <p>Thank you so much for your interest in FitnessVein.com I always love to get suggestions
                                or requirement from you.</p>
                            <p>I do check and reply every mail very carefully. So if you don’t find the information you
                                are looking for in the site or have any suggestion, feel free to mail me using the
                                contact form.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-form mt-5">
                <h4><strong>Get in Touch</strong></h4>
                <p class="text-muted mb-4" style="font-size:15px;font-weight: 300;">Please fill out the quick form and
                    we will be in touch with lightning speed.</p>
                <form id="frmbox" method="POST">
                    <p>
                        <input type="text" placeholder="Name" class="form-control form-common  w-75" id="name" required>
                    </p>
                    <p>
                        <input type="email" placeholder="Your email address" class="form-control form-common w-75"
                            id="email" required>
                    </p>
                    <p>
                        <textarea id="message" id="" cols="30" rows="10" placeholder="Message"
                            class="form-control form-area" required></textarea>
                    </p>

                    <button type="submit" id="contact-btn" class="btn btn-warning text-light">Send</button>
                    
                </form>
                <p id="demo" class="mt-3 text-warning font-weight-bold"></p>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="shadow-sm border p-4 p-lg-5">
                <h3 class="text-center font-weight-bold">Follow Us</h3>
                <span class="colorful  mb-5"></span>
                <ul class="list-unstyled list-inline text-center">
                    <li class="text-light list-inline-item"><a href="#"><i class="fab fa-facebook-square"
                                style="margin: 0 5px; font-size: 45px; color: #3b5998"></i></a></li>
                    <li class="text-light list-inline-item"><a href="#"><i class="fab fa-twitter-square"
                                style="font-size: 45px; color:#1DA1F2"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"
                                style="font-size: 45px; color:#E1306C"></i></a></li>
                </ul>
            </div>
        </div>
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
</div>
<?php include ("plugin.php")?>
<script>
    $(document).ready(function () {
        $("#contact-btn").click(function () {
            var name = $("#name").val();
            var email = $("#email").val();
            var message = $("#message").val();
            $.ajax({
                url: "contactcode.php",
                method: "POST",
                data: {
                    name: name,
                    email: email,
                    message: message
                },
                success: function (response) {
                    $("#demo").html(response);

                }
            })
            return false;
        })

    })
</script>
<?php include ("footer.php");?>