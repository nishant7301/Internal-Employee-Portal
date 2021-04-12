<?php 
   session_start();
   if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maxonic Resignation page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
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
    width: 20%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
	align:center;
    
}
</style>
<body>
 <a href="Employee_welcome.php" class="btn btn-info" role="button"  style="float: left;">Back</a>        <a href="logout.php" class="btn btn-info" role="button"  style="float: right;">Log Out</a>
 
<div class="container">
  <h1 align="center">Maxonic Resignation Form</h1>
  <form class="form-horizontal" action="Resignation.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-3" for="email" ><font color="black">Email:</font></label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter your Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="name"><font color="black">Name:</font></label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name">
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-3" for="date"><font color="black">Date of Resignation:</font></label>
      <div class="col-sm-6">          
        <input type="date" class="form-control" id="date" placeholder="Enter date" name="date1">
      </div>
    </div>
     	 <div class="form-group">
      <label class="control-label col-sm-3" for="date"><font color="black">Last Date at Maxonic:</font></label>
      <div class="col-sm-6">          
        <input type="date" class="form-control" id="date" placeholder="Enter date" name="date2">
      </div>
    </div>
	
	 <div class="form-group">
      <label class="control-label col-sm-3" for="reason"><font color="black">Reason: </font></label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="text" placeholder="Please Specify your Reason" name="reason">
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-3" for="feed"><font color="black">Feedback For Maxonic:</font></label>
      <div class="col-sm-6">          
        <input type="text" class="form-control" id="text" placeholder="Enter your Feedback for Maxonic" name="feed">
      </div>
    </div>
   <div class="container" align="center">
                                             <input type="submit" name="submit" value="Send"></input>
											 </div>
											
      
  </form>
</div>
 
  
</body>
</html>
