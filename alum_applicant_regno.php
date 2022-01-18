<?php include 'controller/baseurlconfig.php'; 

$reg=0;
 if (isset($_GET["reg"])) {
 	$reg=$_GET["reg"];
 }
 $msg="";
  if (isset($_GET["error"])) {
 	$msg=$_GET["error"];
 }





?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alumni Regno Verify</title>
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
					<a class="navbar-brand ml-2 " href="#"><img class="d-inline-block align-top" src="<?php echo $baseurl; ?>website_pic\logo.png" alt="logo" width="10%"><span class="ml-5 text-light font-weight-bolder">NBU CSA ZONE</span></a>
     <!--  <input  type="search" placeholder="Search">
     	<span class="fa fa-search"></span> -->
     </header>
   </div>
   <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: rgba(194, 194, 214, 0.8);">
   	<div class="container" >
   		

   		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
   			<span class="navbar-toggler-icon "></span>
   		</button>
   		<div class="collapse navbar-collapse" id="collapsibleNavbar">
   			 <ul class="navbar-nav font-weight-bold ml-auto ">
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo $baseurl; ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="https://www.nbu.ac.in/">About NBU</a>
                </li>   

            </ul>
   		</div>
   	</div>
   </nav>
<!-- Navbar End -->
<center><p class="text-info m-2" name="error"> <?php echo $msg; ?></p></center>
<!--Modal start -->
<div class="modal-dialog modal-dialog-centered text-center modal-lg">
		<div class="col-sm-8 main-section ">
			<div class="modal-content bg-light border-info py-0 px-5 shadow p-4 mb-4">

		<div class="col-12 user_img mt-n5 mb-4" >
			<img src="<?php echo $baseurl; ?>website_pic\alum_logo.png" class="w-25">
		</div>
		<h3 style="font-family: Constantia";>Alumni Registration Check</h3>

	<form action="controller/alum_applicant_inc.php" method="post" class="col-12">

	<div class="form-group mb-4 mt-2">
		<table class="table table-borderless">
			<tr >
				<td class="font-weight-bolder"><label>Registration Number:</label></td>
				<td ><input type="text" name="reg_no" class="form-control pl-5 pr-5" placeholder="Enter Reg. No." value="<?php if ($reg!=0) {echo $reg; } ?>" <?php if ($reg!=0) {echo "readonly"; } ?> ></td>
			</tr>
			<?php
				if ($reg==0) { ?>
			</table>
			</div>	
				<input type="submit" name="check" value="Check" id="stud_btn"class="btn-outline-info rounded w-50">
				<?php }
				else { ?>
			<tr >
				<td class="font-weight-bolder"><label>Password:</label></td>
				<td ><input type="password" name="pwd" class="form-control pl-5" placeholder="Enter Password"></td>
			</tr>
			</table>
		</div>
			<?php } ?>
		
		<?php if ($reg!=0) { ?>
	<input type="submit" name="register" value="Register" id="stud_btn"class="btn-outline-info rounded w-50">
	<?php } ?>
	 
	</form>
		
			<p class="link pt-2 font-weight-bold text-center">Dont't Have register? <a href="<?php echo $baseurl; ?>alum_applicant_regno.php">New User</a></p>
		</div>
	</div>
</div>
<!--Modal End -->
<!-- Footer -->
	<footer class="page-footer font-small bg-dark mb-0">

	  <!-- Copyright -->
	  <div class="footer-copyright text-center py-3 text-white">© 2022 Copyright | All rights reserved.

	  </div>
	  <!-- Copyright -->

	</footer>
	<!-- Footer -->


</body>
</html>

