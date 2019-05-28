<?php
//require '.php';
 require_once 'script/pdocrud.php'; 
?>
 
 
 <?php
 $pdocrud = new PDOCrud();
$pdocrud->crudTableCol(array("shelf_number","status"));
$pdocrud->setPortfolioColumn(4);// set no. of columns in one row. Possible values are 1,2,3,4,6
$pdocrud->recordsPerPage(12);
//$pdocrud->tableColFormatting("product_image", "image");
$pdocrud->setSettings("actionbtn", false);//hide action buttons (view/delete/edit) if not required


//action type switch - on click on column, value will be changed and saved
$action = array("1"=>"0","0"=>"1");//action to be performed, like when value is 1 set it to 0
$text = array("1" => "empty","0"=>"booked");
$pdocrud->enqueueActions($action,"switch",$text,"status",array());

//$pdocrud->where("status","empty");

echo $pdocrud->dbTable("shelf")->render();

?>

 <?php
//code to check in customer's luggage


$pdocrud = new PDOCrud();

 //creating the multistep form
$pdocrud->FormSteps(array("first_name","last_name","id_number","phone_number"), "Client Info");
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

//refreshpage after enter
$pdocrud->formRedirection(" ");
echo $pdocrud->dbTable("customers")->render("insertform" );

?>   
 

<?php
 
//test 1 grid
$pdocrud1 = new PDOCrud();
$pdocrud1->crudTableCol(array("shelf_number","status"));
$pdocrud1->setPortfolioColumn(4);// set no. of columns in one row. Possible values are 1,2,3,4,6
$pdocrud1->recordsPerPage(12);
//$pdocrud->tableColFormatting("product_image", "image");
$pdocrud1->setSettings("actionbtn", false);//hide action buttons (view/delete/edit) if not required


//action type switch - on click on column, value will be changed and saved
$action = array("1"=>"0","0"=>"1");//action to be performed, like when value is 1 set it to 0
$text = array("1" => "empty","0"=>"booked");
$pdocrud1->enqueueActions($action,"switch",$text,"status",array());

//$pdocrud->where("status","empty");

echo $pdocrud1->dbTable("shelf")->render();

 










$pdocrud2 = new PDOCrud(true);
echo $pdocrud2->dbTable("customers")->render();

			 
           
		   