<?php include ("database/dbh.php")?>
<!---navbar-->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="image/logo/logo.png" alt=""
        style="width: 35px; height: 38px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
      <div class="bar-1"></div>
      <div class="bar-2"></div>
      <div class="bar-3"></div>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto top-nav">
        <li class="nav-item <?php if($page=='home'){echo 'active';}?>">
          <a class="nav-link" href="index.php"><span><i class="fas fa-home"></i></span> Home</a>
        </li>


        <li class="nav-item dropdown <?php if($page=='catagorie'){echo"active";}?>">
          <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown">Categories
            <span><i class="fas fa-caret-down"></i></span></a>
          <ul class="dropdown-menu shadow">
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Treadmill</a>
              <ul class="dropdown-menu shadow">
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Treadmill'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                      ?>

                  <a href="product.php?price-300='' &&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $300</a>
                  <?php
                     }
                  ?>
                </li>
                <li>
                <?php
                            $sql = "SELECT * FROM catagory WHERE catagory ='Treadmill'"; 
                            $result =mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                      ?>
                  <a href="product.php?price-500=''&&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $500</a>
                  <?php
                     }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Treadmill'"; 
                            $result =mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                      ?>
                  <a href="product.php?price-1000=''&&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $1000</a>
                  <?php
                     }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Treadmill'"; 
                            $result =mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                      ?>
                  <a href="product.php?price-1500=&&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $1500</a>
                  <?php
                     }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Treadmill'"; 
                            $result =mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                      ?>
                  <a href="product.php?price-2000=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $2000</a>
                  <?php
                     }
                  ?>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Elliptical</a>
              <ul class="dropdown-menu shadow">
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Elliptical'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>

                <a href="product.php?price-300=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $300</a>
                <?php
                   }
                ?>
              </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Elliptical'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>

                  <a href="product.php?price-500=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $500</a>
                  <?php
                   }
                ?>
              </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Elliptical'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>

                  <a href="product.php?price-1000=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $1000</a>
                  <?php
                   }
                  ?>
                </li>
                
              </ul>

            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Road Bikes</a>
              <ul class="dropdown-menu shadow">
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Road Bike'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-300=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $300</a>
                  <?php
                   }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Road Bike'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-500=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $500</a>
                  <?php
                   }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Road Bike'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-1000=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $1000</a>
                  <?php
                   }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Road Bike'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-1500=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $1500</a>
                  <?php
                   }
                  ?>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Home Gyms</a>
              <ul class="dropdown-menu shadow">
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Home Gym'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-300=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $300</a>
                  <?php
                   }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Home Gym'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-500=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $500</a>
                  <?php
                   }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Home Gym'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-1000=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $1000</a>
                  <?php
                   }
                  ?>
                </li>
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Mountain Bikes</a>
              <ul class="dropdown-menu shadow">
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Mountain Bike'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-300=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $300</a>
                  <?php
                   }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Mountain Bike'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-500=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $500</a>
                  <?php
                   }
                  ?>
              </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Mountain Bike'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-1000=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $1000</a>
                  <?php
                   }
                  ?>
                </li>
                
              </ul>
            </li>
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle" href="#">Exercise Bikes</a>
              <ul class="dropdown-menu shadow">
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Exercise Bike'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-300=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $300</a>
                  <?php
                   }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Exercise Bike'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-500=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $500</a>
                  <?php
                   }
                  ?>
                </li>
                <li>
                <?php
                            $sql ="SELECT * FROM catagory WHERE catagory ='Exercise Bike'"; 
                            $result =mysqli_query($conn,$sql);
                            while( $row = mysqli_fetch_assoc($result)){
                ?>
                  <a href="product.php?price-1000=&catagorie=<?php echo $row['catagory']?>" class="dropdown-item">Under $1000</a>
                  <?php
                   }
                  ?>
                </li>
                
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item <?php if($page=='table'){echo 'active';}?>">
          <a class="nav-link"  data-toggle="modal" data-target="#exampleModal" style="cursor: pointer"><i class="fas fa-chart-bar text-warning"></i> Comparison </a>
        </li>
        <li class="nav-item <?php if($page=='blog'){echo 'active';}?>">
          <a class="nav-link" href="blog/blog1.php">Blogs</a>
        </li>
    
        <li class="nav-item <?php if($page=='about'){echo 'active';}?>">
          <a class="nav-link" href="about">About </a>
        </li>
        <li class="nav-item <?php if($page=='contact'){echo 'active';}?>">
          <a class="nav-link" href="contact.php">Contact us </a>
        </li>
       
      </ul>
      <!---social-->
      <ul class="list-unstyled list-inline" style="margin: 0;">
        <li class="text-light list-inline-item"><a href="#"><i class="fab fa-facebook-square text-light"
              style="margin: 0 5px; font-size: 25px;"></i></a></li>
        <li class="text-light list-inline-item"><a href="#"><i class="fab fa-twitter-square text-light"
              style="font-size: 25px;"></i></a></li>
      </ul>
      <!---social-->
    </div>
  </div>
</nav>
<!---navbar-->