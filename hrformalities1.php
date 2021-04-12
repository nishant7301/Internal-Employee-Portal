
<!DOCTYPE html>
<html>
<head>
<title>HR formalities for Experienced</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
h1{
color:black;
}
body {
	background-image: url("slider4.jpg");
 background-color: white;
   background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center; 
}
input[type=file] {
    width: 50%;
    padding: 10px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
    
}
input[type=submit] {
    width: 50%;
    padding: 11px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;;
    color: white;
    
}
 input[type=email] {
       width: 50%;
    padding: 11px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
    color: white;
    
}
 
a {
    width: 25%;
    padding: 11px 18px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: black;
	color: white;
}
a.active {
 width: 32%;
    padding: 10px 18px;
   margin: 8px 0;
  background-color: white;
  color: black;
}
label
{
	 font-size: 14px;
}
</style>
</head>
<body>

<?php
    session_start();
   if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
if ($_SERVER['REQUEST_METHOD']=="POST"){

   // we'll begin by assigning the To address and message subject
   $to="nishant@maxonic.com";
   $subject="Document For Verification";
   $email = $_POST['email'];
         $fromName = $email;
		 $frommail = "nishant@maxonic.com";
   // get the sender's name and email address
   // we'll just plug them a variable to be used later
    $from = $fromName."<".stripslashes($frommail).">";

   // generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

    $headers = "From: $from\r\n" .
   "MIME-Version: 1.0\r\n" .
      "Content-Type: multipart/mixed;\r\n" .
      " boundary=\"{$mime_boundary}\"";;


   // here, we'll start the message body.
   // this is the text that will be displayed
   // in the e-mail
   $message="Please find the document below.";


   // next, we'll build the invisible portion of the message body
   // note that we insert two dashes in front of the MIME boundary 
   // when we use it
   $message = "This is a multi-part message in MIME format.\n\n" .
      "--{$mime_boundary}\n" .
      "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
      "Content-Transfer-Encoding: 7bit\n\n" .
   $message . "\n\n";

   // now we'll process our uploaded files
   foreach($_FILES as $userfile){
      // store the file information to variables for easier access
      $tmp_name = $userfile['tmp_name'];
      $type = $userfile['type'];
      $name = $userfile['name'];
      $size = $userfile['size'];

      // if the upload succeded, the file will exist
      if (file_exists($tmp_name)){

         // check to make sure that it is an uploaded file and not a system file
         if(is_uploaded_file($tmp_name)){

            // open the file for a binary read
            $file = fopen($tmp_name,'rb');

            // read the file content into a variable
            $data = fread($file,filesize($tmp_name));

            // close the file
            fclose($file);

            // now we encode it and split it into acceptable length lines
            $data = chunk_split(base64_encode($data));
         }

         // now we'll insert a boundary to indicate we're starting the attachment
         // we have to specify the content type, file name, and disposition as
         // an attachment, then add the file content.
         // NOTE: we don't set another boundary to indicate that the end of the 
         // file has been reached here. we only want one boundary between each file
         // we'll add the final one after the loop finishes.
         $message .= "--{$mime_boundary}\n" .
            "Content-Type: {$type};\n" .
            " name=\"{$name}\"\n" .
            "Content-Disposition: attachment;\n" .
           
            "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n";
      }
   }
   // here's our closing mime boundary that indicates the last of the message
   $message.="--{$mime_boundary}--\n";
   // now we just send the message
  $ok= @mail($to, $subject, $message, $headers);
   if ($ok)
      header("Location: http://localhost//portal/Employee_welcome.html"); 
   else
      echo "Failed to send";
}
else {
?>
<div class="row">
<div class="col-sm-4"><a href="Employee_welcome.php" class="btn btn-info" role="button"><font color="white">Back</font></a>  
</div>
<div class="col-sm-4">
<a  href="hrformalities.php">For Freshers</a>
<a  class="btn active" href="hrformalities1.php">For Experienced</a>
</div>
<div class="col-sm-4">
             <a href="Employee.php" class="btn btn-info" role="button" style="float: right;">Log Out</a> 
</div>
</div>
<h1 align="center">Welcome to Maxonic HR Formalities</h1>
<form action="" method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-sm-2"> 
</div>
<div class="col-sm-5">
<label><font color="black"><strong>DOB Proof*:</strong></font></label>	
<input type="file" name="file1" accept="image/*" required> 				               
<label><font color="black"><strong>Address Proof*:</strong></font></label>
<input type="file" name="file2" accept="image/*" required>
<label><font color="black"><strong>PAN Card Copy*:</strong></font></label>
<input type="file" name="file3" accept="image/*" required>                                             
<label><font color="black"><strong>Photograph*:</strong></font></label> 
<input type="file" name="file4" accept="image/*" required>
<label><font color="black"><strong>Last Employer Salary Slip*:</strong></font></label>
<input type="file" name="file5" accept="image/*" required> 
<label><font color="black"><strong>Email*:</strong></font></label> <br>
<input type="email" name="email" placeholder="Enter your email" required>  
</div>
<div class="col-sm-5">
<label><font color="black"><strong>Highest Education degree*:</strong></font></label>
<input type="file" name="file6" accept="image/*"required>
<label><font color="black"><strong>Last Employer Appointment Letter*:</strong></font></label> 
<input type="file" name="file7" accept="image/*" required>                    
<label><font color="black"><strong>Passport Copy*:</strong></font></label>
<input type="file" name="file8" accept="image/*" required>
<label><font color="black"><strong>HDFC Account Details*:</strong></font></label>  
<input type="file" name="file9" accept="image/*" >                              
<label><font color="black"><strong>Adhar Card Copy*:</strong></font></label>
<input type="file" name="file10" accept="image/*" required><br>
<input type="submit" name="upload" value="Send" />
</div>
</div>						 
</form>
<?php } ?>
</body>
</html>
