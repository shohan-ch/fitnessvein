<?php include ("security.php");?>
<?php include ("includes/header.php");?>
<?php include ("includes/navbar.php");?>


<div class="container-fluid mt-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between border-0 mb-3">
            <h3 class="card-title">Catagory List</h3>
        </div>
        <div class="card-body">

            <table class="table table-striped table-bordered table-hover">

                <thead class="thead-light">
                    <tr>
                        <th width = "5%">Serial</th>
                        <th width = "7%">Catagory</th>
                        <th width = "15%">Title</th>
                        <th width = "15%">Introduction</th>
                        <th width = "15%">Conclusion</th>
                        <th width = "5%">Avatar</th>
                        <th width = "10%">Meta Keyword</th>
                        <th width = "10%">Meta Description
                        <th>Author</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                 <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !=''){
                    echo "<h3 class='text-center bg-primary p-2 text-light'>".$_SESSION['success']."</h3>";
                    unset($_SESSION['success']);
                }
                elseif(isset($_SESSION['status']) &&  $_SESSION['status'] !=''){
                    echo "<h3 class='text-center bg-danger p-2 text-light'>".$_SESSION['status']."</h3>";
                    unset($_SESSION['status']);
              }
                ?>

                    <?php
                  $sql = "SELECT * FROM catagory;";
                  $result = mysqli_query($conn,$sql);
                  if(mysqli_num_rows($result)>0){
                      $i = 0;
                  foreach($result as $row){
                      $i++;

                 ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $row['catagory']?></td>
                        <td> <?php echo $row['title']?></td>
                        <td>
                         <?php
                            $text = strip_tags( $row['introduction']);
                            $text =substr($text,0,200);
                            echo  $text;
                         ?>
                         
                        </td>
                        <td>
                        <?php
                            $ex = strip_tags( $row['conclusion']);
                            $ex =substr($ex,0,200);
                            echo $ex;
                         ?>
                             
                        </td>

                        <td>

                            <?php  echo '<img src="image/avatar/'.$row["avatar_img"].'" alt="image" width="45px" height="50px">' ?>

                        </td>
                        <td><?php echo $row['m_keyword']?></td>
                        <td><?php echo $row['m_description']?></td>
                        <td><?php  echo $row['author']?></td>
                        <td><?php  echo $row['date']?></td> 
                        <td>
                            <form action="editCatagory.php" method="POST">
                                <input type="hidden" name="catagory_edit_id" value="<?php echo $row['id'];?>">
                                <button type="submit" name="catagory_edit_btn" class="btn btn-primary">Edit</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    }
        
                 }
                  else{
                     echo "<h3 class='text-center bg-danger p-2 text-light'>No Catagory list are found</h3>";
                     
                 }
                  ?>
                </tbody>
            </table>

        </div>
    </div>


</div>



<?php include ("includes/plugin.php")?>
<?php include ("includes/footer.php")?>