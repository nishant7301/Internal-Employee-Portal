<?php
function debug($mixed = null, $line = null) {
/*
function to display debug information in a human readable format on the screen
*/
echo '<pre>';
echo 'line called from was '.$line;
var_dump($mixed);
echo '</pre>';
return null;
}
function GetToken($config){
/*
pass in the API key, username and password, a cURL call is made to get the token
if successful the token is returned with associated data in PHP Array format
If Debug is passed in as TRUE, an output of all variables is displayed
Required Arguments in the config array:
username
password
8x8-apikey
Optional Arguments in the config array:
debug
action: POST
arguments: username password
Example: "username=hugotestpbx.1012&password=Pass1234!"
header option: "8x8-apikey: <8x8_apikey>"
URL:
https://8x8gateway-prod.apigee.net/analytics/v1/oauth/token
Returns:
access_token (string): The access token used for 8x8 API calls.
expires_in (integer): The number of seconds the token is valid for.
token_type (string): The token type that is returned.
array (size=3) --Results of the function
"success" => boolean true/false
"error" => -- List of any issues within the function, including missing required
parameters
array (size=1)
0 => string "8x8-apikey is missing" (length=21)
"results" =>
array (size=3) -- Results of the API call
"access_token" => string "eyJhbGciOiJSUzI1NiJ9.eyJzdW....icPOwSL6wE3"...
(length=740)
"token_type" => string "bearer" (length=6)
"expires_in" => int 1800
*/
$return = array();
$return["success"] = true;
//check for required
if (!array_key_exists("8x8-apikey",$config["voa"])){
$return["success"] = false;
$return["error"][] = "8x8-apikey is missing";
}
if (!array_key_exists("username",$config["voa"])){
$return["success"] = false;
$return["error"][] = "username is missing";
}
if (!array_key_exists("password",$config["voa"])){
$return["success"] = false;
$return["error"][] = "password is missing";
}
if($return["success"] == true){
//set up cURL
$url =
"https://8x8gateway-voanalytics.apigee.io/call-detail-records/".$config["voa"]["version"]."/oauth/token";
$header = [
"8x8-apikey: ".$config["voa"]["8x8-apikey"]
];
$post =
"username=".$config["voa"]["username"]."&password=".$config["voa"]["password"];
//Start cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,30);
curl_setopt($ch, CURLOPT_TIMEOUT, 400); //timeout in seconds
curl_setopt($ch, CURLOPT_VERBOSE, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//posting
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
//custom header data
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//execute curl
$data = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); //get status code
$curl_errno = curl_errno($ch);
$curl_error = curl_error($ch);
curl_close($ch);
//convert to Array
$tokenArray = json_decode($data, true);
$return["results"] = $tokenArray;
}
//show debug if requested
if (array_key_exists("debug",$config["voa"]) && $config["voa"]["debug"] == true){
debug($config["voa"], __LINE__ ." Config|VOA : ");
debug($url, __LINE__ ." URL: ");
debug($header, __LINE__ ." header: ");
debug($post, __LINE__ ." post: ");
debug($status_code, __LINE__ ." status_code: ");
debug($curl_errno, __LINE__ ." curl_errno: ");
debug($curl_error, __LINE__ ." curl_error: ");
debug($return, __LINE__ ." Results: ");
}
return $return;
}
function GetCDR($config){
/*
pass in the required and optional paramters, a cURL call is made to get the crd data
if successful the cdr data is returned with associated data in PHP Array format
If Debug is passed in as TRUE, an output of all variables is displayed
Required Arguments in the config array:
pbxId
startTime
endTimetimeZone
pageSize
8x8-apikey
scrollId -when retrieving additional pages
Optional Arguments in the config array:
debug
isSimplified
action: POST
arguments: username password
Example: "username=hugotestpbx.1012&password=Pass1234!"
header option: "8x8-apikey: <8x8_apikey>"
URL:
https://8x8gateway-prod.apigee.net/analytics/v1/oauth/token
Returns:
array in 3 parts
array (size=2) -- Holds details on the success of the function calls
"success" => boolean true/false
"results" =>
array (size=2) -- Holds the top line results of the API call
"meta" =>
array (size=2)
"totalRecordCount" => int 171
"scrollId" => string
"c3VwZXJ0ZW5hbnRjc21fMTU0NzUzMjU1MjI0N18yXzE1NTExOTg5MjQ3MTk" (length=59)
"data" =>
array (size=100) -- Holds the actual CDR results
0 =>
array (size=48)
...
1 =>
array (size=48)
...
See https://8x8gateway-voanalytics.apigee.io/api for full details on the API results
*/
$return = array();
$return["success"] = true;
//check for required
if (!array_key_exists("pbxId",$config["voa"])){
$return["success"] = false;
$return["error"][] = "pbxId is missing";
}
if (!array_key_exists("startTime",$config["voa"])){
$return["success"] = false;
$return["error"][] = "startTime is missing";
}
if (!array_key_exists("endTime",$config["voa"])){
$return["success"] = false;
$return["error"][] = "endTime is missing";
}
if (!array_key_exists("timeZone",$config["voa"])){
$return["success"] = false;
$return["error"][] = "timeZone is missing";
}
if (!array_key_exists("pageSize",$config["voa"])){
$return["success"] = false;
$return["error"][] = "pageSize is missing";
}
if($return["success"] == true){
$getArray = array();
//Required Parameters
$getArray[] = "pbxId=".strtolower($config["voa"]["pbxId"]);
$getArray[] = "startTime=".$config["voa"]["startTime"];
$getArray[] = "endTime=".$config["voa"]["endTime"];
$getArray[] = "pageSize=".$config["voa"]["pageSize"];
//Optional Parameters
if (array_key_exists("isSimplified",$config["voa"])){
$getArray[] = "isSimplified=".$config["voa"]["isSimplified"];
}
if (array_key_exists("scrollId",$config["voa"])){
$getArray[] = "scrollId=".$config["voa"]["scrollId"];
}
if (array_key_exists("timeZone",$config["voa"])){
$getArray[] = "timeZone=".$config["voa"]["timeZone"];
}
//array to string
$getString = implode("&", $getArray);
//set up cURL
$url =
"https://8x8gateway-voanalytics.apigee.io/call-detail-records/".$config["voa"]["version"]."/cdr?".$getString;
$header = [
"Authorization: Bearer ".$config["voa"]["access_token"],
"8x8-apikey: ".$config["voa"]["8x8-apikey"]
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,30);
curl_setopt($ch, CURLOPT_TIMEOUT, 400); //timeout in seconds
curl_setopt($ch, CURLOPT_VERBOSE, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
//custom header data
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
//execute curl
$data = curl_exec($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); //get status code
$curl_errno = curl_errno($ch);
$curl_error = curl_error($ch);
curl_close($ch);
//convert to Array
$cdrArray = json_decode($data, true);
if($cdrArray["status"] < 300){
$return["results"] = $cdrArray;
}else{
echo " there was an issue";
$return["success"] = false;
$return["error"][] = "Message: ".$cdrArray["message"];
$return["error"][] = "Code: ".$cdrArray["code"];
$return["error"][] = "Status: ".$cdrArray["status"];
if (array_key_exists("debug",$config["voa"]) && $config["voa"]["debug"] ==
true){
$return["results"] = $cdrArray;
}
}
}
//show debug if requested
if (array_key_exists("debug",$config["voa"]) && $config["voa"]["debug"] == true){
debug($config["voa"], __LINE__ ." Config|VOA: ");
debug($url, __LINE__ ." URL: ");
debug($header, __LINE__ ." header: ");
debug($status_code, __LINE__ ." status_code: ");
debug($curl_errno, __LINE__ ." curl_errno: ");
debug($curl_error, __LINE__ ." curl_error: ");
debug($return, __LINE__ ." Results: ");
}
return $return;
}
function getlra($id){
/*
convert id to The last redirect address type
*/
$lraArray = array();
$lraArray[0] = "None";
$lraArray[1] = "VO Extension";
$lraArray[2] = "External Telephone";
$lraArray[3] = "Ring Group";
$lraArray[4] = "Call Queue";
$lraArray[5] = "Virtual Extension";
$lraArray[6] = "Media Service";
$lraArray[7] = "Park Extension";
return $lraArray[$id];
}
//Set Configuration variables
$config["voa"]["debug"] = false;
$config["voa"]["8x8-apikey"] = "AKzAn1gWP2z79AQFunrMS7z3SXpQ3b0t";
$config["voa"]["username"] = "davidm@maxonic.com";
$config["voa"]["password"] = "Remydog@20";
$config["voa"]["pbxId"] = "maxonicinc363";
$config["voa"]["version"] = "v1";
$config["voa"]["isSimplified"] = "false";
$config["voa"]["startTime"] = date("Y-m-01%2000:00:00", strtotime("first day of previous
month"));
$config["voa"]["endTime"] = date("Y-m-t%2023:59:59", strtotime("last day of previous
month"));
$config["voa"]["timeZone"] = "America/New_York";
$config["voa"]["pageSize"] = "100";
//Get Required Token
$token = GetToken($config);
if($token["success"] == true){ //got token
//add token to $config
$config["voa"]["access_token"] = $token["results"]["access_token"];
//get CDR Data
$cdr = GetCDR($config);
if($cdr["success"] == true){ // got cdr
echo "Process CDR Data<br/>";
print_r($cdr);
}else{
echo "There was an error getting CDR<br/>";
print_r($cdr);
}
}else{
echo "There was an error getting Token<br/>";
print_r($token);
}
?>