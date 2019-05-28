<?php
//require '.php';
 require_once 'script/pdocrud.php'; 
?>

  
 <?php
 
 
 //code to display list of luggages recorded in the system 
 
 
 $pdocrud = new PDOCrud();
  
 $pdocrud->setSettings("addbtn", false);
 $pdocrud->setSettings("actionbtn", false);
 $pdocrud->setSettings("editbtn", false);
 $pdocrud->setSettings("viewbtn", false);
 $pdocrud->setSettings("delbtn", false); 
 $pdocrud->setSettings("checkboxCol", false);
 $pdocrud->setSettings("deleteMultipleBtn", false);
 $pdocrud->crudTableCol(array("first_name","last_name","id_number","barcode","description","category","checkin_time","checkin_date","checkout_time","checkout_date","amount_paid","payment_status","checkout_status"));
 $pdocrud->tableHeading("List of luggages recorded in our database:");
 $pdocrud->dbOrderBy("id desc");

  
  //payment status
$action = array("1"=>"0","0"=>"1");//action to be performed, like when value is 1 set it to 0
$text = array("1" => "not paid","0"=>"paid");
$pdocrud->enqueueActions($action,"switch",$text,"payment_status",array());


echo $pdocrud->dbTable("customers")->render();
?>

 


 BARCODE NUMBER GENERATED IS :
 <?php
//this is the code to create barcodes 

function random_code($limit)
{
    return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
}
 
echo random_code(8);

?>

<?php
//code to check in customer's luggage


$pdocrud = new PDOCrud();

 //creating the multistep form
$pdocrud->FormSteps(array("first_name","last_name","id_number"), "Client Info");
$pdocrud->FormSteps(array("description","category","barcode","weight_quantity","state"), "Luggage info");
$pdocrud->FormSteps(array("checkin_time","checkin_date"), "checkin info");
$pdocrud->FormSteps(array("amount_paid","payment_status"), "payment info");
  
 
//add categories  dropdown ( rename 2 and 3 to categories. copy/paste 2 and 3 to add more..dont touch wares)

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
 
 
 
 //placing placeholders 
 //to add a placeholder , copy/paste a placeholder and edit it to your desire

$pdocrud->fieldAttributes("id_number", array("placeholder"=>"Enter national id number of customer")); 
$pdocrud->fieldAttributes("barcode", array("placeholder"=>"Imput barcode name")); 
$pdocrud->fieldAttributes("first_name", array("placeholder"=>"First name of customer")); 
$pdocrud->fieldAttributes("last_name", array("placeholder"=>"Last name of customer")); 
$pdocrud->fieldAttributes("category", array("placeholder"=>"Indicate category of the luggage")); 
$pdocrud->fieldAttributes("id_number", array("placeholder"=>"Enter national id number of customer")); 
$pdocrud->fieldAttributes("barcode", array("placeholder"=>"Enter barcode number")); 
$pdocrud->fieldAttributes("checkin_time", array("placeholder"=>"Indicate checkin time")); 
$pdocrud->fieldAttributes("checkin_date", array("placeholder"=>"indicate checkin date"));
$pdocrud->fieldAttributes("state", array("placeholder"=>"state of the luggage"));
$pdocrud->fieldAttributes("payment_status", array("placeholder"=>"Select if customer has paid or not paid")); 
$pdocrud->fieldAttributes("weight_quantity", array("placeholder"=>"What is the weight or quantity of the item? ")); 

 

//refreshpage after enter
$pdocrud->formRedirection(" ");
echo $pdocrud->dbTable("customers")->render("insertform" );

?>


<?php
//list of customers and their luggages  who have checked in
 $pdocrud = new PDOCrud();
 
$pdocrud->setSettings("addbtn", false);
$pdocrud->setSettings("editbtn", false);
$pdocrud->setSettings("viewbtn", false);
$pdocrud->setSettings("delbtn", false);
$pdocrud->setSettings("actionbtn", false);
$pdocrud->setSettings("checkboxCol", false);

$pdocrud->tableHeading("List of customers and the luggages checked in");
 
$pdocrud->crudTableCol(array(
"first_name","id_number","phone_number","barcode","description","state","payment_status","checkin_time","checkin_date"));

