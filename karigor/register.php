<?php include ("security.php");?>
<?php include ("includes/header.php")?>
<?php include ("includes/navbar.php")?>


<!----Register--->
<div class="container-fluid mt-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between border-0 mb-3">
            <h3 class="card-title">Admin List</h3>
            <button class="btn btn-primary float-right btn-lg" data-toggle='modal' data-target="#registermodal">Add
                Admin</button>
        </div>
        <div class="card-body">
                     <!-----Php Code for Session-->           
                      <?php 
                       if(isset($_SESSION['status'])){
                           echo'<h3 class="bg-danger text-white p-1 text-center">'. $_SESSION['status'].'</h3>';
                           unset($_SESSION['status']);
                       }
                       elseif(isset($_SESSION['success'])){
                        echo'<h3 class="bg-primary text-white p-1 text-center">'. $_SESSION['success'].'</h3>';
                        unset($_SESSION['success']);
                       }
                       ?>                   
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <!-----Php Code for register table output --> 
                    <?php
                    $sql = "SELECT * from register";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                       ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['username'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['password'];?></td>
                        <td> 
                            <form action="register_edit.php" method="POST">
                            <input type="hidden" name="register_edit_id" value="<?php echo $row['id'];?>">
                            <button type="submit" name="register_edit_btn" class="btn btn-primary w-100">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="code.php" method="POST">
                            <input type="hidden" name="register_delete_id" value="<?php echo $row['id'];?>">
                            <button type="submit" name="register_delete_btn" class="btn btn-danger w-100">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                     }
                    }
                    else{
                        $_SESSION['status'] ="No admin find";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!----Register--->




 <!--register modal--->
    <div class="modal fade" id="registermodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Admin Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="code.php" method="POST" >
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" name="confirm_password" class="form-control" required>
                        </div>
                        <button type="submit" name="register_btn"  class="btn btn-primary">Register</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button"class="btn btn-secondary" data-dismiss="modal">Close</button>                   
                </div>
            </div>
        </div>
    </div>
<!--register modal--->








<?php include ("includes/plugin.php")?>
<?php include ("includes/footer.php")?>