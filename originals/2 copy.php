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
	   
		
        <li><a href="4.php">checkout luggage<i class="fa fa-shopping-cart" aria-hidden="true"></i></a> </li>
		<li><a href="7.php">print receipts <i class="fa fa-print" aria-hidden="true"></i></a></li>
	
		<li><a href="12.php">search/scan <i class="fa fa-search" aria-hidden="true"></i></a></li>
		
		<li><a href="17.php">view available shelves <i class="fa fa-gift" aria-hidden="true"></i></a></li>
		  
 
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
			
			<div class="row">
  <div class="col-md-8"> 
  <center> <mark>		
			
 NEW BARCODE NUMBER GENERATED IS :
 <?php
//this is the code to create barcodes 

function random_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}
 
echo random_code(8);

?>
  <br>
 
 <?php
date_default_timezone_set("Africa/Nairobi");
echo "Barcode created on" . date(" d/m/Y  -  h:i:sa");
?>

</mark> </center>

  </div>
  <div class="col-md-4">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Click here to view List of Available shelf</button>
</div>
</div>

	
</section>
            <!-- END Key Features -->

            <!-- Features -->
            <section class="site-content site-section ">
                <div class="container trial text-center">
                     
					
					<div class="row">
  <div class="col-md-8 field"> 
 <?php
//code to check in customer's luggage


$pdocrud = new PDOCrud();

 //creating the multistep form
