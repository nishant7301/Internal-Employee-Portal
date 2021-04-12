<!DOCTYPE html>
<html>
<head>
<title>Attendance History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

</style>
</head>
<body>
<div class="row">

<div class="col-sm-4"><a href="admin_welcome.php" class="btn btn-info" role="button"><font color="white">Back</font></a>  
</div>
<div class="col-sm-4"><a href="output.php" class="btn btn-info" role="button"><font color="white">Export Attendance</font></a>  
</div>
<div class="col-sm-4">     <a href="logout.php" class="btn btn-info" role="button" style="float: right;">Log Out</a> 
</div>
</div>
<?php
session_start();
if(!isset($_SESSION['email']))
   {
	header("Location: Em ployee.php");   
   }
$email = $_SESSION['email'] ;
$conn = mysqli_connect("localhost:3308","root","","maxonic");
$rs=mysqli_query($conn,"select * from attendance order by email,date ");
echo ' <p align="center">Employees Attendance History:</p>';

?>
 <table class="table table-striped">                     
<div class="table responsive">
        <thead>
<tr>
<th>Date</th>
<th>Email</th>
<th>Check_In Time</th>
<th>Check_out Time</th>
<th>Work duration(h:m:s)</th>
<th>Work status</th>
</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_array($rs))
{   
$diff=strtotime($row['check_out'])-strtotime($row['check_in']) ;
$hour=floor(($diff/3600));
$rem1=$diff%3600;
$minute=floor($rem1/60);
$second=$rem1%60;
$time=$hour.':'.$minute.':'.$second;  
if($hour>6)
{
	$status='Full Day';
}
else
{
	$status='Half Day';
}
echo '<tr>
<td scope="row">'. $row['Date'] .'</td>
 <td>'. $row['Email'] .'</td>
 <td>'. $row['check_in'] .'</td>
<td>'. $row['check_out'] .'</td>
 <td class="timeColoring">'. $time.'</td>
 <td class="Coloring">'. $status.'</td>
</tr>';

}

?>
<script>
       $('td').css('background-color','greenyellow');
	   if($status ='Half Day'){
		   $('td.Coloring').css('background-color','yellow');
	   }
	   if($hour = '0'){
		    $('td.timeColoring').css('background-color','red');
	   }
</script> 
 </tbody>
 </div>
</table>
</body>
</html>