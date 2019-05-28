<?php
/*
 this piece of code  from line number 1 to 67 should appear in both login and signup page, if you want to split the two
 * */

// Start Session
session_start();

// Database connection
require __DIR__ . '/database.php';
$db = DB();

// Application library ( with DemoLib class )
require __DIR__ . '/lib/library.php';
$app = new DemoLib();

$login_error_message = '';
$register_error_message = '';

// check Login request
if (!empty($_POST['btnLogin'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == "") {
        $login_error_message = 'Username field is required!';
    } else if ($password == "") {
        $login_error_message = 'Password field is required!';
    } else {
        $user_id = $app->Login($username, $password); // check user login
        if($user_id > 0)
        {
            $_SESSION['user_id'] = $user_id; // Set Session
            header("Location: admin_account.php"); // Redirect user to the desired page on successful login( )
        }
        else
        {
            $login_error_message = 'Invalid login details!';
        }
    }
}

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
    } else {
        $user_id = $app->Register($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']);
        // set session and redirect user to the profile page
        $_SESSION['user_id'] = $user_id;
        header("Location: Menu.php");//change this to desired page when admin creates account successfully...it could redirect to login page 
    }
}
*/
?><!doctype html>
<html>
<head>
    <!-- making the page responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="css/index 1.css" rel="stylesheet" type="text/css">
</head>

<body>


<div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"> <?php
            if ($login_error_message != "") {
                echo '<div class="alert alert-danger"><strong>Error: </strong> ' . $login_error_message . '</div>';
            }
            ?></div>
  <div class="col-md-4"></div>
</div>



	<div class="background">


   	 <img src="images/Shikiria .png" width="250" height="200" alt=""/>
	  
	   
			
	   
	  <!-- php codes here -->
			 <form action="admin_login.php" method="post">
				<img id="user" src="images/user.png" width="100" height="100" alt=""/>
				<input type="text" name="username" placeholder="USERNAME or email " required><br>
				<img id="pass" src="images/padlock.png" width="100" height="98" alt=""/>
				<input type="password" name="password" placeholder="PASSWORD" required><br>
				<input id="btn" type="submit" name="btnLogin" value="LOGIN"> 
			</form>
	
	</div>
	<img id="symbol" src="images/symbol-22.png" width="500" height="20" alt=""/>
</body>
</html>
