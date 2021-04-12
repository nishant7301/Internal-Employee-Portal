<?php
   session_start();
   if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
$statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['submit'])){
   
    $sno = $_POST['sno'];
    $empid = $_POST['empid'];
    $name = $_POST['name'];
	$gender = $_POST['gender'];
    $pno = $_POST['pno'];
	$email1 = $_POST['email'];
	$dob = $_POST['dob'];
	$doj = $_POST['doj'];
	$address = $_POST['address']; 
	$paddress = $_POST['paddress']; 
	$fname = $_POST['fname'];
	$dobfather = $_POST['dob1'];
	$mname = $_POST['mname'];
	$dobmother = $_POST['dob2'];
	$status = $_POST['status'];
	$spname = $_POST['spname'];
	$dobspouse = $_POST['dob3'];
	$childname = $_POST['cname'];
	$childage = $_POST['cage'];
	$adhar = $_POST['adhar'];
	$pancard = $_POST['pancard'];
	$account = $_POST['account'];
	$ifsc = $_POST['ifsc'];
	$bankname = $_POST['bankname'];
	$branch = $_POST['branch'];
    
        // Validate email
     
                $toEmail = 'nishant@maxonic.com';
                $from="reporting@maxonic.com";
                  $fromName =$name;
                $emailSubject = 'ESI Information for New Joinee '.$name;
$message = "".
"Serial Number: $sno" . "\n" .
"Employee ID: $empid" . "\n" .
"Employee Name as per Aadhar Card: $name" .
"Gender: $gender" . "\n" .
"Contact Number: $pno" . "\n" .
"Personal Mail ID : $email1" . "\n" .
"DOB(Self): $dob" . "\n" .
"Date of Joining: $doj" . "\n" .
"Permanent Address: $address" . "\n" .
"Present Address: $paddress" . "\n" .
"Father's Name: $fname" . "\n" .
"DOB(Father): $dobfather" . "\n" .
"Mother's Name: $mname" . "\n" .
"DOB(Mother): $dobmother" . "\n" .
"Marital Status(your): $status" . "\n" .
"Spouse's Name: $spname" . "\n" .
"DOB(spouse): $dobspouse" . "\n" .
"Children Names: $childname" . "\n" .
"Age(child): $childage" . "\n" .
"Aadhar Card Number: $adhar" . "\n" .
"PAN Card Number: $pancard" . "\n" .
"Bank A/c Number: $account" . "\n" .
"IFSC Code: $ifsc" . "\n" .
"Bank Name: $bankname" . "\n" .
"Branch Name: $branch ";
				
$cr = "\n";
$data = "Serial Number" . ',' . "Employee ID" . ',' . "Employee Name as per Aadhar Card" . ',' . "Gender" . ',' . "Contact Number" . ',' . "Personal Mail ID" . ',' . "DOB(Self)" . ',' . "Date of Joining" . ',' . "Permanent Address" . ',' . "Present Address" . ',' . "Father's Name" . ',' . "DOB(Father)" . ',' . "Mother's Name" . ',' . "DOB(Mother" . ',' . "Marital Status(your)" . ',' . "Spouse's Name" . ',' . "DOB(spouse)" . ',' . "Children Names" . ',' . "Age(child)" . ',' . "Aadhar Card Number" . ',' . "PAN Card Number" . ',' . "Bank A/c Number" . ',' . "IFSC Code" . ',' . "Bank Name" . ',' . "Branch Name" . $cr;
$data .= "$sno" . ',' . "$empid" . ',' ."$name" . ',' . "$gender" . ',' . "$pno" . ',' . "$email1" . ',' . "$dob" . ',' . "$doj" . ',' . "$address" . ',' . "$paddress" . ',' . "$fname" . ',' . "$dobfather" . ',' . "$mname" . ',' . "$dobmother" . ',' . "$status" . ',' . "$spname" . ',' . "$dobspouse" . ',' . "$childname" . ',' . "$childage" . ',' . "$adhar" . ',' . "$pancard" . ',' . "$account" . ',' . "$ifsc" . ',' . "$bankname" . ',' . "$branch" . $cr;
       

$fp = fopen('ESI.csv','a');
fwrite($fp,$data);
fclose($fp);

$attachments[] = Array(
   'data' => $data,
   'name' => 'ESI.csv',
   'type' => 'application/vnd.ms-excel'
);
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
//Add the headers for a file attachment
$headers = "MIME-Version: 1.0\n" .
           "From: {$from}\n" .
           "Content-Type: multipart/mixed;\n" .
           " boundary=\"{$mime_boundary}\"";
//Add a multipart boundary above the plain message
$message = "This is a multi-part message in MIME format.\n\n" .
          "--{$mime_boundary}\n" .
          "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
          "Content-Transfer-Encoding: 7bit\n\n" ."\n\n";

//Add sttachments
foreach($attachments as $attachment){
   $data = chunk_split(base64_encode($attachment['data']));
   $name = $attachment['name'];
   $type = $attachment['type'];
   $message .= "--{$mime_boundary}\n" .
              "Content-Type: {$type};\n" .
              " name=\"{$name}\"\n" .              
              "Content-Transfer-Encoding: base64\n\n" .
              $data . "\n\n" ;				
                
               
			
}
$message .= "--{$mime_boundary}--\n";     
$mail = mail($toEmail, $emailSubject, $message, $headers);          

                
                if($mail){
                    $statusMsg = 'Your ESI from has been submitted successfully !';
                    $msgClass = 'succdiv';
					 header("Location: Employee_welcome.php");  
                    
              
                }else{
                    $statusMsg = 'Your ESI form has submission failed, please try again.';
                }
            
            
			
    
}
?>
<?php if(!empty($statusMsg)){ ?>
    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
<?php } ?>
