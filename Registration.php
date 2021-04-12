<?php  
$conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   $email    = "";
   $errors = array(); 
   $password = "";
   if(isset($_POST['submit'])){
		$email = mysqli_real_escape_string( $conn, $_POST['email'] );
		$pwd = $_POST['password'];
		$dob1 = $_POST['dob'];
		$dob1 = explode('-',$dob1);
		$dob = $dob1[2].'/'.$dob1[1].'/'.$dob1[0];
		$type = $_POST['type'];
		$encrypt_pwd=md5($pwd);
		$rs=mysqli_query($conn,"select * from login where email='$email'");
		 $login = mysqli_fetch_assoc($rs);
	  if ($login['email'] === $email) {
      array_push($errors, "email already exists");
	  echo " email already exists";
    }	
 if (count($errors) == 0) {
     echo $encrypt_pwd;
  	$query = "INSERT INTO login (email,pwd,auth,dob,type) 
  			  VALUES('$email', '$encrypt_pwd','0','$dob','$type')";
  	mysqli_query($conn, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: Employee_welcome.php');
  }	
	
		}
?>  