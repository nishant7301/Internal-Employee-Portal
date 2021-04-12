<?php  
$conn = mysqli_connect("localhost:3308","root","","maxonic");
   session_start();
   $errors = array();
    $date=date("Y/m/d",time()) ;
   $rs=mysqli_query($conn,"select * from login");
 
		 	 
	while($login=mysqli_fetch_array($rs))
	{
	 $Email=$login['email'];
	 $date1= date('Y/m/d', strtotime('-1 days'));
	 echo $date1; 
	 echo ", ";
	 $rs1=mysqli_query($conn,"select * from attendance where Email='$Email' AND Date='$date1'");
      
      if(mysqli_num_rows($rs1)==0)
	  {
		    echo $Email;
			echo ", ";
			echo "Absent ";
		   echo nl2br("\n");			
	 }
	 }	 
	  ?>