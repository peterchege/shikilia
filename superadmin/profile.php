<?php
/**
 * Tutorial: PHP Login Registration system
 *
 * Page : Profile
 */

// Start Session
session_start();

// check user login
if(empty($_SESSION['user_id']))
{
    header("Location: index.php");
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




require_once '../script/pdocrud.php';
?>

  <!DOCTYPE html>
<html>
  <head>
    <title>Murang'a county PMS super admin control panel.</title>
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
				 
	                <h1><a href="profile.php"><font color="orange">Welcome :  <b>[ PMS Super-Admin panel.] </b></a>  <a href ="logout.php">LOGOUT </a></font> </h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-6 col-md-offset-4">
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

?></strong>  <a href="logout.php" class="btn btn-danger">Logout</a> 

</div>
				
				
			         
			        </div>

			       
			    </div>
			</div>
			
			<div class="container">
        <div class=" ">
             <br><br><br><br>
            <h3>Welcome  SUPER ADMIN<?php //echo $user->name ?>,</h3>
			
			<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   <strong>If an admin forgets their password,this is what you should do...
   <br>1. Verify them.(confirm if its the actual admin by crosschecking email,username & job identification number.)   
   <br>2. Delete their Previous account then create a new account for them by clicking on (Add a new administrator). 
   <br>3. To access the admin account as a super admin ,create your own account by clicking on Add a new administrator. </strong>
</div>

<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
Contact the Developer For Super administrator password reset. 
</div>

 </div>
    </div>
	
	
	
	
	<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">LIST OF ADMINISTRATORS</a></li>
    <li role="presentation"><a href="../registration/registration.php">ADD A NEW ADMINISTRATOR </a></li>
	 <li role="presentation"><a href="../public/index.php" target = "_blank" >PROJECT MANAGEMENT PORTAL </a></li>
	  <li role="presentation"><a href="../admin/index.php" target = "_blank" >ADMINISTRATOR PORTAL </a></li>
     <li role="presentation"> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
  Take a Virtual tour.
</button></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
	
	<?php
	$pdocrud = new PDOCrud();
	
	$pdocrud->setSettings("addbtn",false);
	 $pdocrud->setSettings("editbtn",false);
                                $pdocrud->setSettings("viewbtn",false);
                                $pdocrud->setSettings("delbtn",True); 
								$pdocrud->setSettings("checkboxCol",false);
								
							    $pdocrud->setSettings("deleteMultipleBtn",false);
							  
                                $pdocrud->crudRemoveCol(array("user_id"));
								
								       
						 $pdocrud->crudTableCol(array("user_id",
						 "name",
						 "email",
						 "username"));
	echo $pdocrud->dbTable("users")->render();
	
	?>
	</div>
     
     
  </div>

</div>


	
	  
		</div>
	</div>



  
  </body>
</html>

 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Pick an option and get started</h4>
      </div>
      <div class="modal-body">
         
		 
		 <a href="../public/index.php" target = "_blank" >Virtual tour of Projects per constituency</a>
		 <br>
		 <a href="../public/index.php" target = "_blank" >Virtual tour of Project outcome and impact.</a>
		 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         
      </div>
    </div>
  </div>
</div>
