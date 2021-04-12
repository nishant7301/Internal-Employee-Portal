<?php
$conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   $errors = array();
    $date=date("Y/m/d",time()) ;
	$time = date('H:i:s');
   $rs=mysqli_query($conn,"select * from attendance where Date='$date'");
        while($login=mysqli_fetch_array($rs))
        {
          $check_out=$login['check_out'];
		  $email=$login['Email'];
		if($email!="indrnail@maxonic.com" && $email!="rashmi.h@maxonic.com")
		{
          if ($check_out=="" && $email=="nishant@maxonic.com")
          {
           $from="reporting@maxonic.com";
           $toEmail = $login['Email'];
           $fromName = 'Maxonic Internal Employee portal';
           $emailSubject = 'Attendance Alert';
           $htmlContent = '<p>This is reminder that you have not check out today.Please check out to avoid half day.</p>';
           $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";

                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers);
                if($mail){
                    $statusMsg = 'attendance alert sent !';
                    $msgClass = 'succdiv';


                }else{
                    $statusMsg = 'some error is coming please contact to the admin .';
                }
                                   
                  }
				  else{
					  echo "some thing is wrong";
				  }
		}
		else
		{
			if ($check_out=="" && $time='19:30:00')
          {
           $from="reporting@maxonic.com";
           $toEmail = $login['Email'];;
           $fromName = 'Maxonic Internal Employee portal';
           $emailSubject = 'Attendance Alert';
           $htmlContent = '<p>This is reminder that you have not check out today.Please check out to avoid half day.</p>';
           $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";

                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers);
                if($mail){
                    $statusMsg = 'attendance alert sent !';
                    $msgClass = 'succdiv';


                }else{
                    $statusMsg = 'some error is coming please contact to the admin .';
                }
                                   
                  }
				  else{
					  echo "some thing is wrong";
				  }
		}
			
		
				  }
                    
          ?>
