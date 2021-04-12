<?php 
$conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
   if(isset($_POST['submit']))
   { 
     $email = $_SESSION['email'] ;
  
	 $tz = 'America/New_York';
    $tz_obj = new DateTimeZone($tz);
    $today = new DateTime("now", $tz_obj);
    $date = $today->format('Y/m/d');
    
	 $rs1=mysqli_query($conn,"select * from attendance where Email='$email' and Date='$date'");
	 $rs=mysqli_query($conn,"select * from attendance where Email='$email' and Date='$date' and check_in!='0' and check_out=''");
	  if(mysqli_num_rows($rs1)!=1)
	  {
		  $error= "you have not check in today, Do check in First";
	  }
	
	 else if(mysqli_num_rows($rs)==1)
	 {
	  $tz = 'America/Los_Angeles';
    $tz_obj = new DateTimeZone($tz);
    $today = new DateTime("now", $tz_obj);
	$check_out = $today->format('H:i:s'); 
		  	  $query = "update attendance set check_out='$check_out' where Email='$email' and Date='$date'";
	          mysqli_query($conn, $query);
	         echo '<p style="color:#9000A1" align="center">Your have successfully check out </p>';
      
	 }
	 else
	 {
	  $error= "check_out already done";
	 }
	 }
?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance check_out</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
h1{
color:black;
}
body {
	 background-image: url("slider4.jpg");
 background-color: white;
   background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
}

input[type=submit] {
    width: 35%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
    
}

a {
    width: 30%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color: white;
}
a.active {
 width: 30%;
    padding: 9px 18px;
    margin: 8px 0;
  background-color: white;
  color: black;
}
label
{
	 font-size: 15px;
}
</style>
</head>
<body>
<div class="row">

<div class="col-sm-4"><a href="Employee_welcome.php" class="btn btn-info" role="button" style=" background-color: black;"><font color="white">Back</font></a>  
</div>
<div class="col-sm-4">
<a  href="us_est_check_in.php">Check in Entry</a>
<a  class="btn active" href="us_est_check_out.php">Check out Entry</a> 
<a href="attendance_history.php">Attendance History</a>
</div>

<div class="col-sm-4">     <a href="logout.php" class="btn btn-info" role="button" style="float: right; background-color: black;">Log Out</a> 
</div>

</div>
<h1 align="center">Maxonic Check out Form</h1>
<div class="col-sm-5"></div>
<div class="col-sm-7">
<form action="" method="post">
<br>
<input type="submit" name="submit" value="Click for check out">	<h2><?php  if(isset($_POST['submit'])){ echo $error; }?></h2>	
</div>
</form>
</body>
</html>
