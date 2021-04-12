<?php 
   session_start();
   if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Maxonic Handbook</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<a href="Employee_welcome.php" class="btn btn-info" role="button" style="float: left;">Back</a>       <a href="logout.php" class="btn btn-info" role="button" style="float: right;">Log Out</a>    
<embed src="Maxonic_handbook.pdf" width="1340px" height="2100px" />

</body>
</html>
