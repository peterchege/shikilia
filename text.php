<html>
<head>
 <title>Barcode</title>
</head>
<body>
<form method="post" action="text.php">
 Type text :<input type="text" name="generate"><br>
 <input type="submit" name="submit" value="submit">
</form>


<?php
include 'barcode128.php';
echo '<center><div style="height: 30%; width: 50%;">';
echo '<p>'.bar128(stripcslashes($_POST['generate'])).'</p>';
echo '</div></center>';
?>


<script type="text/javascript">
 
	function Converttimeformat() {
 
	// var time = $("#starttime").val();
 
	var time = document.getElementById('txttime').value;
 
	var hrs = Number(time.match(/^(\d+)/)[1]);
 
	var mnts = Number(time.match(/:(\d+)/)[1]);
 
	var format = time.match(/\s(.*)$/)[1];
 
	if (format == "PM" && hrs < 12) hrs = hrs + 12;
 
	if (format == "AM" && hrs == 12) hrs = hrs - 12;
 
	var hours =hrs.toString();
 
	var minutes = mnts.toString();
 
	if (hrs < 10) hours = "0" + hours;
 
	if (mnts < 10) minutes = "0" + minutes;
 
	//alert(hours + ":" + minutes);
 
	 
 
	 var date1 = new Date();
 
	date1.setHours(hours );
 
	date1.setMinutes(minutes);
 
	//alert(date1);
 
	 
 
	var time = document.getElementById('txttime1').value;
 
	var hrs = Number(time.match(/^(\d+)/)[1]);
 
	var mnts = Number(time.match(/:(\d+)/)[1]);
 
	var format = time.match(/\s(.*)$/)[1];
 
	if (format == "PM" && hrs < 12) hrs = hrs + 12;
 
	if (format == "AM" && hrs == 12) hrs = hrs - 12;
 
	var hours = hrs.toString();
 
	var minutes = mnts.toString();
 
	if (hrs < 10) hours = "0" + hours;
 
	if (mnts < 10) minutes = "0" + minutes;
 
	//alert(hours+ ":" + minutes);
 
	var date2 = new Date();
 
	date2.setHours(hours );
 
	date2.setMinutes(minutes);
 
	//alert(date2);
 
	 
 
	var diff = date2.getTime() - date1.getTime();
 
	 
 
	var hours = Math.floor(diff / (1000 * 60 * 60));
 
	diff -= hours * (1000 * 60 * 60);
 
	 
 
	var mins = Math.floor(diff / (1000 * 60));
 
	diff -= mins * (1000 * 60);
 
	alert( hours + " hours : " + mins + " minutes : " );
 
	 
 
	}

	</script>
	
</body>
</html>

