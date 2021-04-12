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
<title>Admin Holiday</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

body {
	 background-image: url("slider4.jpg");
 background-color: white;
   background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
}
h1{
color:black;
}
input[type=button] {
    width: 25%;
    padding: 8px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color: white;
}

input.active {
  background-color: white;
  color: BLACK;
}
</style>
<script type="text/javascript">
var imgs = [
 // do not change this...... arrays index start at 0.. 
  ["Holiday1.png"], 
  // write your img url below... like this...
[ "hol.png" ],
 ["" , "" ],
  ["" , "" ],
  ["" , "" ],
  ["" , "" ],
  ["" , "" ]
  ];

function showImg (imgIndex) {
  document.getElementById('img1').src = imgs[imgIndex][0] ;
  document.getElementById('img2').src = imgs[imgIndex][1] ;
  }
</script>
<body>
<div class="row">
<div  class="col-sm-1"><a href="admin_welcome.php" class="btn btn-info" role="button">Back</a></div> 
<div class="col-sm-9">
<input class="btn active"type="button" value="Big Data Team" onclick="showImg(0)" >   <input type="button" value="Recruitment Team" onclick="showImg(1)" > </div>
<div  class="col-sm-2">      <a href="logout.php" class="btn btn-info" role="button" style="float: right;">Log Out</a> 
</div>
</div>
<h1 align="center">Maxonic Holiday List:<h1>
<img id="img1" src="Holiday1.png" alt="" class="center">
<img id="img2" src="hol.png" alt="" class="center" style="display:none;">
  
</body>
</html>
