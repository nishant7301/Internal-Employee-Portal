<!DOCTYPE html>
<html>
<head>
<title> Admin Profile Page </title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="row">

<div class="col-sm-8"><a href="admin_welcome.php" class="btn btn-info" role="button"><font color="white">Back</font></a>  
</div>
<div class="col-sm-4">     <a href="logout.php" class="btn btn-info" role="button" style="float: right;">Log Out</a> 
</div>

</div>
<?php
session_start();
if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
$email = $_SESSION['email'] ;
echo ' <p align="center">Your Profile Info:</p>         
  <table
  class="table table-striped">
    <tr>
	<th>Email ID:</th>
	<td>'.$email.'</td>
	</tr>
  </table>
';

?>


</body>
</html>