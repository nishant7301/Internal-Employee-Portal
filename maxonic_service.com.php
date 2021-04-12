<?php  
$conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   if(isset($_SESSION["msg"]))
    {
       
		echo '<p style="color:#9000A1" align="center">Your password has been sent successfully on registeed Email Id </p>';
        unset($_SESSION["msg"]);
    }
   if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];
		$encrypt_pwd=md5($pwd);
		$error="";
		$rs=mysqli_query($conn,"select * from login where email='$email' and pwd='$encrypt_pwd'");
		if(mysqli_num_rows($rs)==1)
	    {
		 $login = mysqli_fetch_assoc($rs);
		 if($login['auth']=='1')
		 {
		 $_SESSION['email'] = $email;	 
		 header("Location: admin_welcome.php"); 
		 }
		 else
		 {
			 $error="you are not admin";
			 $_SESSION['email'] = $email;	 
		     header("Location: Employee_welcome.php"); 
		 }
	}
	else
	{
	$error = "Invalid Email or password";
	}
   }
?>        
<!DOCTYPE html>
<html>
  <head>
  <title>Maxonic Login Page</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">

#sidebar{
background:black ;
width:230px;
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
.button {
    background-color: black;
    border: none;
    color: white;
    padding: 6px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 2px;
    cursor: pointer;
}  
ul{
margin:0px;
padding:0px;
}
ul li{
list-style:none;
}
ul li a{
background:black;
color:#ccc;
border-bottom:1.3px solid #111;
display:block;
width:230px;
padding:30px;
text-decoration:none;
}
.visible a:hover {
  background-color: white;
  color: black;
}
.visible a.active {
  background-color: white;
  color: black;
  
}
 input[type=email] {
    width: 100%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
    
}
input[type=text] {
    width: 100%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
    
}
 input[type=password] {
    width: 100%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
    
}
 input[type=submit] {
    width: 100%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
    
}
body {
 background-image: url("images.jpg");
 background-color: DodgerBlue;
   background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
}
</style>
</head>
<script>

function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<body >
<h1 align="center"><font color="white">Maxonic internal Portal</font></h1>
<div class="row"> <div class="col-sm-3"> </div> <div class="col-sm-8">
<form>
<div class="row">
<div class="col-sm-3"></div><div id="sidebar">
<ul>
       <i class="fas fa-home"></i>
	  <i class="fas fa-user-plus"></i>
	
       
</ul>
</div> <div class="col-sm-5">
 <input type="email"  name="email" placeholder="Please Enter your Email Id"required>  
	</div>
	</div>
	</form>	
</div> 	
<div class="col-sm-2"> </div>
</div> 
                                                                    
                                                              
                                                     

										  
</body>
</html>