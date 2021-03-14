<?php include ("security.php");?>
<?php include ("includes/header.php");?>



<div class="container shadow mt-5" style="font-size: 30px; padding:50px;">
<ul>
<?php
    $sql = "SELECT * FROM product WHERE catagorie ='Treadmill';";
    $result = mysqli_query($conn,$sql);
    foreach($result as $row){
?>
<li>
    <input type="text" name="article" value="<?php echo $row['id']?>">
    <a href="viewarticle.php?id=<?php echo $row['id'] ?>" class="mb-3"><?php echo $row['name']?></a> 
</li>
<?php }?>
<li><a href="">List 1</a></li>


</ul>




</div>






















<?php include ("includes/plugin.php")?>
<?php include ("includes/footer.php")?>