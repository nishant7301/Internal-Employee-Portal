<?php  
$conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   $errors = array();
    $date=date("Y/m/d",time()) ;
   $rs=mysqli_query($conn,"select * from login");
 
		 	 
	while($login=mysqli_fetch_array($rs))
	{
	 $Email=$login['email'];
	 
	 $rs1=mysqli_query($conn,"select * from attendance where Email='$Email' AND Date='$date'");
      echo mysqli_num_rows($rs1);
      if(mysqli_num_rows($rs1)==0)
            {
		
		$from="reporting@maxonic.com";		
		$toEmail = "$Email,nishantraj2770@gmail.com";
		$name1 = substr($Email, 0, strrpos($Email, '@'));
		$name=ucfirst("$name1");
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Absent notification';
	   $htmlContent = '<p>Hi '.$name.', </p>
	                    <p></p>
	                    <p>As per your login information you had taken the day off yesterday, please apply your leaves on
https://paybooks.in/ . You may ignore this mail if already applied.</p>
                        <p>-Maxonic Accounting</p>';
					
	             $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
				
                
                if($mail){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
              
    
                }else{
                    $statusMsg = 'There is some error.';
                }
					

			
}
	 
	 }	 
	  ?>