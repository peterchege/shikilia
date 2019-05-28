<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ITEM DETAIL</title>
<link href="css/item2.css" rel="stylesheet" type="text/css">
</head>

<body>
<form>
		<h1>ITEM DETAILS</h1>
		<select class="service" name="service" required>
			<option class="pace" value="select" disabled ="disabled" selected="selected">SELECT CATEGORY</option> 
			<option class="pace"  value="electronics">ELECTRONICS</option>
			<option class="pace"  value="parcel">PARCELS</option>
			<option class="pace"  value="food">FOOD STUFF</option>
			<option class="pace"  value="wares">WARES</option>
												
		</select>
		
		<select class="service" name="service" required>
			<option class="pace" value="select" disabled ="disabled" selected="selected">SELECT DESCRIPTION</option> 
			<option value="Radio/music system">Radio/music system</option>
			<option value="Telvision">Telvision</option>
			<option value="Laptop">Laptop</option>
			<option value="Refrigerator">Refrigerator</option>
			<option value="fan">Fan</option>
			<option value="Tablets">Tablets</option>
			<option value="Ipad">Ipad</option>
			<option value="cooker">cooker</option>
												
		</select>
		
		<select class="service" name="service" required>
			<option class="pace" value="select" disabled ="disabled" selected="selected">SELECT WIEGHT</option> 
			<option value="upto 5kg">upto 5kg</option>
			<option value="5 to 15kg">5 to 15kg</option>
			<option value="15 to 25kg">15 to 25kg</option>
			<option value="above 25kg">above 25kg</option>
												
		</select>
		
		<select class="service" name="service" required>
			<option class="pace" value="select" disabled ="disabled" selected="selected">PERIOD/DURATION</option> 
			<option value="Hours">Hours</option>
			<option value="Days">Days</option>
			<option value="Weeks">Weeks</option>
			<option value="Months">Months</option>
												
		</select>
		
		<input class="type" type="date" name="date" required>
		<input type="time" name="time" required>
		<select class="service" name="service" required>
			<option class="pace" value="select" disabled ="disabled" selected="selected">STATE</option> 
			<option value="FRAGILE">FRAGILE</option>
			<option value="NONE-FRAGILE">NONE-FRAGILE</option>
			
												
		</select>
		
		<input type="text" name="barcode" placeholder="BARCODE" required>
		<a href="Storagehtml.html"><input id="btn" type="button" name="submit" value="ENTER"></a>
	</form>
<img src="images/supply chain soln.jpg" width="400" height="240" alt=""/>

</body>
</html>
