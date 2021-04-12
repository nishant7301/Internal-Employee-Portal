<?php  
$conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   $errors = array();
   
   $rs=mysqli_query($conn,"select * from login");
		 
		 
		 $date=date("d/m/Y",time()) ;
		 $date1 = explode('/', $date);
		 $day = $date1[0];
         $month = $date1[1];
         $year  = $date1[2];
		 
	while($login=mysqli_fetch_array($rs))
	{
		 $dob=$login['dob'];
		 $dob1 = explode('/', $dob);
		 $day1= $dob1[0];
		 $month1 = $dob1[1];
	     echo $day1;
		 echo " ";
		 echo $month1;
		 echo " ";
	  if ( $day==$day1 && $month==$month1) 
	  {
	  if($login['email']=='sudhir@maxonic.com')
	  {
	   $from="reporting@maxonic.com";
	   $toEmail = 'nishant@maxonic,pema@maxonic.com,indranila@maxonic.com,anjali@maxonic.com,nayana@maxonic.com,paduka@maxonic.com,nitish@maxonic.com';
	   $toEmail1 = $login['email'];
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Birthday notification';
	   $htmlContent = '<p>Wish a Happy birthday to '.$login['email'].'.</p>';
	   $htmlContent1 = '<p>Hi Sudhir,</p>
	                    <p></p>
	                    <p>May your birthday be the start of a year filled with good luck, good health and much happiness.</p>
						<p>Wishing you a great birthday and a memorable year!</p> 

                        <p>-Maxonic</p>';
	   $headers = "From: $fromName"." <".$from.">";
      
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
					$mail1 = mail($toEmail1,$emailSubject, $htmlContent1, $headers);
                
                if($mail){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
              
    
                }else{
                    $statusMsg = 'There is some error.';
                }
				    if($mail1){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
              
    
                }else{
                    $statusMsg = 'There is some error.';
                }
				
		  }
		    if($login['email']=='nishant@maxonic.com')
	  {
	   $from="reporting@maxonic.com";
	   $toEmail = 'sudhir@maxonic,pema@maxonic.com,indranila@maxonic.com,anjali@maxonic.com,nayana@maxonic.com,paduka@maxonic.com,nitish@maxonic.com';
	   $toEmail1 = $login['email'];  
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Birthday notification';
	   $htmlContent = '<p>Wish a Happy birthday to '.$login['email'].'.</p>';
	   $htmlContent1 = '<p>Hi Nishant,</p>
	                    <p></p>
	                    <p>May your birthday be the start of a year filled with good luck, good health and much happiness.</p>
						<p>Wishing you a great birthday and a memorable year!</p> 

                        <p>-Maxonic</p>';
	   $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
					
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
					$mail1 = mail($toEmail1,$emailSubject, $htmlContent1, $headers);
                
                if($mail){
                    $statusMsg = 'Your dob notification has been sent successfully !';
                    $msgClass = 'succdiv';
                  
              
                }else{
                    $statusMsg = 'There is some error.';
                }
				    if($mail1){
                    $statusMsg = 'Your dob notification has been sent successfully !';
                    $msgClass = 'succdiv';
                  
              
                }else{
                    $statusMsg = 'There is some error.';
                }
				
		  }
	if($login['email']=='pema@maxonic.com')
	  {
	   $from="reporting@maxonic.com";
	   $toEmail = 'sudhir@maxonic,nitish@maxonic.com,indranila@maxonic.com,anjali@maxonic.com,nayana@maxonic.com,paduka@maxonic.com,nishant@maxonic.com';
	    $toEmail1 = $login['email']; 
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Birthday notification';
	   $htmlContent = '<p>Wish a Happy birthday to '.$login['email'].'.</p>';
	    $htmlContent1 = '<p>Hi Pema,</p>
	                    <p></p>
	                    <p>May your birthday be the start of a year filled with good luck, good health and much happiness.</p>
						<p>Wishing you a great birthday and a memorable year!</p> 

                        <p>-Maxonic</p>';
	    $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
					$mail1 = mail($toEmail1,$emailSubject, $htmlContent1, $headers);
                
                if($mail){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
                  
              
                }else{
                    $statusMsg = 'There is some error.';
                }
				    if($mail1){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
              
    
                }else{
                    $statusMsg = 'There is some error.';
                }
				
		  }
		  	if($login['email']=='anjali@maxonic.com')
	  {
	   $from="reporting@maxonic.com";
	   $toEmail = 'sudhir@maxonic,nitish@maxonic.com,indranila@maxonic.com,nayana@maxonic.com,paduka@maxonic.com,nishant@maxonic,pema@maxonic.com';
	   $toEmail1 = $login['email']; 
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Birthday notification';
	   $htmlContent = '<p>Wish a Happy birthday to '.$login['email'].'.</p>';
	    $htmlContent1 = '<p>Hi Anjali,</p>
	                    <p></p>
	                    <p>May your birthday be the start of a year filled with good luck, good health and much happiness.</p>
						<p>Wishing you a great birthday and a memorable year!</p> 

                        <p>-Maxonic</p>';
	    $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
					$mail1 = mail($toEmail1,$emailSubject, $htmlContent1, $headers);
                
                if($mail){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
                  
              
                }else{
                    $statusMsg = 'There is some error.';
                }
				    if($mail1){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
              
    
                }else{
                    $statusMsg = 'There is some error.';
                }
				
		  }
	if($login['email']=='indranila@maxonic.com')
	  {
	   $from="reporting@maxonic.com";
	   $toEmail = 'sudhir@maxonic,nitish@maxonic.com,anjali@maxonic.com,nayana@maxonic.com,paduka@maxonic.com,nishant@maxonic,pema@maxonic.com';
	   $toEmail1 = $login['email']; 
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Birthday notification';
	   $htmlContent = '<p>Wish a Happy birthday to '.$login['email'].'.</p>';
	    $htmlContent1 = '<p>Hi Indranil,</p>
	                    <p></p>
	                    <p>May your birthday be the start of a year filled with good luck, good health and much happiness.</p>
						<p>Wishing you a great birthday and a memorable year!</p> 

                        <p>-Maxonic</p>';
	    $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
					$mail1 = mail($toEmail1,$emailSubject, $htmlContent1, $headers);
                
                if($mail){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
                     
              
                }else{
                    $statusMsg = 'There is some error.';
                }
				    if($mail1){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
              
    
                }else{
                    $statusMsg = 'There is some error.';
                }
				
		  }
		  if($login['email']=='nayana@maxonic.com')
	  {
	   $from="reporting@maxonic.com";
	   $toEmail = 'sudhir@maxonic,nitish@maxonic.com,anjali@maxonic.com,indranila@maxonic.com,paduka@maxonic.com,nishant@maxonic,pema@maxonic.com';
	   $toEmail1 = $login['email']; 
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Birthday notification';
	   $htmlContent = '<p>Wish a Happy birthday to '.$login['email'].'.</p>';
	    $htmlContent1 = '<p>Hi Nayana,</p>
	                    <p></p>
	                    <p>May your birthday be the start of a year filled with good luck, good health and much happiness.</p>
						<p>Wishing you a great birthday and a memorable year!</p> 

                        <p>-Maxonic</p>';
	    $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
					$mail1 = mail($toEmail1,$emailSubject, $htmlContent1, $headers);
                
                if($mail){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
               
              
                }else{
                    $statusMsg = 'There is some error.';
                }
				    if($mail1){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
              
    
                }else{
                    $statusMsg = 'There is some error.';
                }
				
		  }
		  		  if($login['email']=='nitish@maxonic.com')
	  {
	   $from="reporting@maxonic.com";
	   $toEmail = 'sudhir@maxonic,nayana@maxonic.com,anjali@maxonic.com,indranila@maxonic.com,paduka@maxonic.com,nishant@maxonic,pema@maxonic.com';
	   $toEmail1 = $login['email']; 
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Birthday notification';
	   $htmlContent = '<p>Wish a Happy birthday to '.$login['email'].'.</p>';
	    $htmlContent1 = '<p>Hi Nitish,</p>
	                    <p></p>
	                    <p>May your birthday be the start of a year filled with good luck, good health and much happiness.</p>
						<p>Wishing you a great birthday and a memorable year!</p> 

                        <p>-Maxonic</p>';
	    $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
					$mail1 = mail($toEmail1,$emailSubject, $htmlContent1, $headers);
                
                if($mail){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
                   
              
                }else{
                    $statusMsg = 'There is some error.';
                }
				    if($mail1){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
              
    
                }else{
                    $statusMsg = 'There is some error.';
                }
				
		  }
		  if($login['email']=='paduka@maxonic.com')
	  {
	   $from="reporting@maxonic.com";
	   $toEmail = 'sudhir@maxonic,nitish@maxonic.com,anjali@maxonic.com,indranila@maxonic.com,nishant@maxonic,pema@maxonic.com,nayana@maxonic.com';
       $toEmail1 = $login['email']; 	  
	   $fromName = 'Maxonic Internal Employee portal';
	   $emailSubject = 'Birthday notification';
	   $htmlContent = '<p>Wish a Happy birthday to '.$login['email'].'.</p>';
	    $htmlContent1 = '<p>Hi Paduka,</p>
	                    <p></p>
	                    <p>May your birthday be the start of a year filled with good luck, good health and much happiness.</p>
						<p>Wishing you a great birthday and a memorable year!</p> 

                        <p>-Maxonic</p>';
	    $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
					$mail1 = mail($toEmail1,$emailSubject, $htmlContent1, $headers);
                
                if($mail){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
                   
              
                }else{
                    $statusMsg = 'There is some error.';
                }
				    if($mail1){
                    $statusMsg = 'Your password has been sent successfully !';
                    $msgClass = 'succdiv';
              
    
                }else{
                    $statusMsg = 'There is some error.';
                }
				
		  }
		  
	  }
	}
	  ?>