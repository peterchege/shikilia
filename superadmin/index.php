<?php
/*
 * Tutorial: PHP Login Registration system
 *
 * Page index.php
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
            header("Location: profile.php"); // Redirect user to the profile.php
        }
        else
        {
            $login_error_message = 'Invalid login details!';
        }
    }
}
?>

 <!DOCTYPE html>
<html>
  <head>
    <title>Murang'a county PMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                <h1><a href="home.php"><font color="orange"><b>Murang'a county PMS SUPER ADMIN panel.</b></font></a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
				
				<div class="alert alert-info" role="alert">   <strong>CURRENT FINANCIAL YEAR : </strong> 
				<strong><?php 
				
				if (date('m') > 6) {
    $year = date('Y')."/".(date('Y') +1);
}
else {
    $year = (date('Y')-1)."/".date('Y');
}
echo $year;  

?></strong>  

</div>
				
				
			        <div class="box">
			            <div class="content-wrap">
						
						<a href="../public/index.php">CLOSE AND GO BACK TO HOME PAGE </a>
			                <h6>Log In </h6>
			                <div class="social">
	                            
	                            <div class="division">
	                                <hr class="left">
	                                
	                                <hr class="right">
	                            </div>
	                        </div>
	                       
						   
						        <?php
            if ($login_error_message != "") {
                echo '<div class="alert alert-danger"><strong>Error: </strong> ' . $login_error_message . '</div>';
            }
            ?>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label for="">Username/Email</label>
                    <input type="text" name="username" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="btnLogin" class="btn btn-primary" value="Login"/>
                </div>
				
            </form>
			<div class="alert alert-info" role="alert">Contact PROJECT DEVELOPER  for password reset if you forgot password.</div> 
	 
	 
			                </div>                
			            </div>
			        </div>

			       
			    </div>
			</div>
		</div>
	</div>



  
  </body>
</html>