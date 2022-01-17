<?php include 'controller/baseurlconfig.php'; 

 $result="";
 if (isset($_GET["result"])) {
 	if ($_GET["result"] == "applicationtaken") {
 		$result = "*Registered successfully!";
 	}
 }
 else{
 	$msg = " ";
 }
 $msg="";
 if (isset($_GET["error"])) {
 	if ($_GET["error"] == "wronglogin" || $_GET["error"] =="emptyinput") {
 		$msg = "*Wrong Registration no. or Password";
 	}
 }
 else{
 	$msg = " ";
 }





?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "icon" href = "<?php echo $baseurl; ?>website_pic\logo.png" type = "image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	      rel="stylesheet"> -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <style type="text/css">
	  	.main-section{
	  		margin: 0 auto;
	  		margin-top: 130px;
	  		padding: 0;
	  	}
	  

	  </style>
	  	
</head>
<body>
	<!-- navbar start -->

				<div class="wrapper">
			<header class="header">
				<div class="topbar bg-dark">
					<a class="navbar-brand ml-2 " href="#"><img class="d-inline-block align-top" src="<?php echo $baseurl; ?>website_pic\logo.png" alt="logo" width="10%"><span class="ml-5 text-light font-weight-bolder">University of North Bengal</span></a>
     <!--  <input  type="search" placeholder="Search">
     	<span class="fa fa-search"></span> -->
     </header>
   </div>
   <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: rgba(194, 194, 214, 0.8);">
   	<div class="container" >
   		<div class="mr-auto">
   			<input  type="search" placeholder="Search">
   			<button class="btn-sm btn-outline-dark my-sm-0 bg-primary text-light ml-2" type="submit">Search</button>
   		</div>
   		<!-- <span class="fa fa-search"></span> -->

   		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   			<span class="navbar-toggler-icon "></span>
   		</button>
   		<div class="collapse navbar-collapse" id="collapsibleNavbar">
   			 <ul class="navbar-nav font-weight-bold ml-auto ">
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo $baseurl; ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="https://www.nbu.ac.in/abt/about.aspx">About NBU</a>
                </li> 
                <li class="nav-item">
   					<a class="nav-link " href="<?php echo $baseurl; ?>contact.php">Contact Us</a>
   				</li>     

            </ul>
   		</div>
   	</div>
   </nav>
<!-- Navbar End -->
 <center><p class="text-success m-2" name="error"> <?php echo $result; ?></p></center>
<!--Modal start -->
<div class="modal-dialog modal-dialog-centered text-center modal-lg">
		<div class="col-sm-8 main-section ">
			<div class="modal-content bg-light border-success py-0 px-5 shadow p-3 mb-4">

		<div class="col-12 user_img mt-n5 mb-4" >
			<img src="<?php echo $baseurl; ?>website_pic\stud_logo.png" class="w-25">
		</div>
		<h3 style="font-family: Constantia";>Student Login</h3>

	<form action="controller/stud_login.inc.php" method="post" class="col-12">

	<div class="form-group mb-4 mt-2">
		<p class="small text-danger"><?php echo $msg; ?></p>
		<table class="table table-borderless">
			<tr >
				<td class="font-weight-bolder"><label>Registration Number:</label></td>
				<td ><input type="text" name="reg_no" class="form-control pl-5 pr-5" placeholder="Enter Reg. No." ></td>
			</tr>
			<tr >
				<td class="font-weight-bolder"><label>Password:</label></td>
				<td ><input type="password" name="pwd" class="form-control pl-5" placeholder="Enter Password"></td>
			</tr>
		</table>
		</div>
	<input type="submit" name="login" value="Login" id="stud_btn"class="btn-outline-success rounded w-50">
	 
	</form>
		
			<p class="link pt-2 font-weight-bold text-center">Dont't Have register? <a href="<?php echo $baseurl; ?>stud_applicant.php">New User</a></p>
		</div>
	</div>
</div>
<!--Modal End -->
<!-- Footer -->
	<footer class="page-footer font-small bg-dark mb-0">

	  <!-- Copyright -->
	  <div class="footer-copyright text-center py-3 text-white">© 2021 Copyright:

	  </div>
	  <!-- Copyright -->

	</footer>
	<!-- Footer -->


</body>
</html>

