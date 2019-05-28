<?php
 
// Start Session
session_start();

// check user login
if(empty($_SESSION['user_id']))
{
    header("Location:employee_login.php");
}

// Database connection
require __DIR__ . '/database.php';
$db = DB();

// Application library ( with DemoLib class )
require __DIR__ . '/lib/library2.php';
$app = new DemoLib();

$register_error_message = '';

 

// check Register request
/*
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

*/

$user = $app->UserDetails($_SESSION['user_id']); // get user details
 
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menu</title>
<link href="css/menu.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div class="container">
	
   	<p>WELCOME BACK</p>
	
   	<h4> <?php echo $user->name ?></h4>
	
	                      <!-- PUT COMPANY LOGO HERE --> 
    <img id="dalp" src="put/company/logo/image/here.png" width="350" height="350" alt=""/>
	
	                           <!-- EMPLOYEE MENU --> 
	
	 
    <a href="../2.php"><img id="book" src="images/book.png" width="170" height="150" alt=""/></a> </div>
    <a href="../7.php"><img id="check" src="images/search.png" width="170" height="150" alt=""/></a>
    <a href="#"><img id="setting" src="images/settings.png" width="170" height="150" alt=""/> </a>
    <a href="../6.php"><img id="history" src="images/history.png" width="170" height="150" alt=""/>  </a> 
    
    <a href="logout.php"><img id="log" src="images/log out.png" width="160" height="150" alt=""/></a> 
    
    
</body>
</html>
