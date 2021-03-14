<?php include ("security.php");?>
<?php include ("includes/header.php");?>

<?php
$id =$_GET["id"];
echo $id;


$sql = " SELECT * FROM product WHERE id='$id';";
$result = mysqli_query($conn,$sql);
foreach($result as $row){
?>
<div class="container">
    <div class="card border border-warning">
        <div class="card-header">

            <h3><?php echo$row['name']?></h3>

        </div>
        <div class="card-body">

           
           
            <h3><?php echo$row['name']?></h3>
            <p><?php echo$row['pros']?></p>
            <h3><?php echo$row['cons']?></h3>
            <p><?php echo$row['details']?></p>
            <h3><?php echo$row['descriptions']?></h3>
           

        </div>

    </div>

</div>



<?php

};



?>


<?php include ("includes/plugin.php")?>