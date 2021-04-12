<?php
if(isset($_POST['submit'])){
$start_range = $_POST['start_ip'];
$end_range =   $_POST['end_ip'];
$keys=array($start_range,$end_range);
$csv_line = $keys;
 foreach( $keys as $key ){
     array_push($csv_line,'' . $_GET[$key]);
 $fname = 'iprange.csv'; //NAME OF THE FILE
 $csv_line = implode($csv_line);
 
 $fcon = fopen($fname,'a');
 $fcontent = $csv_line;
 fwrite($fcon,$csv_line);
 fclose($fcon);

 }
}
?>