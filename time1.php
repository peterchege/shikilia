<?php


/*

the idea :

enter checkin time -> a
enter checkout time -> b

first you calculate the time , then you go to step 2 

indicate time recorded in minutes 

enter weight of item in kgs ->c
enter price charge for the first 60 min ->d
enter price charge per minute -> e

the formula :

 (((b-a)-60)(c*e))+ (d) = total amount to pay


 example to test with 
 
 CHECKIN TIME : 10:00 AM
 CHECKOUT TIME  12:00 PM
 ITEM - LAPTOP - WEIGHT = 1KGS
 PRICE CHARGED FOR THE 1ST 60 MIN (1 HR) = 50 BOB
 PRICE CHARGED PER ITEM PER MINUTE = 1 BOB PER MINUTE 
 
 
 calculation 
 
 step 1 :
 
 find the diffrence of time in minutes 
 
 12:00 -10:00 = 2 hours = 120 minutes 
 
 
 
 step 2 
 indicate weight of item  - 1 kgs 
 
 step 3
 indicate charge for the 1st hour  of the item - 50 bob

 step 4 
 indicate charge  per item per minute - 1 bob per minute 
 
 
 total amount to pay = 
 
 (120 - 60) + (1 * 1) + (50) =  111  ksh amount to pay
 
 
 

*/


// getting started 


//get time diffrence 

function differenceInHours($startdate,$enddate){
	$starttimestamp = strtotime($startdate);
	$endtimestamp = strtotime($enddate);
	$difference = abs($endtimestamp - $starttimestamp)/60;   // to hours , do 3600
	//$value = 60;
	return $difference;
	
	 
}
if(!empty($_POST["submit"])) {
	$hours_difference = differenceInHours($_POST["startdate"],$_POST["enddate"]);

	$total =$hours_difference - 60;
	
	echo "Time duration" . $hours_difference . " minutes";
	
	//echo "Duration, if you include  " . $total . " minutes";
}
?>
<html>
<head>
<style>
#frmDate {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
#frmDate div{margin-bottom: 15px}
#frmDate div label{margin-left: 5px}
.demoInputBox{padding:10px; border:#F0F0F0 1px solid; border-radius:4px;background-color:#FFF;width:50%;}
.btnAction{background-color:#2FC332;border:0;padding:10px 40px;color:#FFF;border:#F0F0F0 1px solid; border-radius:4px;}
</style>
</head>
<body>
<form id="frmDate" action="" method="post">
<div>
<label style="padding-top:20px;">Start Date</label><br/>
<input type="text" name="startdate" value="<?php if(!empty($_POST["startdate"])) { echo $_POST["startdate"]; } ?>" class="demoInputBox">
</div>
<div>
<label>End Date</label>
<span id="userEmail-info" class="info"></span><br>
<input type="text" name="enddate" value="<?php if(!empty($_POST["startdate"])) { echo $_POST["enddate"]; } ?>" class="demoInputBox">
</div>

 

 


<div>
<input type="submit" name="submit" value="Find Difference" class="btnAction">
</div>
</form>

<form>
    <mark>ENTER DURATION IN MINUTES</mark>  <input type="text" name="b"/><br>
   <mark> ENTER WEIGHT OF LUGGAGE IN KGS<mark> <input type="text" name="c"/><br>
   <mark> ENTER CHARGE FOR THE 1ST 60MINUTES (1HR)<mark> <input type="text" name="d"/><br>
	<mark>ENTER CHARGE OF STORAGE PER MINUTE:<mark> <input type="text" name="e"/><br>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['b']) && isset($_GET['c']) && isset($_GET['d']) && isset($_GET['e']) ) {
	$b = intval($_GET['b']);
    $c = intval($_GET['c']); 
    $d= intval($_GET['d']);
	$e = intval($_GET['e']);
	
	$time =  $b - 60;
    $total = $c * $e;
	$Finaltotal = $total + $time + $d;
	 
	  
	 echo "The total amount to pay is  " . $Finaltotal . " KSH";
 
}
 
?>
 
</body>
</html>
