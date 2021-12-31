<?php include 'controller/baseurlconfig.php'; ?>
<?php session_start();
include 'controller/connection.php';
include 'controller/baseurlconfig.php';

if($_SESSION['ad_username'] == "" || !isset($_SESSION['ad_username'])) 
{
	header("Location:".$baseurl."admin_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		rel="stylesheet"> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
  				<li class="nav-item active">
  					<a class="nav-link " href="<?php echo $baseurl; ?>index.php">Home</a>
  				</li>
  				<li class="nav-item active">
  					<a class="nav-link " href="#">About NBU</a>
  				</li>
  				<li class="nav-item active">
  					<a class="nav-link " href="#">Change Password</a>
  				</li> 
  				<li class="nav-item active" >
  					<a class="nav-link" href="#">Log Out</a>
  				</li>    

  			</ul>
  		</div>
  	</div>
  </nav>

  <!-- Navbar End -->
  <!-- card start -->
  <div class="container col-sm" style="padding: 12.5%">

  	<div class="card-deck">
  		<div class="card bg-light">
  			<div class="card-body  rounded-lg border border-success shadow p-4 ">
  				<p class="card-text text-success text-center font-weight-bolder ">Student Zone</p>
  				<ul class="list-unstyled text-dark">
  					<li>• <a class="text-dark" href="<?php echo $baseurl;?>admin_search_stud.php">MCA / MSc.Computer sc.</a></li>
  					<li>• <a class="text-dark" href="<?php echo $baseurl;?>admin_stud_applicant_pending.php">Pending Applicant</a></li>

  				</ul>
  			</div>
  		</div>
  		<div class="card bg-light">
  			<div class="card-body text-center rounded-lg border border-info  shadow p-4">
  				<p class="card-text text-primary font-weight-bolder">Alumini Zone</p>
  			</div>
  		</div>
  	</div>
  </div>
  <!-- card end -->			

<!-- Footer -->
<footer class="page-footer font-small bg-dark">

	<!-- Copyright -->
	<div class="footer-copyright text-center py-3 text-white">© 2021 Copyright:

	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>