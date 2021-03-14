<?php include ("security.php");?>
<?php include ("includes/header.php")?>
<?php include ("includes/navbar.php")?>


<?php
$edit_id = $_POST['register_edit_id'];
?>

<div class="container-fluid mt-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between border-0 mb-3">
            <h3 class="card-title">Edit Admin List</h3>
        </div>
        <div class="card-body">
            <?php
            $sql = "SELECT * from register where id = '$edit_id';";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){    
        ?>
          <form action="code.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $row['username'];?>">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" value="<?php echo $row['password'];?>">
                </div>
                <a href="register.php" class="btn btn-danger">Cancel</a>
                <input type="hidden" name="update_id" value="<?php echo $edit_id?>">
                <button type="submit" name="register_Update_btn" class="btn btn-primary">Update</button>
            </form>
            <?php
                }               
             ?>
        </div>
    </div>
</div>



<?php include ("includes/plugin.php")?>
<?php include ("includes/footer.php")?>