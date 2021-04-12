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
  <title>Maxonic ESI form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
body {
	 
 background-color: white;
   background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
}
input[type=text] {
    width: 100%;
    padding: 15px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color:white
}
input[type=date] {
    width: 100%;
    padding: 15px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color:white
}
input[type=number] {
    width: 100%;
    padding: 15px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color:white
}
input[type=email] {
    width: 100%;
    padding: 15px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color:white
}
input[type=submit] {
    width: 100%;
    padding: 15px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color:white
}
h5{
 font-size: 15px;
 color:RED;
}
label
{
	 font-size: 14px;
}
</style>
<body>
<a href="Employee_welcome.php" class="btn btn-info" role="button">Back</a>       <a href="logout.php" class="btn btn-info" role="button" style="float: right;">Log Out</a>          
<h1 align="center">Welcome to Maxonic ESI Form</h1>                 <h5>*Represent Mandatory Fields</h5>

<form class="form-horizontal" action="ESI.php" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-3">
<label>Serial Number:</label>
<input type="text" name="sno"> 
<label>Gender:*</label><br>
<br>
<input type="radio" name="gender" value="male" checked required> Male <input type="radio" name="gender" value="female" required> Female 
<br>
<br>
<label>DOB(Self):*</label> 
<input type="date" name="dob" required>  
<label>Present Address:*</label> 
<input type="text" name="paddress" required>
<label>Mother's Name:*</label>
<input type="text" name="mname" required>
<label>Spouse's Name:</label>
<input type="text" name="spname" >
<label>Age(child):</label>
<input type="number" name="cage">
<label>Bank A/c Number:*</label> 
<input type="number" name="account" required>  
<label>Branch Name:*</label> 
<input type="text" name="branch" required>    
</div>
<div class="col-sm-3">
<label>Employee ID:*</label> 
<input type="text" name="empid" required> 
<label>Contact Number*</label>
<input type="number" name="pno" required> 
<label>Date of Joining:*</label>
<input type="date" name="doj" required> 
<label>Father's Name:*</label>
<input type="text" name="fname" required> 
<label>DOB(Mother):*</label> 
<input type="date" name="dob2" required>  
<label>DOB(spouse):</label> 
<input type="date" name="dob3">
<label> Aadhar Card Number*:</label>  
<input type="number" name="adhar" required>
<label>IFSC Code:*</label> 
<input type="text" name="ifsc" required>
<br>
<br>
<input type="submit" name="submit" value="Send">
</div>
<div class="col-sm-3">
<label>Employee Name as per Aadhar Card*:</label> 
<input type="text" name="name">
<label>Personal Mail ID:*</label>
<input type="email" name="email" required> 
<label>Permanent Address:*</label>
<input type="text" name="address" required> 
<label>DOB(Father):*</label>
<input type="date" name="dob1" required> 
<label>Marital Status(your):*</label> 
<br>
<br>
<input type="radio" name="status" value="married" checked required> Married <input type="radio" name="status" value="unmarried" required> Unmarried
<br>
<br>
<label>Children Names:</label>
<input type="text" name="cname">
<label>PAN Card Number*:</label>
<input type="number" name="pancard" required>
<label>Bank Name*:</label>
<input type="text" name="bankname" required> 
</div>
</div>
                                                                                                              

</form> 

</body>
</html>
