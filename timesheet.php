
<?php
 session_start();
   if(!isset($_SESSION['email']))
   {
	header("Location: Employee.php");   
   }
if(isset($_POST['submit'])){
	 $month = $_POST['month'];
	 $year = $_POST['year'];
	 $one = $_POST['1'];
	 $two = $_POST['2'];
	 $three = $_POST['3'];
	 $four = $_POST['4'];
	 $five = $_POST['5'];
	 $six = $_POST['6'];
	 $seven = $_POST['7'];
	 $eight = $_POST['8'];
	 $nine = $_POST['9'];
	 $ten = $_POST['10'];
	 $eleven = $_POST['11'];
	 $tweleve = $_POST['12'];
	 $thirteen = $_POST['13'];
	 $fourteen = $_POST['14'];
	 $fifteen = $_POST['15'];
	 $sixteen = $_POST['16'];
	 $seventeen = $_POST['17'];
	 $eighteen = $_POST['18'];
	 $ninteen = $_POST['19'];
	 $twenty = $_POST['20'];
	 $twentyone = $_POST['21'];
	 $twentytwo = $_POST['22'];
	 $twentythree = $_POST['23'];
	 $twentyfour = $_POST['24'];
	 $twentyfive = $_POST['25'];
	 $twentysix = $_POST['26'];
	 $twentyseven = $_POST['27'];
	 $twentyeight = $_POST['28'];
	 $twentynine = $_POST['29'];
	 $thirty = $_POST['30'];
	 $thirtyone = $_POST['31'];
	 intval($year);
	 $newyear=$year-2000;
	 intval($newyear);
	 $evenyear=($newyear-1)/4;
	 intval($evenyear);
	 $evenyear=floor($evenyear);
	
	 $oddyear=($newyear-$evenyear-1);
	 
	 $totalodd=$oddyear+(2*$evenyear);
	 echo $totalodd;
	 if($year%4!=0)
	 {
		 if($month=="january"){
			 $monthodd=0;
		 }
		 elseif($month=="feburary"){
			$monthodd=3; 
		 }
		 elseif($month=="march"){
			$monthodd=3; 
		 }
		 elseif($month=="april"){
			$monthodd=6; 
		 }
		 elseif($month=="may"){
			$monthodd=1; 
		 }
		 elseif($month=="june"){
			$monthodd=4; 
		 }
		 elseif($month=="july"){
			$monthodd=6; 
		 }
		 elseif($month=="august"){
			$monthodd=2; 
		 }
		 elseif($month=="september"){
			$monthodd=5; 
		 }
		 elseif($month=="october"){
			$monthodd=0; 
		 }
		 elseif($month=="novemeber"){
			$monthodd=3; 
		 }
		 elseif($month=="december"){
			$monthodd=5; 
		 }
		 
	 }
	 elseif($year%4==0)
	 {
		 if($month=="january"){
			 $monthodd=0;
		 }
		 elseif($month=="feburary"){
			$monthodd=3; 
		 }
		 elseif($month=="march"){
			$monthodd=4; 
		 }
		 elseif($month=="april"){
			$monthodd=0; 
		 }
		 elseif($month=="may"){
			$monthodd=2; 
		 }
		 elseif($month=="june"){
			$monthodd=5; 
		 }
		 elseif($month=="july"){
			$monthodd=0; 
		 }
		 elseif($month=="august"){
			$monthodd=3; 
		 }
		 elseif($month=="september"){
			$monthodd=6; 
		 }
		 elseif($month=="october"){
			$monthodd=1; 
		 }
		 elseif($month=="novemeber"){
			$monthodd=4; 
		 }
		 elseif($month=="december"){
			$monthodd=6; 
		 }
		 
	 }
	 $totalodd1=($totalodd+$monthodd+1)%7;
	 echo $totalodd1;
	 $toEmail = 'nishant@maxonic.com';
     $from ='nishant@maxonic';
     $fromName =$from;
     $emailSubject = 'Timesheet for '.$month.' '.$year;
	 
	 if($totalodd1==0 &&($month=="january" OR $month=="march" OR $month=="may"OR $month=="july" OR $month=="august" OR $month=="october" OR $month=="december"))
	 { 
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">31</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirtyone.'</td>
		</tr>
		</table>'; 
	 }
	 elseif($totalodd1==0 &&($month=="april" OR $month=="june" OR $month=="september"OR $month=="november"))
	 {
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
		
		</tr>
		</table>'; 
	 }
	elseif($totalodd1==0 && $month=="feburary" && ($year%4)!=0)
		 {
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		</tr>
		</table>'; 	 
		 }
		 elseif($totalodd1==0 && $month=="feburary" && ($year%4)==0)
		 {
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		</tr>
		</table>'; 	 
		 }
	 	 elseif($totalodd1==1 &&($month=="january" OR $month=="march" OR $month=="may"OR $month=="july" OR $month=="august" OR $month=="october" OR $month=="december"))
	 { 
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
        
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">31</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirtyone.'</td>
		</tr>
		</table>'; 
	 }
	  elseif($totalodd1==1 &&($month=="april" OR $month=="june" OR $month=="september"OR $month=="november"))
	 {
			$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>

		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
		
		</tr>
		</table>'; 
	 }
	 	elseif($totalodd1==1 && $month=="feburary" && ($year%4)!=0)
		 {
			 			$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>	
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>	
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>	
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>	
		</tr>
		</table>'; 	 
		 }
		 elseif($totalodd1==1 && $month=="feburary" && ($year%4)==0)
		 {
			 			$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>	
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>	
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>	
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		</tr>
		</table>'; 	 
		 }
		
	  elseif($totalodd1==2 &&($month=="january" OR $month=="march" OR $month=="may"OR $month=="july" OR $month=="august" OR $month=="october" OR $month=="december"))
	 { 
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		
        
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
	
		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>

		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		
		
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">31</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirtyone.'</td>
		</tr>
		</table>'; 
	 }
	 	  elseif($totalodd1==2 &&($month=="april" OR $month=="june" OR $month=="september"OR $month=="november"))
	 {
			$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		
        
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
	
		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>

		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>		
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>
	
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
	
		</tr>
		</table>'; 
	 }
	  elseif($totalodd1==2 && $month=="feburary" && ($year%4)!=0)
	  {
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		
        
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
	
		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>

		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		
		
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		
		</tr>
		</table>';   
	  }
	  	  elseif($totalodd1==2 && $month=="feburary" && ($year%4)==0)
	  {
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		
        
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
	
		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>

		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		
		
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		</tr>
		</table>';   
	  }
	 
	 	  elseif($totalodd1==3 &&($month=="january" OR $month=="march" OR $month=="may"OR $month=="july" OR $month=="august" OR $month=="october" OR $month=="december"))
	 { 
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		</tr>
		<tr>
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">31</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirtyone.'</td>
		</tr>
		</table>'; 
	 }
	 elseif($totalodd1==3 &&($month=="april" OR $month=="june" OR $month=="september"OR $month=="november"))
	 {
			$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
				<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		</tr>
		<tr>
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>	
		</tr>
	
		</table>'; 
	 }
	 elseif($totalodd1==3 && $month=="feburary" && ($year%4)!=0)
	 {
		 		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
				<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		</tr>
		<tr>
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>

		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
			
		</tr>
	
		</table>'; 
	 }
	  elseif($totalodd1==3 && $month=="feburary" && ($year%4)==0)
	 {
		 		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left; " ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
				<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		</tr>
		<tr>
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		</tr>
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		
		</tr>
	
		</table>'; 
	 }
		 	  elseif($totalodd1==4 &&($month=="january" OR $month=="march" OR $month=="may"OR $month=="july" OR $month=="august" OR $month=="october" OR $month=="december"))
	 { 
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">31</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirtyone.'</td>
		</tr>
		</table>'; 
	 } 
	 	 elseif($totalodd1==4 &&($month=="april" OR $month=="june" OR $month=="september"OR $month=="november"))
	 {
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
	
		</tr>
		</table>'; 
	 }
	  elseif($totalodd1==4 && $month=="feburary" && ($year%4)!=0)
	 {
		 $htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
	
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>

	
		</tr>
		</table>'; 
	 }
	  elseif($totalodd1==4 && $month=="feburary" && ($year%4)==0)
	 {
		 $htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
	
		</tr>
		</table>';
	 }
	 		 	  elseif($totalodd1==5 &&($month=="january" OR $month=="march" OR $month=="may"OR $month=="july" OR $month=="august" OR $month=="october" OR $month=="december"))
	 { 
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>	
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>	
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
		
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">31</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirtyone.'</td>
		</tr>
		</table>'; 
	 } 
	 	 	 elseif($totalodd1==5 &&($month=="april" OR $month=="june" OR $month=="september"OR $month=="november"))
	 {
	$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>	
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>	
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>	
		</tr>
		
		</table>'; 	
	 }
	  elseif($totalodd1==5 && $month=="feburary" && ($year%4)!=0)
	 {
		 $htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>	
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>	
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>

		
		
		</table>'; 
	 }
	  elseif($totalodd1==5 && $month=="feburary" && ($year%4)==0)
	 {
	$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
			<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>		
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>	
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>	
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>
			
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>
		</tr>
		
		</table>'; 	 
	 }
	   elseif($totalodd1==6 &&($month=="january" OR $month=="march" OR $month=="may"OR $month=="july" OR $month=="august" OR $month=="october" OR $month=="december"))
	 { 
		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>	
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>	
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>	
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>	
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>	
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">31</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirtyone.'</td>
		</tr>
		</table>'; 
	 } 
	 elseif($totalodd1==6 &&($month=="april" OR $month=="june" OR $month=="september"OR $month=="november"))
	 {
				$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>	
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>	
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>	
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>	
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>	
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">30</th>	
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirty.'</td>
		</tr>
		</table>';  
	 }
	  elseif($totalodd1==6 && $month=="feburary" && ($year%4)!=0)
	 {
		 		$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>	
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>	
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>	
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>	
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>

		</tr>
		
		</table>'; 
	 }
	  elseif($totalodd1==6 && $month=="feburary" && ($year%4)==0)
	 {
		 	$htmlContent ='<h3>Please find Timesheet below.</h3><br> 
		<table style="width:100% 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;" ><tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SUN</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">MON</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">TUE</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">WED</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">THU</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">FRI</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">SAT</th>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">1</th>		
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;"></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$one.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">2</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">3</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">4</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">5</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">6</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">7</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">8</th>
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$two.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$three.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$four.'</td>   
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$five.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$six.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eight.'</td>	
		</tr>
			<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">9</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">10</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">11</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">12</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">13</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">14</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">15</th>	
		</tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$nine.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ten.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eleven.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$tweleve.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$thirteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fourteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$fifteen.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">16</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">17</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">18</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">19</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">20</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">21</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">22</th>	
		</tr>
		</tr>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$sixteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$seventeen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$eighteen.'</td>	
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$ninteen.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twenty.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyone.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentytwo.'</td>
		</tr>
		<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">23</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">24</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">25</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">26</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">27</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">28</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">29</th>	
		</tr>
		<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentythree.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfour.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyfive.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentysix.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyseven.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentyeight.'</td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;text-align: left;">'.$twentynine.'</td>	
		</tr>
		
		</table>'; 
	 }
	    $headers = "From: $fromName"." <".$from.">";

                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail,$emailSubject, $htmlContent, $headers); 
                
                if($mail){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                    header("Location: Employee_welcome.php");  
              
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                }
            
	 
}
?>
