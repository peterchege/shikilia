<?php

 
// Start Session
session_start();

// check user login
if(empty($_SESSION['user_id']))
{
    header("Location:originals/admin_account.php");
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
//require '.php';
 require_once 'script/pdocrud.php'; 
?>

<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title> SHIKILIA</title>

        <meta name="description" content="luggage system">
        <meta name="author" content="ken">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr.min.js"></script>
    </head>
    <body>
        <!-- Page Container -->
      
        <!-- 'boxed' class for a boxed layout -->
        <div id="page-container">
            <!-- Site Header -->
            <header>
                <div class="container">
                    <!-- Site Logo -->
                    <a href="index.html" class="site-logo">
                        <i class="gi gi-search"></i> <strong>Luggage </strong> System.
                  </a>
                    <!-- Site Logo -->

                    <!-- Site Navigation -->
                    <nav>
                        <!-- Menu Toggle -->
                        <!-- Toggles menu on small screens -->
                        <a href="javascript:void(0)" class="btn btn-default site-menu-toggle visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- END Menu Toggle -->

                        <!-- Main Menu -->
                        <ul class="site-nav">
                            <!-- Toggles menu on small screens -->
                            <li class="visible-xs visible-sm">
                                <a href="javascript:void(0)" class="site-menu-toggle text-center">
                                    <i class="fa fa-times"></i>
                                </a>
                            </li>
                            <!-- edit the menus venye unadai... you can add/ delete or completly remove -->
                            <li>
                                <a href="# ">menu 1 </a>
                            </li>
                            <li>
                                <a href=" #">2</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-primary">3</a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-success">4</a>
                            </li>
                        </ul>
                        <!-- END Main Menu -->
                    </nav>
                    <!-- END Site Navigation -->
                </div>
            </header>
            <!-- END Site Header -->

            <!-- Intro  edit it to your liking...per page , ju kila page itakua different-->
            <section class="site-section site-section-light site-section-top themed-background-dark">
                <div class="container">
                  <h1 class="text-center animation-slideDown"><em class="fa fa-search"></em> <strong>Luggage Scan.</strong></h1>
                  <h2 class="h3 text-center animation-slideUp">A <strong>Simple</strong> ,<strong>Convinient way </strong> to check in and check out visitors with luggages.</h2>
                </div>
            </section>
            <!-- END Intro -->

			<!-- QUICK MENU STARTS HERE  -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
 <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <center> <mark> <strong> QUICK MENU LINKS </strong> </mark> (to display or hide menu, click here) </center>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
       
	   
	   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="2.php">Checkin luggage <span class="sr-only"> </span></a></li>
	  
	  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> options <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="13.php"> Make a correction in (check in) </a></li>
            <li><a href="14.php">Delete an entry  in (check-in) </a></li> 
 <li role="separator" class="divider"></li>
 <li><a href="15.php"> Make a correction  in(check out) </a></li>
  <li><a href="16.php">Delete an entry  in  (check-out) </a></li> 
          </ul>
        </li>
		
        <li><a href="4.php">checkout luggage</a></li>
		<li><a href="7.php">print receipts</a></li>
	
		<li><a href="12.php">search/scan </a></li>
		
		<li><a href="17.php">view available shelves</a></li>
		  
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> luggage status <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="3.php"> view list of checked in luggages</a></li>
            <li><a href="5.php">view list of checked out luggages</a></li>  
          </ul>
        </li>
		
		
		 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> payment  status <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="8.php"> view  paid luggages</a></li>
            <li><a href="9.php">view unpaid luggages</a></li>
             
          </ul>
        </li>  
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> clearance status <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="10.php"> view list of cleared luggages</a></li>
            <li><a href="11.php">view list of uncleared luggages</a></li>  
          </ul>
        </li>
		
		<li><a href="logout.php">logout </a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    </div>
  </div>
</div>
  <!-- QUICK MENU ENDS HERE  -->   

            <!-- Key Features -->
            <section class="site-content site-section"> 
	 
</section>
            <!-- END Key Features -->

            <!-- Features -->
            <section class="site-content site-section">
                <div class="container text-center">
                    <div class="row row-items">
					<mark> QUICK GUIDE </mark>
                          <br>
						 click on <strong>DELETE </strong> to completly remove the employee on the database.
						 <br>
						 Click on<strong>EDIT </strong> , to change employee details.
						 <br>
to edit employee password,or if an employee forgot password, you have to delete the current employee account then create a new one.
						 
						 <br>
						  
                       <?php
 //code to display list of employees (plus remove or edit) 
$pdocrud = new PDOCrud();

$pdocrud->tableHeading("LIST OF EMPLOYEES ");

 
$pdocrud->fieldHideLable("user_id");
$pdocrud->fieldDataAttr("user_id", array("style"=>"display:none"));
 
$pdocrud->fieldHideLable("password");
$pdocrud->fieldDataAttr("password", array("style"=>"display:none"));
$pdocrud->crudTableCol(array("name","email","username"));

// add additional code below


echo $pdocrud->dbTable("employee")->render();

 
?>
 
 </div>
                    
                    <div class="row row-items"> </div>
                    <hr>
                </div>
            </section>
            <!-- END Features -->
 <div class="col-sm-6 col-md-3">
                               
                         
                        </div>
            

            <!-- Sign Up Action -->            <!-- END Sign Up Action -->

            <!-- Quick Stats -->            <!-- END Quick Stats -->

 
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-up"></i></a>

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
       
         
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>