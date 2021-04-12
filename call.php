<?php
$json = file_get_contents("https://8x8gateway-voanalytics.apigee.io/call-detail-records/AKzAn1gWP2z79AQFunrMS7z3SXpQ3b0t/");

 $data=json_decode($json);
 echo $json;
?>