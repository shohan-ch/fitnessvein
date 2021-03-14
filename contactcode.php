<?php include ("database/dbh.php");?>
<?php 
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    if(empty($name) || empty($email) || empty($message)){
        echo "Fill the all fields *";
        exit();
    }else{
        $sql = "INSERT INTO contact (name,email,message) VALUES ('$name','$email','$message')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "Message has been sent!";
        }
        else{
            echo"Oops!Try again later";
        }
        

    }
  
   
}

?>