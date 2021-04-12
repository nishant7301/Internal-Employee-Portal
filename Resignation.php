

<?php
session_start();
   if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
$statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['submit'])){
   
    $email = $_POST['email'];
    $name = $_POST['name'];
    $date1 = $_POST['date1'];
	$date2 = $_POST['date2'];
    $reason = $_POST['reason'];
	$feed = $_POST['feed'];
    
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($date1) && !empty($date2)&& !empty($reason)&& !empty($feed)){
        echo "hello";
        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
		}
			else
		    {
                $toEmail = 'nishant@maxonic.com';
                $from =$email;
                $fromName = $from;
                $emailSubject = 'Resignation Request Submitted by '.$name;
                $htmlContent = '<p>Please find the information:</p>
                   <table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
                <th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">Name:</th>
                <td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"> '.$name.'</td>
</tr><tr>
        <th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">Email:</th>
                <td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"> '.$email.'</td>
</tr>
<tr>
        <th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">Date of Resignation:</th>
                <td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$date1.'</td>
</tr>
<tr>
        <th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">Last date at Maxonic:</th>
                <td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$date2.'</td>
</tr>
<tr>
        <th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">Reason:</th>
                <td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$reason.'</td>
</tr>
<tr>
        <th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">Feedback for Maxonic:</th>
                <td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$feed.'</td>
</tr>
                    </table>';
                
                // Header for sender info
                    $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
                
                if($mail){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                    header("Location: Employee_welcome.php"); 
              
                }else{
                    $statusMsg = 'Your Resignation request submission failed, please try again.';
                }
            
            }
			
    }
	else{
        $statusMsg = 'Please fill all the fields.';
    }
}
?>
<?php if(!empty($statusMsg)){ ?>
    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
<?php } ?>
