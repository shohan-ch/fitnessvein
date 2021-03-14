<?php
session_start();
include("database/dbh.php");
if(!$conn){
   header("Location:dbh_error.php"); //if database connection fails the page go to database error page 
  }

  //Code for login system  
  if(!$_SESSION['userlogin']){
    header('Location:login.php');
  }


?>
