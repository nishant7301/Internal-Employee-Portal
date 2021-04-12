<?php 
  $conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }

   $email = $_SESSION['email'] ;
    $errors = array();

	 $rs=mysqli_query($conn,"select * from login where Email='$email'");
	 $row=mysqli_fetch_array($rs);
	  $type=$row['type'];
	 if($type==EST)
	 {
      	header("Location: us_est_check_in.php");
	 }
	 if ($type==IST) {
	 
	 header('location: check_in.php');
	 }
	 if ($type==PST) {
	 
	 header('location: us_pst_check_in.php');
	 }

	 
?>