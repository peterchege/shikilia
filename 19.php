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
         
                     <!-- Key Features -->
            <section class="site-content site-section"> 
	     <center> LUGGAGE TICKET</center>
</section>

      

            <!-- Features -->
            <section class="site-content site-section">
                <div class="container text-center">
				<img src="img/real.png" width="290" height="142" alt=""/> </div> 
				 <div class="row row-items">
                <div class="col-lg-12">
                      
  <?php
//create a unique search bar 

$pdocrud = new PDOCrud();
$pdocrud->setSettings("actionBtnPosition", "left");;
//create search fields options (the admin can do a quick search by barcode,id_number, or phonenumber..)
//PS: ADVICE THE ADMIN TO MAKE USE OF BARCODE FIRST ...THE OTHERS ARE JUST OPTIONAL INCASE BARCODE IKATAE 
//$pdocrud->addFilter("barcodeFilter", "barcode", "barcode", "text");
//$pdocrud->setFilterSource("barcodeFilter", "", "", "", "");

//remove the comments in the code below if you want to activate search by id number or phone number

//$pdocrud->addFilter("id_numberFilter", "id_number", "id_number", "text");
//$pdocrud->setFilterSource("id_numberFilter", "", "", "", "");
//$pdocrud->addFilter("phone_numberFilter", "phone_number", "phone_number", "text");
//$pdocrud->setFilterSource("phone_numberFilter", "", "", "", "");

//polishing up the code
 $pdocrud->setSettings("actionbtn",True);
 $pdocrud->setSettings("addbtn", false);
 $pdocrud->setSettings("editbtn", True);
 $pdocrud->setSettings("viewbtn", True);
 $pdocrud->setSettings("delbtn", false); 
 $pdocrud->setSettings("checkboxCol", false);
 $pdocrud->setSettings("deleteMultipleBtn", false);
 
 $pdocrud->tableHeading("GENERATE TICKET.(use buttons on action column to navigate.) ");
 
// $pdocrud->fieldAttributes("barcode", array("placeholder"=>"search using barcode ")); 
 
 //display wanted fields ... add/remove whatever code you want from here 
 $pdocrud->crudTableCol(array(
 "first_name",
 "id_number",
 "phone_number",
 "barcode",
 "description",
 "shelf_number",
 "state",
 "payment_status",
 "checkin_time",
 "checkin_date"));
 
 //"checkout_time",
 //"checkout_date"));
 
 //thumbs up/down
 
$pdocrud->tableColFormatting("payment_status", "replace",array("paid" =>"<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> paid"));
$pdocrud->tableColFormatting("payment_status", "replace",array("not paid" =>"<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>not paid"));
 
//$pdocrud->tableColFormatting("checkout_status", "replace",array("cleared" =>"<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i> cleared "));
//$pdocrud->tableColFormatting("checkout_status", "replace",array("not cleared" =>"<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>not cleared "));
						
//looks & skin 
//five css (default, dark, fair,green ,advanced and pure ) are present. By default, default.css is applied.

$pdocrud->setSkin("bluish");						
 
echo $pdocrud->dbTable("customers")->render();

?>
		   
                    </div>
                    
                    <div class="row row-items">

           <!-- END Features -->
 <div class="col-md-8">
    <a type="button" class="btn btn-primary" href="http://localhost/shikilia/originals/index.php">EXIT</a>

                
                        </div>
            
					</div>
                    
                </div>


            </section>
 

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