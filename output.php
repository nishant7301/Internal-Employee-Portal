 <?php
//include database configuration file
$db = mysqli_connect("localhost:3308","root","","maxonic");

//get records from database
$query = $db->query("SELECT * FROM attendance");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "attendance_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen($filename, 'w');
         
    //set column headers
    $fields = array('Date', 'Email', 'check_in', 'check_out');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){    
        $lineData = array($row['Date'], $row['Email'], $row['check_in'], $row['check_out']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
	header('Content-Disposition: attachment; filename="' . $filename . '";');
    
   
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>