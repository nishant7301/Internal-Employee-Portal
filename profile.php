<!DOCTYPE html>
<html>
<head>
<title>Profile Page </title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="row">

<div class="col-sm-8"><a href="Employee_welcome.php" class="btn btn-info" role="button"><font color="white">Back</font></a>  
</div>
<div class="col-sm-4">     <a href="logout.php" class="btn btn-info" role="button" style="float: right;">Log Out</a> 
</div>

</div>
<?php
$conn = mysqli_connect("localhost:3308","root","","maxonic");
session_start();
if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
   $rs=mysqli_query($conn,"select * from login");
         while($login=mysqli_fetch_array($rs))
        {
			$type=$login['type'];
			$dob=$login['dob'];
		}
$email = $_SESSION['email'] ;
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$ip = get_client_ip();
echo ' <p align="center">Your Profile Info:</p>         
  <table
  class="table table-striped">
    
	<tr>
	<th>Email ID:</th>
	<td>'.$email.'</td>
	</tr>
	<tr>
	<th>Network IP:</th>
	<td>'.$ip.'</td>
	</tr>
	<tr>
	<th>DOB:</th>
	<td>'.$dob.'</td>
	</tr>
	<tr>
	<th>Working ZOne:</th>
	<td>'.$type.'</td>
	</tr>
  </table>
';

?>


</body>
</html>