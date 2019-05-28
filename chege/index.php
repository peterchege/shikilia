<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/maino.css">
	<meta name="viewport" content= "width=device-width, initial-scale=1, user-scalable=no">
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body class="text-center">
  <div class="page-header">
  			<h4>Calculator</h4>

  </div>
  	<form class="form-inline" method="GET">
  		<div class="form-group">
  					<label for="name">Item and Weight:</label>
            <select class="form-control" name="operator" required="required">
              	<option disabled="disabled" selected="selected">General Items (Minimum Pay: 2hrs)</option>
	              <option name= "first" value="25">upto 3kg (rate: ksh. 25 per hour)</option>
	              <option value="50">3-15kg</option>
	              <option value="75">15-25kg</option>
	              <option value="100">Above 25kg</option>
								<option value="" disabled="disabled"></option>

								<option value="" disabled="disabled">Electronics (Payable time: 1hr)</option>
								<option value="100">upto 5kg (rate: ksh. 100 per hour)</option>
								<option value="150">5-10kg (rate: ksh. 150 per hour)</option>
								<option value="200">10-25kg (rate: ksh. 200 per hour)</option>
								<option value="250">Above 25kg (rate: ksh. 250 per hour)</option>
								<option value="" disabled="disabled"></option>

								<option value="" disabled="disabled">Space </option>
								<option value="120">2 hrs (ksh. 120)</option>
								<option value="" disabled="disabled"></option>

								<option value="" disabled="disabled">Fridge (per shelf)</option>
								<option value="60">ksh. 60 per hour</option>

            </select>
  				</div>
					<div>
						<?php
						if (isset($_GET['submit']) or (isset($_POST['co']))){
							$in = strtotime($_GET['ci']);
							$out = strtotime($_GET['co']);
							$diff= $out - $in;
							$checkout = $diff/(60*60);
							$result1 = $_GET['operator'];
						}

						 ?>
					<div class="form-group">
						<label for= "name">Check in date:</label>
						<input class="form-control" type="datetime-local" name="ci" required="required" value="<?= ((isset($_GET['ci']))? $_GET['ci']:'');?>">

						<br>
					<div class="form-group">
						<label for= "name">Check out date:</label>
						<input class="form-control" type="datetime-local" name="co" required="required" value="<?= ((isset($_GET['ci']))? $_GET['co']:'');?>">

					</div>
				</div>
<hr>
					<label for= "name">Time difference:</label> <?= ((isset($_GET['ci']))? $checkout."Hours" :''); ?><br>
					<label for= "name">Total cost: </label> <?= ((isset($_GET['ci']))? 'Ksh.' . $checkout*$result1:''); ?><hr>
					<button class="btn btn-success" name="submit" value="submit" type="submit">Submit</button>
					<?=((isset($_GET['co']))?'<button class="btn btn-primary" name="refresh" >Refresh</button>':'');?>
				</form>


  				<!-- <div class="form-group">
  					<label for="name">Time(hrs):</label>
  					<input type="text" class="form-control" name="time" required="required" value="<?= ((isset($_GET['time']))?$_GET['time']:''); ?>">
            		<input type="hidden" name="hide">
  				</div> -->

          <!-- <button class="btn btn-success" name="submit" value="submit" type="submit">Submit</button>
          <?=((isset($_GET['hide']))?'<button class="btn btn-primary" name="refresh" >Refresh</button>':'');?>
          <hr>
          <label for="name">Total cost comes to: </label>

            <?php
	            if(isset($_GET['submit'])){
	              $result1 = $_GET['operator'];
	              $result2 = $_GET['time'];
	              echo "Sh. ".$result1*$result2;
	            }
	            else{
	              echo "Please enter values";
	            }

	            if(isset($_GET['refresh'])){
	              header('Location: index.php');
	            }
            ?>

  			</form>-->
			</body>
			</html>
