
<?php
 
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
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN_ACCOUNT</title>
<link href="css/copy.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/plugins.css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">

<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

<script defer src="../originals/fontawesome-free-5.0.9/svg-with-js/js/fontawesome-all.js"></script>

</head>

<body>
  <div class="container">
    <img id="pic" src="Images/daphie.png" width="250" height="250" alt=""/>
  
    <p1>WELCOME BACK</p1>
    <h4>  <?php echo $user->name ?> </h4><br>
    <hr>
  
    <div class="wrd">

    <h1>Quick links :</h1>   
    <a href="registration.php"><p><i class="fas fa-user-plus"></i> Add a new worker</p></a> 
  <a href="../1.php"><p><i class="fa fa-print" aria-hidden="true"></i> List all luggages</p></a>
  <a href="../2.php"><p> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add a luggage</p></a>
  <a href="../13.php"><p> <i class="far fa-edit"></i> Edit a luggage</p></a>
  <a href="../14.php"><p> <i class="fas fa-trash-alt"></i> Delet a luggage</p></a>
  <a href="../20.php"><p> <i class="fas fa-credit-card"></i> Check credit note</p></a>
  <a href="../logoutsuccess.html"><p><i class="fas fa-sign-out-alt"></i> Logout</p></a>
   
  
     
  </div>
    <div class="menu">
    
    <h2>MENU ACESS</h2>
    
     <a href="registration.php">
          <div class="img">
            <img src=".." alt="">
            <i class="fas fa-user-plus"></i>
              <p> CREATE ACCOUNTS </p>
          </div> 
      </a>

       <a href="../18.php">
          <div class="img">
            <img src=".." alt="">
            <i class="fas fa-user-circle"></i>
              <p> EMPLOYEES ACCOUNTS </p>
          </div> 
      </a>
      
      <a href="../3.php"> 
         <div class="img">
            <img src=".." alt="">
            <i class="fas fa-clipboard-check"></i>
              <p> CHECK IN </p>
          </div> 
      </a>
        
      <a href="../5.php">  
         <div class="img">
            <img src=".." alt="">
            <i class="fas fa-sign-in-alt"></i>
              <p> CHECK OUT </p>
          </div> 
      </a>

        <a href="../7.php"> 
           <div class="img">
            <img src=".." alt="">
            <i class="fas fa-search"></i>
              <p> SEARCH FOR ITEMS </p>
          </div> 
        </a>

        <a href="../6.php">  
          <div class="img">
            <img src=".." alt="">
            <i class="fas fa-hand-holding-usd"></i>
              <p> PAYMENT DATABASE </p>
          </div> 
        </a>
        
        <a href="../8.php"> 
           <div class="img">
            <img src=".." alt="">
            <i class="fas fa-money-bill-alt"></i>
              <p> PAID<br> CUSTOMERS  </p>
          </div> 
        </a>
        
        <a href="../9.php"> 
           <div class="img">
            <img src=".." alt="">
            <i class="fas fa-user-times"></i>
              <p> UNPAID CUSTOMERS </p>
          </div> 
        </a>
        
        <a href="../17.php">  
           <div class="img">
            <img src=".." alt="">
            <i class="fas fa-th-large"></i>
              <p> SHELVES </p>
          </div> 
        </a>
        
        <a href="../1.php"> 
           <div class="img">
            <img src=".." alt="">
            <i class="fas fa-users"></i>
              <p> CUSTOMER DATABASE </p>
          </div> 
        </a>
        
    
    
     
     </div>
     
     </div>
</body>
</html>
