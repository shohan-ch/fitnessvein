<?php 
session_start();


?>
<?php include ("includes/header.php")?>

<div class="login_page_wraper">
<div class="container">
<!-- Outer Row -->
<div class="row justify-content-center">
  <div class="col-xl-10 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-6 mx-auto">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
              </div>

        <?php 
              if(isset($_SESSION['status']) && $_SESSION['status'] !=''){
                echo"<p class='bg-danger p-3 text-white rounded-pill text-center'>". $_SESSION['status']."</p>";
                session_unset();
              } 
         ?>
              <form action="code.php" method="POST">
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                </div>
                <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block form-control-user-btn">
                  Login
                </button>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>