$pdocrud->dbOrderBy(" checkin_time desc");
$pdocrud->dbOrderBy(" checkin_date desc"); 
echo $pdocrud->dbTable("customers")->render();
?>
 

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

//display results 
$pdocrud->crudTableCol(array("first_name","id_number","barcode","description","checkin_time","checkin_date"));

//hide  unwanted fields
$pdocrud->fieldHideLable("id");
$pdocrud->fieldDataAttr("id", array("style"=>"display:none"));

$pdocrud->fieldHideLable("first_name");
$pdocrud->fieldDataAttr("first_name", array("style"=>"display:none"));

$pdocrud->fieldHideLable("last_name");
$pdocrud->fieldDataAttr("last_name", array("style"=>"display:none"));

$pdocrud->fieldHideLable("phone_number");
$pdocrud->fieldDataAttr("phone_number", array("style"=>"display:none"));

$pdocrud->fieldHideLable("id_number");
$pdocrud->fieldDataAttr("id_number", array("style"=>"display:none"));

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


 //checkout status (if customer has cleared payment)
 $pdocrud->fieldTypes("checkout_status", "select"); 
 $pdocrud->fieldDataBinding("checkout_status", array("cleared" =>"Cleared","not cleared"=>"not cleared"), "", "","array");

//display order 
 $pdocrud->fieldDisplayOrder(array("amount_paid","Payment_status","Checkout_status","checkout_time","checkout_date",));
 
//ordering the list view
$pdocrud->dbOrderBy(" checkin_time desc");
$pdocrud->dbOrderBy(" checkin_date desc");
     
//refreshpage after you enter
$pdocrud->formRedirection(" ");
echo $pdocrud->dbTable("customers")->render("ONEPAGE");
 

?>



<?php
		//checkout list of customers who checked out successfully
 $pdocrud = new PDOCrud();
 
 $pdocrud->setSettings("actionbtn", false);
 $pdocrud->setSettings("addbtn", false);
 $pdocrud->setSettings("editbtn", false);
 $pdocrud->setSettings("viewbtn", false);
 $pdocrud->setSettings("delbtn", false); 
 $pdocrud->setSettings("checkboxCol", false);
 $pdocrud->setSettings("deleteMultipleBtn", false);
 $pdocrud->tableHeading("List of customers that checked out ");
 
$pdocrud->crudTableCol(array(
"first_name",
"id_number",
"phone_number",
"barcode",
"description",
"amount_paid",
"payment_status",
"checkin_time",
"checkin_date",
"checkout_status"));

//display list of customers that checked out successfully (confirm if payment is cleared too)
 $pdocrud->where("checkout_status", "cleared");
 $pdocrud->where("payment_status", "paid");
 
 //sort the list by orders 
$pdocrud->dbOrderBy("checkout_time desc");     
$pdocrud->dbOrderBy("checkout_date desc"); 
    
echo $pdocrud->dbTable("customers")->render();
?>


<?php
		//payment collection record history 
		
 /*$pdocrud = new PDOCrud();
  
 $pdocrud->setSettings("actionbtn", false);
 $pdocrud->setSettings("addbtn", false);
 $pdocrud->setSettings("editbtn", false);
 $pdocrud->setSettings("viewbtn", false);
 $pdocrud->setSettings("delbtn", false); 
 $pdocrud->setSettings("checkboxCol", false);
 $pdocrud->setSettings("deleteMultipleBtn", false);
 $pdocrud->crudRemoveCol(array("id"));
 $pdocrud->tableHeading("Payment collection history ");
 
 $pdocrud->dbOrderBy("id desc"); 
  $pdocrud->dbOrderBy("checkout_date desc");

//lets order the payment history by (daily, weekly,monthly ,yearly)  
// money gets calculated after the customer checks out successfully and pays 

$pdocrud->addDateRangeReport("This Year", "calendar_year", "checkout_date");
$pdocrud->addDateRangeReport("This Month", "calendar_month", "checkout_date");
$pdocrud->addDateRangeReport("Last 365 days", "year", "checkout_date");
$pdocrud->addDateRangeReport("Last 30 days", "month", "checkout_date");
$pdocrud->addDateRangeReport("1 Day", "Last 1 day", "checkout_date");
$pdocrud->addDateRangeReport("Today", "today", "checkout_date");
//do the addition (add amount paid column )
$pdocrud->colSumTotal("amount_paid");

//show wanted fields
 $pdocrud->crudTableCol
 (array(
 "first_name","id_number","phone_number","barcode","description","checkin_date","checkout_date",
 "amount_paid","payment_status","checkout_status"));
 
 echo $pdocrud->dbTable("customers")->render();
 */
