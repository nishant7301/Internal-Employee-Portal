<?php
date_default_timezone_set('America/Los_Angeles');
$file = 'C:\Users\Nishant\Desktop\Candidate_'.date("Y-m-d").'.csv';
$headingss="DateAdded,CandidateID,Name,Gender,Phone,Address,Email,EducationDegree,CompanyName,Occupation,Owner,Experience,Status,Submissions,Sendouts,CSource";
$myfile = file_put_contents($file, $headingss.PHP_EOL , FILE_APPEND | LOCK_EX);

    try
    {
        $obj = new BullhornMethodDefination(); //object decalaration
        $jobs = $obj->getBHJobs('id,candidate,dateAdded,jobOrder,source,status');
      //  echo $jobs;
        //echo "<table id='example' class='display nowrap' width='100%' border='1' cellspacing='0' border-color='#F28518'>  <thead><tr bgcolor='white' style='color:#F28518'><th>Date Added</th><th>ID</th><th>Name</th><th>Gender</th><th>Phone</th><th>Address</th><th>Email</th><th>Degree</th><th>Comments</th><th>Company Name</th><th>Occupation</th><th>Owner</th><th>Experience</th><th>Status</th><th>Submissions</th><th>Sendouts</th></tr></thead><tbody>";
 //echo '<table id="example" class="display" width="100%" cellspacing="0"> <thead><th>JOBID</th><th>JOB TITLE</th><th>DATE ADDED</th><th>CANDIDATE NAME</th><th>SALES</th><th>OWNERS</th><th>JOB TYPE</th></b></tr> <tbody>';
        if($jobs === NULL)
        {
            echo "Jobs are empty";
        }
        else
        {
            $i=0;
            foreach ($jobs->data as $key=>$value) 
            {
                $id=$value->id;
				$dateAdded= $value->dateAdded;
	            $date1=date("Y-m-d", substr($dateAdded, 0, 10));
				$name=$value->name;
				$gender=$value->gender;
				$phone=$value->phone;
				$address=$value->address->city;
				$degree=$value->educationDegree;
				//$comments=$value->comments;
				//$comments=str_replace("\n"," ",$comments);
				//$comments=str_replace(",","",$comments);
				//$comments=str_replace("\r","",$comments);
				$companyName=$value->companyName;
				$companyName=str_replace(",","",$companyName);
				$email=$value->email;
				$occupation=$value->occupation;
				$occupation=str_replace(",","",$occupation);
	            $owner=$value->owner->firstName." ".$value->owner->lastName;
				$experience=$value->experience;
	            $status=$value->status;
	            $submissions="";
				$sendouts="";
	            foreach($value->submissions->data as $key1=>$value1)
	            {
	                $submissions=$submissions." ".$value1->id.":";
	            }
	            foreach($value->sendouts->data as $key2=>$value2)
	            {
	                $sendouts=$sendouts." ".$value2->id.":";
	            }
				$source=$value->source;
				
	           
                
             /*   echo '<tr>';
                    echo '<td>'.$date1.'</td>';
                    echo '<td>'.$id.'</td>';
                    echo '<td>'.$name.'</td>';
                    echo '<td>'.$gender.'</td>';
                    echo '<td>'.$phone.'</td>';
                    echo '<td>'.$address.'</td>';
					echo '<td>'.$email.'</td>';
                    echo '<td>'.$degree.'</td>';
                    echo '<td>'.$comments."</td>";
					echo '<td>'.$companyName.'</td>';
					echo '<td>'.$occupation.'</td>';
					echo '<td>'.$owner.'</td>';
					echo '<td>'.$experience.'</td>';
					echo '<td>'.$status.'</td>';
					echo '<td>'.$submissions.'</td>';
					echo '<td>'.$sendouts.'</td>';
					echo '<td>'.$source.'</td>';
                echo '</tr>';*/    
                $current = $date1.",".$id.",".$name.",".$gender.",".$phone.",".$address.",".$email.",".$degree.",".$companyName.",".$occupation.",".$owner.",".$experience.",".$status.",".$submissions.",".$sendouts.",".$source;
				$myfile = file_put_contents($file, $current.PHP_EOL , FILE_APPEND | LOCK_EX);
				$submissions="";
				$sendouts="";
            }
        }
    // echo '</tbody></table>';
    }
   catch (Exception $e) 
				{
					error_log($e->getMessage());
				}
				class BullhornMethodDefination {
     
    private $bh_connect;
    private $http;
 
      
    public function __construct() {
     
     $this->bh_connect = new BullhornConnection();
 
     $this->bh_connect = $this->bh_connect->BHConnect();
      
     $this->http = new BullhornConnection();
     
    }
 
   
 
    public function getBHJobs($fields) {
 
    
    $this->bh_connect;
            
            $method='search/Candidate?query=isDeleted:false%20true&fields=id,dateAdded,name,gender,phone,address,educationDegree,comments,companyName,email,occupation,owner,experience,status,sendouts,submissions,source&start=0&count=500&sort=-dateAdded&BhRestToken='.$_SESSION['BH']['restToken'];
            
     
          
          

     
    $http = $this->http->makeHttpRequest($_SESSION['BH']['restURL'], $method);
 
    $response = $http;
    //echo $response;
 
       if(isset($response->errorMessage)) {
 
           if(BH_DEV === true) echo "<pre>".print_r($response,2)."</pre>";
 
           $response = array();
       }
 
   return $response;
    
   }
 
 
   //get single job details
    public function getBHJobDetail($jobId, $fields = '*'){
    
       $this->bh_connect;
 
       //$method = 'entity/JobOrder/'.$jobId.'?BhRestToken='.$_SESSION['BH']['restToken'].'&fields='.$fields;
       
       
       
 
       $http = $this->http->makeHttpRequest($_SESSION['BH']['restURL'], $method);
 
        $response = $http;
 
      return $response;
    
    }   
   
 
}
class BullhornConnection{
     
    
private $bh_dev = true;
private $bh_auth_url = 'https://auth.bullhornstaffing.com/oauth/';
private $bh_client_id = '9fe1874b-bfe2-41d0-a318-07de4e3a3a40'; //you need to send ticket to get this id
private $bh_clinet_secret = '8xBDJYEZTk3bwSzaBO8nLxovLQjTaEg2';
private $user;
private $pass;
  
private function setCredentials(){
 
   // If test environment is set
   if($this->bh_dev === true){
 
       $this->user = 'MaxonicWebDeveloper'; // This is the developer login id
 
       $this->pass = '153boulder';     
   
   }else{
 
      $this->user = 'MaxonicWebDeveloper'; // this is direct client to Bullhorn
 
      $this->pass = '153boulder';
   }
}
 
 
public function makeHttpRequest($baseURL = '', $method, $options = array(), $format ='json'){
    
     $url = $baseURL.$method;
  
    if(empty($options)){
 
        $options = array( CURLOPT_RETURNTRANSFER => 1 );
     
     }
    
     
    $ch = curl_init( $url );
 
    curl_setopt_array( $ch, $options );
 
    $content = curl_exec( $ch );
 
    curl_close( $ch );
 
 
 
   if($format == 'json'){
 
      $content = json_decode($content);   
   }
 
    return $content;
}
 
 
 
private function getBHAuthCode() {
  
   $method = 'authorize?client_id='.$this->bh_client_id.'&response_type=code';
 
   $data = 'action=Login&username='.$this->user.'&password='.$this->pass;
 
    $options = array(
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $data,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_AUTOREFERER    => true,
        CURLOPT_CONNECTTIMEOUT => 120,
        CURLOPT_TIMEOUT        => 120,
    );
 
   $response = $this->makeHttpRequest($this->bh_auth_url, $method, $options, 'string');
     
    if( preg_match('#Location: (.*)#', $response, $r) ) {
         
         $l = trim($r[1]);
 
        $temp = preg_split("/code=/", $l);
 
        $authcode = $temp[1];
    }
 
    return $authcode;
 
}
 
  
private function getBHTokens($authCode) {
  
   $method = 'token?grant_type=authorization_code&code='.$authCode.'&client_id='.
               $this->bh_client_id.'&client_secret='.$this->bh_clinet_secret;
 
    $options = array( CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => true, CURLOPT_POSTFIELDS => array());
 
    $response = $this->makeHttpRequest($this->bh_auth_url, $method,$options);
 
    $_SESSION['BH']['refreshToken'] = $response->refresh_token;
 
   return $response;
 
}
 
 
private function getBHSession($token) {
 
   $baseURL = 'https://rest.bullhornstaffing.com/rest-services/';
 
   $method = 'login?version=*&access_token='.$token;
 
    $options = array( CURLOPT_RETURNTRANSFER => 1, CURLOPT_POST => true, CURLOPT_POSTFIELDS => array());
 
    $response = $this->makeHttpRequest($baseURL, $method,$options);
 
   return $response;

 
}
 
private function setBHSession($sessionToken){
    
   $_SESSION['BH']['restToken'] = $sessionToken->BhRestToken;
   echo $sessionToken->BhRestToken;
 
   $_SESSION['BH']['restURL'] = $sessionToken->restUrl;
 
   $_SESSION['BH']['tokenCreated'] = time();
       
}
 
public function BHConnect() {
 
   if((!isset($_SESSION['BH']['restToken']) || $_SESSION['BH']['restToken'] == '') || (isset($_SESSION['BH']['tokenCreated']) && $_SESSION['BH']['tokenCreated'] + 8 * 60 < time()))  {
 
       $this->setCredentials();
 
       $authCode = $this->getBHAuthCode();
 
       $token = $this->getBHTokens($authCode);
 
       $sessionToken = $this->getBHSession($token->access_token);
 
       $this->setBHSession($sessionToken);
   }
    
}
     
}



?>

