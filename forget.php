<?php  
$conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   $errors = array(); 
   if(isset($_POST['submit'])){
		$email = $_POST['email'];
	
		$rs=mysqli_query($conn,"select * from login where email='$email'");
		 $login = mysqli_fetch_assoc($rs);
	  if ($login['email'] === $email) {
       $pwd=rand(999,99999);
	   $pwd1=md5($pwd);
	   $query = "update login set pwd='$pwd1' where Email='$email'";
	   mysqli_query($conn, $query);
	   $from="reporting@maxonic.com";
	   $toEmail = $email;
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Internal Employee portal Password';
	   $htmlContent = '<p>Please find the password below and Kindly Reset Your Password</p>
	   <table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
	   <th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">Email:</th>
       <td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"> '.$email.'</td>
	   </tr>
	   <tr>
	           <th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">Password:</th>
                <td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"> '.$pwd.'</td>
    </tr>
	</table>';
	 $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
                
                if($mail){
                    $_SESSION['msg'] = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
                    header("Location: Employee.php"); 
              
                }else{
                    $statusMsg = 'There is some error.';
                }
    }	
  else
  {
  echo "your Email Id is not registered";
  }
	
		}
?>  