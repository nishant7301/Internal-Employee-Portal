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
<meta charset="ISO-8859-1">
<title>User Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<style type="text/css">
body{
margin:0px;
padding:0px;
font-family:"Helvetica Neue",Helvetica,Arial;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 5px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 1px 1px;
    cursor: pointer;
}
#sidebar{
background:black  ;
width:200px;
height:100%;
display:block;
position:absolute;
left:-200px;
top:0px;
transition:left 0.3s linear;
}
#sidebar.visible{
left:0px;
transition:left 0.3s linear;
}
#sidebar-btn{
display:inline-block;
vertical-align:middle;
width:20px;
height:15px;
cursor:pointer;
margin:20px;
}
#sidebar-btn span{
height:1px;
background:#111;
margin-bottom:5px;
display:block;
}
ul{
margin:0px;
padding:0px;
}
ul li{
list-style:none;
}
ul li a{
background:black ;
color:#ccc;
border-bottom:1.3px solid #111;
display:block;
width:200px;
padding:15px;
text-decoration:none;
}
.visible a:hover {
  background-color: #ddd;
  color: black;
}
.visible a.active {
  background-color: white;
  color: black;
} 
body
{
background-image: url("slider3.jpg");
  background-size: cover;
 background-color: #cccccc;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
.image-upload > input
{
    display: none;
}
.avatar {
    vertical-align: middle;
    width: 120px;
    height: 120px;
    border-radius: 80%;
}
h1{
color:black;
}
</style>
</head>
<body>
<h1 style="text-align:center">Welcome to Maxonic Employee Portal</h1>
<div class ="visible" id="sidebar" >
<ul>
        <li><a href="Employee_welcome.php" class="active">Home</a></li>
           <li><a  href="profile.php">Profile</a></li>
		    <li><a href="type.php">Attendance</a></li>
			<li><a href="birthday.php">Employee Birthday</a></li>
        <li><a href = "hrformalities.php">HR Formalities</a></li>
		<li><a href = "pf1.php">PF Account</a></li>
		<li><a href = "ESI1.php">ESI Form</a></li>
         <li><a href = "Timesheet_download.php">Timesheet</a></li>     
        <li><a href = "Holiday1.php">Holiday Calendar</a></li>
		<li><a href = "handbook.php">Employee Handbook</a></li>
		<li><a href = "Resination1.php">Resignation Request</a></li>
		<li><a href="reset.php">Reset Password</a></li>
        <li><a href="logout.php">Sign out</a></li>
</ul>
</div>

</body>
</html>
