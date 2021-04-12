<?php
$postData = $uploadedFile = $statusMsg = '';
$code=$name=$pfnumber=$gender=$status=$salary=$dob=$doj=$monthsalary=$parent=$rel=$employment=$adhar=$qualification=$uan=$accountant=$ifsc=$email="";

$conn = mysqli_connect("localhost:3308","root","","maxonic");
 session_start();
   if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");
   }
$errors = array();
$statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['submit']))
{
    $email = $_SESSION['email'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $pfnumber = $_POST['pfnumber'];
	$gender = $_POST['gender'];
    $status = $_POST['status'];
	$salary = $_POST['salary'];
	$dob = $_POST['dob'];
	$doj = $_POST['doj'];
	$monthsalary = $_POST['monthsalary'];
	$parent = $_POST['parent'];
	$rel = $_POST['rel'];
	$employment = $_POST['employment'];
	$adhar = $_POST['adhar'];
	$qualification = $_POST['qualification'];
	$uan = $_POST['uan'];
	$accountant = $_POST['account'];
	$ifsc = $_POST['ifsc'];
	
	
		 
        // Validate email
	
	$toEmail = 'nishant@maxonic.com';
	$from="reporting@maxonic.com";
                $fromName =$name;
                $emailSubject = 'PF Information for New Joinee '.$name;
              
$message = "".
"EMP Code: $code" . "\n" .
"Name of the Employee(As per Aadhaar): $name" . "\n" .
"Complete Previous Establishment PF No: $pfnumber" .
"Gender: $gender" . "\n" .
"Marital Status: $status" . "\n" .
"DOB : $dob" . "\n" .
"Date of Joining: $doj" . "\n" .
"Actual Monthly Basic & DA: $monthsalary" . "\n" .
"Father/Husband Name: $parent" . "\n" .
"Relationship with the member (Father/Husband): $rel" . "\n" .
"Is it a first Employemnt (YES/NO): $employment" . "\n" .
"Aadhaar Number: $adhar" . "\n" .
"Qualification(PUC, Graduate, PG,Phd): $qualification" . "\n" .
"UAN No. from previous Employment(IF ANY): $uan" . "\n" .
"Bank A/c Number: $accountant" . "\n" .
"IFSC Code: $ifsc";
				
$cr = "\n";
$data = "EMP Code" . ',' . "Name of the Employee(As per Aadhaar)" . ',' . "Complete Previous Establishment PF No" . ',' . "Gender" . ',' . "Marital Status" . ',' . "DOB" . ',' . "Date of Joining" . ',' . "Actual Monthly Basic & DA" . ',' . "Father/Husband Name" . ',' . "Relationship with the member (Father/Husband)" . ',' . "Is it a first Employemnt (YES/NO)" . ',' . "Aadhaar Number" . ',' . "Qualification(PUC/Graduate/PG/Phd)" . ',' . "UAN No. from previous Employment(IF ANY)" . ',' . "Bank A/c Number" . ',' . "IFSC Code" . $cr;
$data .= "$code" . ',' . "$name" . ',' ."$pfnumber" . ',' ."$gender" . ',' ."$status" . ',' ."$dob" . ',' ."$doj" . ',' ."$monthsalary" . ',' ."$parent" . ',' ."$rel" . ',' ."$employment" . ',' ."$adhar" . ',' ."$qualification" . ',' ."$uan" . ',' ."$accountant" . ',' ."$ifsc" . $cr;
       

$fp = fopen('file.csv','a');
fwrite($fp,$data);
fclose($fp);

$attachments[] = Array(
   'data' => $data,
   'name' => 'file.csv',
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
                    $statusMsg = 'Your PF information has been sent!';
                    $msgClass = 'succdiv';
                    header("Location: Employee_welcome.php");  
              
                }else{
                    $statusMsg = 'Your PF information has not been sent.';
                }
}
?>
<?php if(!empty($statusMsg)){ ?>
    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
<?php } ?>