?>


 <?php
//create a unique search bar 

$pdocrud = new PDOCrud();
$pdocrud->setSettings("actionBtnPosition", "left");;
//create search fields options (the admin can do a quick search by barcode,id_number, or phonenumber..)
//PS: ADVICE THE ADMIN TO MAKE USE OF BARCODE FIRST ...THE OTHERS ARE JUST OPTIONAL INCASE BARCODE IKATAE 
$pdocrud->addFilter("barcodeFilter", "barcode", "barcode", "text");
$pdocrud->setFilterSource("barcodeFilter", "", "", "", "");

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
 $pdocrud->setSettings("delbtn", True); 
 $pdocrud->setSettings("checkboxCol", false);
 $pdocrud->setSettings("deleteMultipleBtn", false);
 
 $pdocrud->tableHeading("Quick Search for luggages.(use buttons on action column to navigate.) ");
 
 //display wanted fields
 $pdocrud->crudTableCol(array("first_name","id_number","phone_number","barcode","description","state","payment_status","checkin_time","checkin_date"));
 
echo $pdocrud->dbTable("customers")->render();

?>

 
                        <?php
 
 
 //code to display list of luggages recorded in the system 
 
 
 $pdocrud = new PDOCrud();
  
$pdocrud->crudTableCol(array("product_image","shelf_number","status"));
$pdocrud->setPortfolioColumn(6);// set no. of columns in one row. Possible values are 1,2,3,4,6
$pdocrud->recordsPerPage(12);
$pdocrud->setSettings("actionbtn", false); 
//action type switch - on click on column, value will be changed and saved ( empty or booked)
$action = array("1"=>"0","0"=>"1");//action to be performed, like when value is 1 set it to 0
$text = array("1" => "booked","0"=>"empty");
$pdocrud->enqueueActions($action,"switch",$text,"status",array());
//$pdocrud->where("status","empty");
 $pdocrud->tableHeading("Shelves available:");

 //view image and set the desirable image size --on grid view--
$pdocrud->tableColFormatting("Product_image", "image",array("width" =>"50px","height"=>'50px'));

//view image and set desirable image size after clicking on view more
//$pdocrud->viewColFormatting("Product_image", "image",array("width" =>"300px","height"=>'300px'));

//code for uploading pictures
$pdocrud->fieldDesc("Product_image", "  Upload image of the product you want to sell or want to request ");
$pdocrud->fieldTypes("Product_image", "image");

//hide id
$pdocrud->fieldHideLable("id");
$pdocrud->fieldDataAttr("id", array("style"=>"display:none"));

//polish up 
 
$pdocrud->setSettings("printBtn", false);
$pdocrud->setSettings("pdfBtn", false);
$pdocrud->setSettings("csvBtn", false);
$pdocrud->setSettings("excelBtn", false);
//$pdocrud->setSettings("addbtn", false);
//$pdocrud->setSettings("editbtn", false);
$pdocrud->setSettings("viewbtn", false);
//$pdocrud->setSettings("delbtn", false);
$pdocrud->setSettings("searchbox", false);
$pdocrud->setSettings("deleteMultipleBtn", false);

//set status 
 //state of shelf
 $pdocrud->fieldTypes("status", "select"); 
 $pdocrud->fieldDataBinding("status", array
 (
 "empty" =>"empty",
 "booked"=>"booked"), "", "","array"); 
						
//looks & skin 
//five css (default, dark, fair,green ,advanced and pure ) are present. By default, default.css is applied.

$pdocrud->setSkin("bluish"); 

  
$pdocrud->addPlugin("bootstrap-fileinput-master");//to add plugin          
$pdocrud->fieldTypes("product_image", "image");//change field type
//$pdocrud->formFields(array("product_name","product_price","product_image"));
//echo $pdocrud->dbTable("producttable")->render("insertform");
echo $pdocrud->loadPluginJsCode("bootstrap-fileinput-master","input[type=file]");



echo $pdocrud->dbTable("shelf")->render();
?>

 
 

 
 