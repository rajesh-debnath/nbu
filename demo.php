<?php include 'controller/baseurlconfig.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>University of North Bengal</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
		rel="stylesheet"> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://kit.fontawesome.com/67c66657c7.js"></script>
	</head>
	<body>
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
   <!-- navbar end -->
   <!-- slider start -->
   <div id="demo" class="carousel slide " data-ride="carousel">
   	<ul class="carousel-indicators">
   		<li data-target="#demo" data-slide-to="0" class="active"></li>
   		<li data-target="#demo" data-slide-to="1"></li>
   		<li data-target="#demo" data-slide-to="2"></li>
   	</ul>
   	<div class="carousel-inner">
   		<div class="carousel-item active">
   			<img src="<?php echo $baseurl; ?>website_pic\nbu6.jpg" alt="Nbu" width="100%" height="360px">
   			<div class="carousel-caption">
   				<h3 class="text-dark"></h3>

   			</div>   
   		</div>
   		<div class="carousel-item">
   			<img src="<?php echo $baseurl; ?>website_pic\nbu7.jpg" alt="nbu" width="100%" height="360px">
   			<div class="carousel-caption">
   				<h3 class="text-dark"></h3>

   			</div>   
   		</div>
   		<div class="carousel-item">
   			<img src="<?php echo $baseurl; ?>website_pic\nbu8.jpg" alt="unbu" width="100%" height="360px">
   			<div class="carousel-caption">
   				<h3 class="text-dark"></h3>

   			</div>   
   		</div>
   	</div>
   	<a class="carousel-control-prev" href="#demo" data-slide="prev">
   		<span class="carousel-control-prev-icon"></span>
   	</a>
   	<a class="carousel-control-next" href="#demo" data-slide="next">
   		<span class="carousel-control-next-icon"></span>
   	</a>
   </div>
   <!-- slider end-->

   <div class="container">
   	<div class="card-columns m-4">
   		<div class="card rounded-lg border border-success bg-light shadow p-4 mb-4 bg-white">
   			<div class="card-body text-center">
   				<p class="card-text  text-success font-weight-bolder">Student Zone</p>
   				<a href="<?php echo $baseurl; ?>stud_login.php">
   					<button type="button" class="btn btn-outline-success mx-3 ">Log in</button></a>
   					<a href="<?php echo $baseurl; ?>stud_applicant.php">
   						<button type="button" class="btn btn-outline-success mx-3">Register</button></a>
   					</div>
   				</div>
   				<div class="card rounded-lg border border-info bg-light shadow p-4 mb-4 bg-white ">
   					<div class="card-body text-center ">
   						<p class="card-text  text-primary font-weight-bolder">Alumini Zone</p>
   						<button type="button" class="btn btn-outline-info mx-3 ">Log in</button>
   						<button type="button" class="btn btn-outline-info mx-3">Register</button>
   					</div>
   				</div>

   				<div class="card card rounded-lg border border-danger bg-light shadow p-4 mb-4 bg-white">
   					<div class="card-body text-center">
   						<p class="card-text  text-danger font-weight-bolder">Admin Zone</p>
   						<a href="<?php echo $baseurl; ?>admin_login.php">
   							<button type="button" class="btn btn-outline-danger ">Log in</button></a>

   						</div>
   					</div>
   				</div>
   			</div>
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