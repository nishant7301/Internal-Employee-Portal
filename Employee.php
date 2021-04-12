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
padding:15px;
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
 background-image: url("slider4.jpg");
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
<div id="sidebar"  class="visible">
<ul>
	  <li><a  href="https://maxonic.com/index.php">Home</a></li>
	   <li><a  class ="btn active" href="Employee.php">Employee Login</a></li>
	  <li><a   href="Registration.html">Sign Up</a></li>
       
</ul>
</div>
<div id="sidebar-btn">
<span></span>
<span></span>
<span></span>
 
</div>
<script>
$(document).ready(function(){
	$('#sidebar-btn').click(function(){
		$('#sidebar').addClass('visible');
			});
	});
</script>
                                                                <h1 align="center"><font>Maxonic India Pvt. Ltd.</font></h1>
             
                                                                    
                                                              
                                                               <form name="Login1" action=""  method="post">
                                                                         <h2 align="center">Login:</h2><br>
																		 <div class="row">
                                                                        <div class="col-sm-4"></div>                                                                                      
                                                                              <div class="col-sm-3">                                                              
                                                                              <label for="auth">Login as:<select>
                                                                               <option value="0">Employee</option>
                                                                               <option value="1">Admin</option>
                                                                              </select><br>
																			  <br>
                                                                              <input type="email"  name="email" placeholder="Please Enter your Email Id"required>   
                                                                             <br>
																			  <label for="password">PASSWORD:</label><i class="fa fa-lock"></i>
                                                                             <br>
<input type="password" id1="password" name="pwd" id="myInput" placeholder="Please Enter password" required> <input type="checkbox" onclick="myFunction()">Show_Password						
		                                                                       <br>
		                                                                          <input type="submit" name="submit" value="SUBMIT">
																				  <br>
		                                                                                      <strong>FORGOT PASSWORD?<a href="forget.html" class="button">CLICK HERE</a> </strong> 
																					</div>
																					
                                                                                     <div class="col-sm-5">
																					 <br>
																					 <br>
																					 <h4><?php  if(isset($_POST['submit'])){ echo $error; }?></h4> 																				 
																					 </div> 
                                                                            																					
																					</div>
						                                             			
							               </form> 

										  
</body>
</html>