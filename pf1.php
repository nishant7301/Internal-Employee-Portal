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
  <title>Maxonic PF Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>

body {
	
 background-color: white;
   background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
}
input[type=text] {
    width: 90%;
    padding: 15px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color: white;
}
input[type=date] {
    width: 90%;
    padding: 15px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color: white;
}
input[type=number] {
    width: 90%;
    padding: 15px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color: white;
}
input[type=submit] {
    width: 90%;
    padding: 15px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color: white;
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
</head>

<script>
function checkForm()
{
	var code = document.forms["pf1"]["code"];
	var adhar = document.forms["pf1"]["adhar"];
	var salary = document.forms["pf1"]["salary"];
	var monthsalary = document.forms["pf1"]["monthsalary"];
	var account = document.forms["pf1"]["account"];

if(isNaN(document.pf1.code.value))
{alert("EMP number should be numerics only");
return false;
}

if(isNaN(document.pf1.adhar.value))
{alert("adhar number should be numerics only");
return false;
}

if(isNaN(document.pf1.salary.value))
{alert("Monthly Gross Salary should be numerics only");
return false;
}
if(isNaN(document.pf1.monthsalary.value))
{alert("Actual Monthly Basic & DA should be numerics only");
return false;
}
if(isNaN(document.pf1.account.value))
{alert("Actual Monthly Basic & DA should be numerics only");
return false;
}

}
</script>
<body>
<a href="Employee_welcome.php" class="btn btn-info" role="button">Back</a>                 <a href="logout.php" class="btn btn-info" role="button" style="float: right;">Log Out</a>
<h1 align="center">Welcome to Maxonic PF Form</h1>                        <h5>*Represent Mandatory Fields</h5>

<form name="pf1" action="pf.php" method="post" enctype="multipart/form-data" onsubmit="return checkForm()">
<div class="row">
<div class="col-sm-1"> 
</div>
<div class="col-sm-4">
<label>EMP Code:</label><br>
<input type="text" name="code"> <br>
<label>Gender:*</label>  <br>
<br> 
<input type="radio" name="gender" value="male" checked required> Male <input type="radio" name="gender" value="female" required> Female 
<br>
<br>
<label>DOB:*</label>  <br>
<input type="date" name="dob" required> <br>
<label>Father/Husband Name:*</label> <br>
<input type="text" name="parent" required> <br>
<label>Aadhaar Number:*</label>   <br>
<input type="number" name="adhar" required> <br>
<label>Bank A/c Number:*</label> <br>
<input type="number" name="account" required>   
</div>
<div class="col-sm-4">
<label>Name of the Employee(As per Aadhaar):*</label><br> 
<input type="text" name="name" required>  <br> 
<label>Marital Status:*</label> 
<br> 
<br> 
<input type="radio" name="status" value="married" checked> Married <input type="radio" name="status" value="Unmarried">Unmarried <br> 
<br>
<label>Date of Joining:*</label><br> 
<input type="date" name="doj" required><br> 
<br> 
<label>Relationship with the member (Father/Husband):*</label> <br> 
<br>
<input type="radio" name="rel" value="father" checked required> Father <input type="radio" name="rel" value="husband" required> Husband <br> 
<br>
<label>Qualification(PUC, Graduate, PG,Phd):*</label> <br> 
<br>
<input type="radio" name="qualification" value="puc" checked required> PUC <input type="radio" name="qualification" value="Graduate" required> Graduate <input type="radio" name="qualification" value="PG" required>PG <input type="radio" name="qualification" value="phd" required>PHD <br> 
 <label>IFSC Code:*</label><br> 
 <input type="text" name="ifsc" required>                 
</div>
<div class="col-sm-3">
<label>Complete Previous Establishment PF No:</label> <br> 
<input type="text" name="pfnumber"> <br> 
<label>Actual Monthly Gross Salary:*</label> <br>  
<input type="text" name="salary" required><br>   
<label>Actual Monthly Basic & DA:*</label> <br> 
<input type="text" name="monthsalary" required> <br> 
<br> 
<label>Is it a first Employemnt (YES/NO):*</label> <br> 
<br> 
<input type="radio" name="employment" value="yes" checked required> YES <input type="radio" name="employment" value="no" required> NO  <br>
<br>  
<label>UAN No. from previous Employment(IF ANY):</label><br> 
 <input type="text" name="uan"> <br> 
<input type="submit" name="submit" value="Send"> <br> 
</div>
</div>
</form> 

</body>
</html>
