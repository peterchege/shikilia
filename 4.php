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

		<script src="dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
<link rel="stylesheet" type="text/css" href="dist/animate.css">

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr.min.js"></script>
    </head>
    <body>
	
	<script>
	swal({
  title: 'HELP INFO!',
  text: 'To checkout a customer,\n 1.Search for the customer checking out \n 2. Click the action icon \n 3. fill in the fields on the left \n 4.click the offload shelf and select the booked shelf to empty \n 5. Click save \n 6. CLICK OK TO CLOSE ',
  timer: 6000,
  onOpen: () => {
    swal.showLoading()
  }
}).then((result) => {
  if (
    // Read more about handling dismissals
    result.dismiss === swal.DismissReason.timer
  ) {
    console.log('I was closed by the timer')
  }
})

</script>
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
     

            <!--   (original) change this to whatever you like  (starts at line 184 , ends at line 384-->
            <section class="site-content site-section"> 
	  
 	<div class="row">
  <div class="col-md-7">
<a href="#" onclick="$('#myModal').modal({'backdrop': 'static'});"
  class="btn btn-danger">CHECK OUT CALCULATOR </a>
  </div>

  <div class="col-md-5">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Click here to Offload shelf</button>

  </div>
  <div class="col-md-1">
    
  </div>

  <div class="col-md-11">
  <?php
             
//check out code for the client  

 $pdocrud = new PDOCrud();
 
 $pdocrud->setSettings("actionBtnPosition", "left");;
 $pdocrud->setSettings("editbtn", True);
 $pdocrud->setSettings("viewbtn", false);
 $pdocrud->setSettings("delbtn", false);
 $pdocrud->setSettings("deleteMultipleBtn", false);
 $pdocrud->setSettings("checkboxCol", false);
 $pdocrud->tableHeading("Check in verification.(Hold action button to clear a customer)");
 
 //payment status (if customer has cleared payment)
 $pdocrud->fieldTypes("payment_status", "select"); 
 $pdocrud->fieldDataBinding("payment_status", array("paid" =>"paid","not paid"=>"not paid"), "", "","array");

 //checkout status (if customer has cleared payment)
 $pdocrud->fieldTypes("checkout_status", "select"); 
 $pdocrud->fieldDataBinding("checkout_status", array("cleared" =>"Cleared","not cleared"=>"not cleared"), "", "","array");

//display  wanted fields 
$pdocrud->crudTableCol(array("shelf_number","first_name","id_number","phone_number","others","barcode","description","checkin_time","checkin_date","estimated_checkout_time"));

//hide  unwanted fields
$pdocrud->fieldHideLable("id");
$pdocrud->fieldDataAttr("id", array("style"=>"display:none"));

$pdocrud->fieldHideLable("first_name");
$pdocrud->fieldDataAttr("first_name", array("style"=>"display:none"));

$pdocrud->fieldHideLable("last_name");
$pdocrud->fieldDataAttr("last_name", array("style"=>"display:none"));

//$pdocrud->fieldHideLable("phone_number");
//$pdocrud->fieldDataAttr("phone_number", array("style"=>"display:none"));

$pdocrud->fieldHideLable("id_number");
$pdocrud->fieldDataAttr("id_number", array("style"=>"display:none"));

$pdocrud->fieldHideLable("others");
$pdocrud->fieldDataAttr("others", array("style"=>"display:none"));

$pdocrud->fieldHideLable("fingerprint");
$pdocrud->fieldDataAttr("fingerprint", array("style"=>"display:none"));

$pdocrud->fieldHideLable("category");
$pdocrud->fieldDataAttr("category", array("style"=>"display:none"));

$pdocrud->fieldHideLable("fingerprint");
$pdocrud->fieldDataAttr("fingerprint ", array("style"=>"display:none"));

$pdocrud->fieldHideLable("category");
$pdocrud->fieldDataAttr("category", array("style"=>"display:none"));

$pdocrud->fieldHideLable("description");
$pdocrud->fieldDataAttr("description", array("style"=>"display:none"));

$pdocrud->fieldHideLable("checkin_time");
$pdocrud->fieldDataAttr("checkin_time", array("style"=>"display:none"));

$pdocrud->fieldHideLable("checkin_date");
$pdocrud->fieldDataAttr("checkin_date", array("style"=>"display:none"));

$pdocrud->fieldHideLable("last_name");
$pdocrud->fieldDataAttr("last_name", array("style"=>"display:none"));

$pdocrud->fieldHideLable("barcode");
$pdocrud->fieldDataAttr("barcode", array("style"=>"display:none"));

$pdocrud->fieldHideLable("state");
$pdocrud->fieldDataAttr("state", array("style"=>"display:none"));

$pdocrud->fieldHideLable("weight_quantity");
$pdocrud->fieldDataAttr("weight_quantity", array("style"=>"display:none"));

$pdocrud->fieldHideLable("shelf_number");
$pdocrud->fieldDataAttr("shelf_number", array("style"=>"display:none"));
	  
	  $pdocrud->fieldHideLable("estimated_checkout_time");
$pdocrud->fieldDataAttr("estimated_checkout_time", array("style"=>"display:none"));



 //checkout status (if customer has cleared payment)
 $pdocrud->fieldTypes("checkout_status", "select"); 
 $pdocrud->fieldDataBinding("checkout_status", array("cleared" =>"Cleared","not cleared"=>"not cleared"), "", "","array");

	  //dropdown for credit note status
 $pdocrud->fieldTypes("credit_note_status", "select"); 
 $pdocrud->fieldDataBinding("credit_note_status", array("null" =>"null","customer has credit note"=>"customer has credit note"), "", "","array");
//display order 
 $pdocrud->fieldDisplayOrder(array("amount_paid","Payment_status","Checkout_status","checkout_time","checkout_date",));
 
 //thumbs up/down
  $pdocrud->tableColFormatting("payment_status", "replace",array("paid" =>"<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> paid"));
 $pdocrud->tableColFormatting("payment_status", "replace",array("not paid" =>"<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>not paid"));
 
$pdocrud->tableColFormatting("checkout_status", "replace",array("cleared" =>"<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> cleared "));
$pdocrud->tableColFormatting("checkout_status", "replace",array("not cleared" =>"<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>not cleared "));
 
 
 
//ordering the list view
$pdocrud->dbOrderBy(" checkin_time desc");
$pdocrud->dbOrderBy(" checkin_date desc");

// fields not compulsory to fill 
$pdocrud->fieldNotMandatory("first_name");
$pdocrud->fieldNotMandatory("last_name");
$pdocrud->fieldNotMandatory("phone_number");
$pdocrud->fieldNotMandatory("id_number");
$pdocrud->fieldNotMandatory("fingerprint");
$pdocrud->fieldNotMandatory("category");
$pdocrud->fieldNotMandatory("description");
$pdocrud->fieldNotMandatory("checkin_date");
$pdocrud->fieldNotMandatory("checkout_date");
$pdocrud->fieldNotMandatory("checkin_time");
$pdocrud->fieldNotMandatory("checkout_time");
$pdocrud->fieldNotMandatory("checkout_status");
$pdocrud->fieldNotMandatory("barcode");
$pdocrud->fieldNotMandatory("payment_status");
$pdocrud->fieldNotMandatory("amount_paid");
$pdocrud->fieldNotMandatory("weight_quantity");
 
 //convert to bootstrap 
						
						
$pdocrud->setSkin("bluish");						
						
						
						

//$pdocrud =new PDOCrud(false,"pure","pure");
 //refreshpage after you enter (put js in future upgrade)
$pdocrud->formRedirection("originals/removed.php ");
echo $pdocrud->dbTable("customers")->render("ONEPAGE");
 

?>
</div>
</div>

</section>
            <!-- END Key Features -->

            <!-- section 2  ( stats at line 333 ends at line 343) -->
            <section class="site-content site-section">
                <div class="container  text-center">
                    <div class="row  row-items">
					
           <!-- paste section 1 here  -->         

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
 $pdocrud->tableHeading("Occupied shelf-space.");
// Change   subheading
$pdocrud->tableSubHeading("When checking out a customer, note the shelf number that was used, then click to make it empty:.");

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
$pdocrud->where("status","1");
  
 
//call the table that contains the information
echo $pdocrud->dbTable("shelf")->render();
 
?>

  </div>
  </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">SHIKILIA CALCULATOR</h4>
      </div>
      <div class="modal-body">
    
 <object data=http://localhost/shikilia/chege/ width="500" height="500"> <embed src=http://localhost/shikilia/chege/  width="500" height="500"> </embed> </object>  
    
<button type="button" class="btn btn-primary" data-dismiss="modal">Close calculator</button>    
 
      </div>
      
    </div>
  </div>
</div>
</div>


