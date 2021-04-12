<?php
$conn = mysqli_connect("localhost:3308","root","","maxonic");
    session_start();
    if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
 
   if(isset($_POST['submit'])){
	   $error="";
	$email=$_SESSION['email'];
	$pwd = $_POST['password'];
	$pwd=md5($pwd);
	$new_password = $_POST['new_password'];
	$new_password =md5($new_password );
	$rs=mysqli_query($conn,"select * from login where email='$email' and pwd='$pwd'");
	if(mysqli_num_rows($rs)==1)
	{
		 $query = "update login set pwd='$new_password' where Email='$email'";
	          mysqli_query($conn, $query);
	         header('location: Employee_welcome.php');
	}
	else
	{
		$error= "your current password is wrong";
	}
	
   }

?>
<html>
<head>
<title>Reset password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

input[type=submit] {
    width: 50%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: BLUE;
    color: white;
    
}

input[type=password] {
    width: 50%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
    
}
input[type=button] {
    width: 50%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
    
}

body {
 background-image: url("slider1.jpg");
 background-color: DodgerBlue;
   background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
}

</style>
<script>
function checkForm()
{
	var new_password  = document.forms["reset"]["new_password"];
	var conf_new_password= document.forms["reset"]["conf_new_password"];
	if(!(document.reset.new_password.value==document.reset.conf_new_password.value))
{
	alert("your password is not matching,please enter correct password");
	return false;
}
}
</script>
</head>
<body>
<a href="Employee_welcome.php" class="btn btn-info" role="button"  style="float: left;" >Back</a>  

<form  name="reset" action=""   method="post" onsubmit="return checkForm()">

<div class="col-sm-4"> </div>
                                            <div class="col-sm-7"> 
											                    <h4><?php  if(isset($_POST['submit'])){ echo $error; }?></h4> 
											                    <label>Current</label><br>
                                                                <input type="password" name="password" Placeholder="Enter your current password" required><br> 
																<label>New</label><br>
																<input type="password" name="new_password" Placeholder="Enter your New password" required><br>
																<label>Confirm New</label><br>
																<input type="password" name="conf_new_password" Placeholder="confirm your New password" required>
					
					                                                   <input type="submit" name="submit" >
					                             
					                      </div>       
		 
					                                  
</form>
     

</body>
</html>