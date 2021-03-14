
<!---Sidebar-->
<div class="side-bar d-none d-lg-block">
  <ul class="list-unstyled d-block m-3 nav-bar">
      <li class="nav-item"><a href="index.php" class="nav-link text-center"><i class="fas fa-user-shield fa-2x"></i></a></li>
      <hr style="border-color: #6888E4;margin:10px 0">
      <li class="nav-item"> <a href="index.php" class="nav-link"><i class="fas fa-tachometer-alt"></i> Dashbord</a> </li>
      <hr style="border-color: #6888E4;margin:10px 0">
      <p class="text-uppercase" style="color: #93A3E8">interface</p>
      <li class="nav-item"><a href="register.php" class="nav-link"><i class="fas fa-user-cog"></i> Register Admin</a></li>
      <li class="nav-item"><a href="product.php" class="nav-link"><i class="fas fa-cart-plus"></i> Add Products</a></li>
      <li class="nav-item"><a href="table.php" class="nav-link"><i class="fas fa-chart-area"></i> Add Compare Table</a></li>
      <li class="nav-item"><a href="blog.php" class="nav-link"><i class="fab fa-adversal"></i> Add Blog</a></li>
      <li class="nav-item"><a href="catagory.php" class="nav-link"><i class="fab fa-adversal"></i> Catagory</a></li>
  </ul>
</div>
<!---Sidebar-->



<!---Top navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle font-weight-bolder text-primary" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $_SESSION['username']?>
        </a>
        <div class="dropdown-menu border-0 shadow" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i> Admin</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutmodal"><i class="fas fa-sign-out-alt"></i>Log out</a>
        </div>
      </li>
     
    </ul>
  </div>
</nav>
<!-- Logout Modal-->
<div class="modal fade" id="logoutmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form action="code.php" method="POST">
          <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<!---Top navbar-->
