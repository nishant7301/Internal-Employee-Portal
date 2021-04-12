<?php
  $conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   
      $email = $_SESSION['email'] ;
   
   $rs = mysqli_query($conn,"select email from login where email='$email' ");
   
   $login = mysqli_fetch_assoc($rs);
   
   $email = $login['email'];
   
   if(!isset($_SESSION['email'])){
      header("location: Employee.php");
      die();
   }
?>