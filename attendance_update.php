<?php 
$conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
   if(isset($_POST['submit']))
   { 
      $id = $_POST['id'];
	  $time = $_POST['time'];
	  $ip = $_POST['ip'];
	  $date = $_POST['date'];
	  $date1 = explode('-',$date);
	  $date = $date1[0].'/'.$date1[1].'/'.$date1[2];
	  
		  	  $query = "update attendance set check_out='$time' where Email='$id' and Date='$date'";
	          mysqli_query($conn, $query);
	         echo '<p style="color:#9000A1" align="center">Your have successfully modified </p>';
      
	 }
	 else
	 {
	  $error= "There is some error";
	 }
?>
<!DOCTYPE html>
<html>
<head>
<title>Attendance Update</title>
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
input[type=text] {
    width: 35%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
    
}
input[type=email] {
    width: 35%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
    
}
input[type=date] {
    width: 35%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
    
}
select[name="id"]
{
     width: 35%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
}


label
{
	 font-size: 15px;
}
</style>
</head>
<body>
<div class="row">

<div class="col-sm-8"><a href="admin_welcome.php" class="btn btn-info" role="button"><font color="white">Back</font></a>  
</div>
<div class="col-sm-4">     <a href="logout.php" class="btn btn-info" role="button" style="float: right;">Log Out</a> 
</div>
</div>
<form action="" method="post">
<br>

<div class="col-sm-4"></div>
<div class="col-sm-8">
<select name="id"> 
							<option value="nishant@maxonic.com">nishant@maxonic.com</option>
							<option value="sudhir@maxonic.com">sudhir@maxonic.com</option>  
							<option value="rohini@maxonic.com">rohini@maxonic.com</option> 
							<option value="rashmi.h@maxonic.com">rashmi.h@maxonic.com</option>   
							<option value="pema@maxonic.com">pema@maxonic.com</option>   
							<option value="nitish@maxonic.com">nitish@maxonic.com</option> 
							<option value="nayana@maxonic.com">nayana@maxonic.com</option> 
							<option value="indranila@maxonic.com">indranila@maxonic.com</option>   
							<option value="	anjali@maxonic.com">anjali@maxonic.com</option>    
							</select>
<br>
<input type="text" name="time" placeholder="Enter a Check out time" required><br>
<br>
<input type="text" name="ip" placeholder="Enter a Check out IP" required><br>
<br>
<input type="date" name="date" placeholder="Select a date" required><br>
<br>
<input type="submit" name="submit">	
</div>
</form>
</body>
</html>
 