<?php
$conn = mysqli_connect("localhost:3308","root","","attmaxonic");
   session_start();
   $errors = array();
    $date=date("Y/m/d",time()) ;
   $rs=mysqli_query($conn,"select * from login");


        while($login=mysqli_fetch_array($rs))
        {
         $Email=$login['email'];
         $date1= date('Y/m/d', strtotime('-3 days'));

         $rs1=mysqli_query($conn,"select * from attendance where Email='$Email' AND Date='$date1'");

      if(mysqli_num_rows($rs1)==0)
      {
              echo $date1;
              echo ",";
                    echo $Email;
                        echo ", ";
                        echo "Absent ";
                   echo "\n";
         }
         }
          ?>
