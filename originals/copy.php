
<?php
 /*
// Start Session
session_start();

// check user login
if(empty($_SESSION['user_id']))
{
    header("Location: admin_account.php");//on successfull login
}

// Database connection
require __DIR__ . '/database.php';
$db = DB();

// Application library ( with DemoLib class )
require __DIR__ . '/lib/library.php';
$app = new DemoLib();

$register_error_message = '';

 

// check Register request
if (!empty($_POST['btnRegister'])) {
    if ($_POST['name'] == "") {
        $register_error_message = 'Name field is required!';
    } else if ($_POST['email'] == "") {
        $register_error_message = 'Email field is required!';
    } else if ($_POST['username'] == "") {
        $register_error_message = 'Username field is required!';
    } else if ($_POST['password'] == "") {
        $register_error_message = 'Password field is required!';
    } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $register_error_message = 'Invalid email address!';
    } else if ($app->isEmail($_POST['email'])) {
        $register_error_message = 'Email is already in use!';
    } else if ($app->isUsername($_POST['username'])) {
        $register_error_message = 'Username is already in use!';
    }  
}



$user = $app->UserDetails($_SESSION['user_id']); // get user details
 */
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN_ACCOUNT</title>
<link href="css/copy.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/plugins.css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
    <img id="pic" src="Images/daphie.png" width="250" height="250" alt=""/>
  
    <p1>WELCOME BACK</p1>
   	<h4> JOHN<!-- <?php echo $user->name ?> --></h4><br>
   	<hr>
	
   	<div class="wrd">

    <h1>Quick links :</h1>   
   	<a href="registration.php"><p><i class="fa fa-plus-circle" aria-hidden="true"></i> Add a new worker</p></a> 
	<a href="../1.php"><p><i class="fa fa-print" aria-hidden="true"></i> List all luggages</p></a>
	<a href="../2.php"><p> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add a luggage</p></a>
  <a href="../13.php"><p> <i class="fa fa-plus-circle" aria-hidden="true"></i> Edit a luggage</p></a>
  <a href="../14.php"><p> <i class="fa fa-plus-circle" aria-hidden="true"></i> Delet a luggage</p></a>
	<a href="../20.php"><p> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Check credit note</p></a>
  <a href="../index.php"><p><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</p></a>
	 
	
   	 
	</div>
   	<div class="menu">
   	
   	<h2>MENU ACESS</h2>
    
	   <a href="registration.php">
          <div class="img">
            <img src=".." alt="">
              <p> CREATE ACCOUNTS </p>
          </div> 
      </a>

       <a href="../18.php">
          <div class="img">
            <img src=".." alt="">
              <p> EMPLOYEES ACCOUNTS </p>
          </div> 
      </a>
      
      <a href="../3.php"> 
         <div class="img">
            <img src=".." alt="">
              <p> CHECK IN </p>
          </div> 
      </a>
      	
      <a href="../5.php">  
         <div class="img">
            <img src=".." alt="">
              <p> CHECK OUT </p>
          </div> 
      </a>

      	<a href="../7.php"> 
           <div class="img">
            <img src=".." alt="">
              <p> SEARCH FOR ITEMS </p>
          </div> 
        </a>

        <a href="../6.php">  
          <div class="img">
            <img src=".." alt="">
              <p> PAYMENT DATABASE </p>
          </div> 
        </a>
        
        <a href="../8.php"> 
           <div class="img">
            <img src=".." alt="">
              <p> PAID CUSTOMERS  </p>
          </div> 
        </a>
        
        <a href="../9.php"> 
           <div class="img">
            <img src=".." alt="">
              <p> UNPAID CUSTOMERS </p>
          </div> 
        </a>
        
        <a href="../17.php">  
           <div class="img">
            <img src=".." alt="">
              <p> SHELVES </p>
          </div> 
        </a>
        
        <a href="../1.php"> 
           <div class="img">
            <img src=".." alt="">
              <p> CUSTOMER DATABASE </p>
          </div> 
        </a>
      	
    
    
     
     </div>
     
     </div>
</body>
</html>
