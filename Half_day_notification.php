<?php  
$conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   $errors = array();
    $date=date("Y/m/d",time()) ;
   $rs=mysqli_query($conn,"select * from login");
   $rs2=mysqli_query($conn,"select * from attendance");
 
		 	 
	while($login=mysqli_fetch_array($rs))
	{
	
	 $Email=$login['email'];
	
	  
	 
	 
	 $rs1=mysqli_query($conn,"select * from attendance where Email='$Email' AND Date='$date' ");
	
      
      if(mysqli_num_rows($rs1)==1)
            {
	 $attendance=mysqli_fetch_array($rs1);
	 $check_in=$attendance['check_in'];
	 $check_out=$attendance['check_out']; 
			 
			
		if($check_out=='')
		{
		$from="reporting@maxonic.com";		
		$toEmail = $Email;
		$name1 = substr($Email, 0, strrpos($Email, '@'));
		$name=ucfirst("$name1");
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Forgot check out notification';
	   $htmlContent = '<p>Hi '.$name.', </p>
	                    <p></p>
	                    <p>As per your login information you forgot to checkout, please ask your approver to change the status to approve and make it a full day.You may ignore this mail if already applied.</p>
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
else 
{
	
$diff=strtotime($attendance['check_out'])-strtotime($attendance['check_in']) ;
$hour=floor(($diff/3600));
$rem1=$diff%3600;
$minute=floor($rem1/60);
$second=$rem1%60;
if($hour<=6)
{
        $from="reporting@maxonic.com";		
		$toEmail = $Email;
		$name1 = substr($Email, 0, strrpos($Email, '@'));
		$name=ucfirst("$name1");
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Half Day notification';
	   $htmlContent = '<p>Hi '.$name.', </p>
	                    <p></p>
	                    <p>As per your login information you had taken a half day yesterday. Please apply your leaves on https://paybooks.in/. You may ignore this mail if already applied.</p>
                        <p>-Maxonic Accounting</p>';
					
	             $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";	
					
					 $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
				
                
                if($mail){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
              
    
                }else{
                    $statusMsg = 'There is some error.';
                }
}

}	
					

			
	 }
	 }	 
	  ?>