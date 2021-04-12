<?php
if(isset($_POST['submit'])){
$start_range = $_POST['start_ip'];
$end_range =   $_POST['end_ip'];
$location =   $_POST['location'];
    $delimiter = ",";
    $filename = "$location\iprange.csv";
    //create a file pointer
    $f = fopen($filename, 'w');
    
    //set column headers
    $fields = array('Start_range', 'End_range',);
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    
        $lineData = array($start_range, $end_range);
        fputcsv($f, $lineData, $delimiter);
  
    
    //move back to beginning of file
    fseek($f, 0);     
    //output all remaining data on a file pointer
  fpassthru($f);
 echo "your file has been created in location".$location;
 
}
?>