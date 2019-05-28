<?php
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
                                <a href="javascript:history.back()" class="btn btn-primary">GO BACK</a>
                            </li>
                            <li>
                                <a href="logout.php" class="btn btn-danger">LOGOUT</a>
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
 <div class="panel panel-heading">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <center> <mark> <strong> QUICK MENU LINKS </strong> </mark> (to display or hide menu, click here) </center>
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
       
	   
	   <nav class="navbar navbar-inverse">
  <div class="container-fluid ">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="2.php">Checkin luggage <span class="sr-only"> </span> <i class="fa fa-plus-circle" aria-hidden="true"></i> </a></li>
	  
	  <li class="dropdown" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> options <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="13.php"> Make a correction in (check in) </a></li>
            <li><a href="14.php">Delete an entry  in (check-in) </a></li> 
 <li role="separator" class="divider"></li>
 <li><a href="15.php"> Make a correction  in(check out) </a></li>
  <li><a href="16.php">Delete an entry  in  (check-out) </a></li> 
          </ul>
        </li>
		
        <li><a href="4.php">checkout luggage<i class="fa fa-shopping-cart" aria-hidden="true"></i></a> </li>
		<li><a href="7.php">print receipts <i class="fa fa-print" aria-hidden="true"></i></a></li>
	
		<li><a href="12.php">search/scan <i class="fa fa-search" aria-hidden="true"></i></a></li>
		
		<li><a href="17.php">view available shelves <i class="fa fa-gift" aria-hidden="true"></i></a></li>
		  
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
		
		<li><a href="logout.php">logout <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
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
                     BE CAREFUL WHEN PERFORMING THIS: ONCE YOU DELETE, ITS GONE FOREVER .    
                    <?php
//list of customers and their luggages  who have checked in
 $pdocrud = new PDOCrud();
$pdocrud->setSettings("actionBtnPosition", "left");;
$pdocrud->setSettings("addbtn", false);
$pdocrud->setSettings("editbtn", false);
$pdocrud->setSettings("viewbtn", false);
$pdocrud->setSettings("delbtn", True);
$pdocrud->setSettings("checkboxCol", false);

$pdocrud->tableHeading("Delete customer and the luggage  checked in . BE VERY CAREFUL ");
 
$pdocrud->crudTableCol(array(
"first_name","id_number","phone_number","barcode", "shelf_number","description","category","state","payment_status","checkin_time","checkin_date","estimated_checkout_time"));

//non editable fields
 
$pdocrud->fieldHideLable("id");
$pdocrud->fieldDataAttr("id", array("style"=>"display:none"));
 
$pdocrud->fieldHideLable("fingerprint");
$pdocrud->fieldDataAttr("fingerprint", array("style"=>"display:none"));
 
$pdocrud->fieldHideLable("checkout_time");
$pdocrud->fieldDataAttr("checkout_time", array("style"=>"display:none"));

$pdocrud->fieldHideLable("checkout_date");
$pdocrud->fieldDataAttr("checkout_date", array("style"=>"display:none"));

$pdocrud->fieldHideLable("checkout_status");
$pdocrud->fieldDataAttr("checkout_status", array("style"=>"display:none"));
 

$pdocrud->fieldHideLable("weight_quantity");
$pdocrud->fieldDataAttr("weight_quantity", array("style"=>"display:none"));


//dropdowns


 $pdocrud->fieldTypes("category", "select"); 
 $pdocrud->fieldDataBinding("category", array
 (
 "electronics" =>"electronics",
 "2" =>"2",
 "3" =>"3",
 "electronics" =>"electronics",
 "wares"=>"wares"), "", "","array"); 
 
 
 //state of luggage dropdown
 $pdocrud->fieldTypes("state", "select"); 
 $pdocrud->fieldDataBinding("state", array
 (
 "fragile" =>"fragile",
 "not fragile"=>"not fragile"), "", "","array"); 
 
 
 //payment status
 $pdocrud->fieldTypes("payment_status", "select"); 
 $pdocrud->fieldDataBinding("payment_status", array
 (
 "paid" =>"paid",
 "not paid"=>"not paid"), "", "","array"); 
 
  
  


//thumbs up/down
 $pdocrud->tableColFormatting("payment_status", "replace",array("paid" =>"<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> paid"));
 $pdocrud->tableColFormatting("payment_status", "replace",array("not paid" =>"<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>not paid"));
 
//$pdocrud->tableColFormatting("checkout_status", "replace",array("cleared" =>"<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> cleared "));
//$pdocrud->tableColFormatting("checkout_status", "replace",array("not cleared" =>"<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>not cleared "));

						
 //looks & skin 
//five css (default, dark, fair,green ,advanced and pure ) are present. By default, default.css is applied.

$pdocrud->setSkin("bluish");
 
$pdocrud->dbOrderBy(" id desc");
//$pdocrud->dbOrderBy(" checkin_time desc");
//$pdocrud->dbOrderBy(" checkin_date desc"); 
echo $pdocrud->dbTable("customers")->render();
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