$pdocrud->FormSteps(array("first_name","last_name","id_number","phone_number"), "Client Info");
$pdocrud->FormSteps(array("description","category","barcode","weight_quantity","state"), "Luggage info");
$pdocrud->FormSteps(array("shelf_number","checkin_time","checkin_date"), "checkin info");
$pdocrud->FormSteps(array("estimated_checkout_time","amount_paid","payment_status"), "payment info");
  
 
//add categories  dropdown ( rename 2 and 3 to categories. copy/paste 2 and 3 to add more..dont touch wares)

 $pdocrud->fieldTypes("category", "select"); 
 $pdocrud->fieldDataBinding("category", array
 (
 "electronics" =>"electronics",
 "general item" =>"general item",
 "parcel" =>"parcel",
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
 
  
 $pdocrud->tableColFormatting("payment_status", "replace",array("paid" =>"<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> paid"));
 $pdocrud->tableColFormatting("payment_status", "replace",array("not paid" =>"<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>not paid"));
 
$pdocrud->tableColFormatting("checkout_status", "replace",array("cleared" =>"<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> cleared "));
$pdocrud->tableColFormatting("checkout_status", "replace",array("not cleared" =>"<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>not cleared "));
 
 
 
 //placing placeholders 
 //to add a placeholder , copy/paste a placeholder and edit it to your desire

$pdocrud->fieldAttributes("id_number", array("placeholder"=>"Enter national id number of customer")); 
$pdocrud->fieldAttributes("barcode", array("placeholder"=>"Imput barcode name")); 
$pdocrud->fieldAttributes("first_name", array("placeholder"=>"First name of customer")); 
$pdocrud->fieldAttributes("last_name", array("placeholder"=>"Last name of customer")); 
$pdocrud->fieldAttributes("category", array("placeholder"=>"Indicate category of the luggage")); 
$pdocrud->fieldAttributes("id_number", array("placeholder"=>"Enter national id number of customer")); 
$pdocrud->fieldAttributes("barcode", array("placeholder"=>"Enter barcode number generated above")); 
$pdocrud->fieldAttributes("checkin_time", array("placeholder"=>"Indicate checkin time")); 
$pdocrud->fieldAttributes("checkin_date", array("placeholder"=>"indicate checkin date"));
$pdocrud->fieldAttributes("state", array("placeholder"=>"state of the luggage"));
$pdocrud->fieldAttributes("payment_status", array("placeholder"=>"Select if customer has paid or not paid")); 
$pdocrud->fieldAttributes("weight_quantity", array("placeholder"=>"What is the weight or quantity of the item? ")); 
$pdocrud->fieldAttributes("description", array("placeholder"=>"name and description of the item? ")); 
$pdocrud->fieldAttributes("phone_number", array("placeholder"=>"enter customer phonenumber ")); 
$pdocrud->fieldAttributes("shelf_number", array("placeholder"=>"ASSIGN EMPTY SHELF NUMBER.CONFIRM FROM SHELF LIST   ")); 
$pdocrud->fieldAttributes("estimated_checkout_time", array("placeholder"=>"What is the estimated time the customer will come to pick up the luggage? example 2 hours  ")); 

//refreshpage after enter
$pdocrud->formRedirection("originals/successfull.php");
echo $pdocrud->dbTable("customers")->render("insertform" );

?>   
                     
           
		   


  </div>
  <div class="col-md-4">  
 
  <?php
  
 /*
$pdocrud->crudTableCol(array("shelf_number","status"));
$pdocrud->setPortfolioColumn(4);// set no. of columns in one row. Possible values are 1,2,3,4,6
$pdocrud->recordsPerPage(12);
$pdocrud->setSettings("actionbtn", false); 
//action type switch - on click on column, value will be changed and saved ( empty or booked)
$action = array("1"=>"0","0"=>"1");//action to be performed, like when value is 1 set it to 0
$text = array("1" => "empty","0"=>"booked");
$pdocrud->enqueueActions($action,"switch",$text,"status",array());
$pdocrud->where("status","empty");
 $pdocrud->tableHeading("Shelves available:");
//polish up 

$pdocrud->setSettings("printBtn", false);
$pdocrud->setSettings("pdfBtn", false);
$pdocrud->setSettings("csvBtn", false);
$pdocrud->setSettings("excelBtn", false);
$pdocrud->setSettings("addbtn", false);
$pdocrud->setSettings("editbtn", false);
$pdocrud->setSettings("viewbtn", false);
$pdocrud->setSettings("delbtn", false);
$pdocrud->setSettings("searchbox", false);
$pdocrud->setSettings("deleteMultipleBtn", false);

echo $pdocrud->dbTable("shelf")->render();
*/
?>
  </div>
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

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
            <?php
 
  
 
 
$pdocrud = new PDOCrud();
//basic pdocrud settings

 
//removing add button--- 
 $pdocrud->setSettings("addbtn", false);
 $pdocrud->setSettings("editbtn", false);
$pdocrud->setSettings("viewbtn", false);
$pdocrud->setSettings("delbtn", false);

//remove the print button 
$pdocrud->setSettings("numberCol", false);
$pdocrud->setSettings("printBtn", false);
$pdocrud->setSettings("pdfBtn", false);
$pdocrud->setSettings("csvBtn", false);
$pdocrud->setSettings("excelBtn", false);;



$pdocrud->fieldHideLable("id");
$pdocrud->fieldDataAttr("id", array("style"=>"display:none"));


// Change  heading
 $pdocrud->tableHeading("EMPTY Shelf space available:  (To assign a shelf space,click the empty name) ");
// Change   subheading
$pdocrud->tableSubHeading(" you can use the search button for a quick search.");

//indicate fields you want to be displayed
$pdocrud->crudTableCol(array("Product_image","id","shelf_number","status"));

// set no. of columns in one row. Possible values are 1,2,3,4,6 -- setting grids to be seen ---
$pdocrud->setPortfolioColumn(4);

//set number of items to see so that one can go to the next page
$pdocrud->recordsPerPage(12);

//setting dropdowns for statuses
 
$pdocrud->setSettings("actionbtn", false); 
//action type switch - on click on column, value will be changed and saved ( empty or booked)
$action = array("1"=>"0","0"=>"1");//action to be performed, like when value is 1 set it to 0
$text = array("1" => "booked","0"=>"empty");
$pdocrud->enqueueActions($action,"switch",$text,"status",array());


//view image and set the desirable image size --on grid view--
$pdocrud->tableColFormatting("Product_image", "image",array("width" =>"200px","height"=>'200px'));
//view image and set desirable image size after clicking on view more
$pdocrud->viewColFormatting("Product_image", "image",array("width" =>"300px","height"=>'300px'));

//code for uploading pictures
$pdocrud->fieldDesc("Product_image", "  Upload image of the shelf description ");
$pdocrud->fieldTypes("Product_image", "image");

$pdocrud->addPlugin("bootstrap-fileinput-master");//to add plugin          
$pdocrud->fieldTypes("product_image", "image");//change field type
 
echo $pdocrud->loadPluginJsCode("bootstrap-fileinput-master","input[type=file]");



 //set status 
 //state of shelf
 $pdocrud->fieldTypes("status", "select"); 
 $pdocrud->fieldDataBinding("status", array
 (
 "empty" =>"empty",
 "booked"=>"booked"), "", "","array");
            
//remove the print button 
$pdocrud->setSettings("numberCol", false);
$pdocrud->setSettings("printBtn", false);
$pdocrud->setSettings("pdfBtn", false);
$pdocrud->setSettings("csvBtn", false);
$pdocrud->setSettings("excelBtn", false);        
   
//search operator -- enable people to search by keywords ---
$pdocrud->setSearchOperator ("like");

//setting conditions ---  (you can either say empty or booked)
$pdocrud->where("status","0");
  
 
//call the table that contains the information
echo $pdocrud->dbTable("shelf")->render();
 
?>
    </div>
  </div>
</div>