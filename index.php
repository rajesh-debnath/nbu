	<?php include 'controller/baseurlconfig.php'; ?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>University of North Bengal</title>
		<link rel = "icon" href = "<?php echo $baseurl; ?>website_pic\logo.png" type = "image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	      rel="stylesheet"> -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="https://kit.fontawesome.com/67c66657c7.js"></script>
	  <style>
	  .card{
	  	overflow: hidden;
	  }
	  .card-body {
	  	
	    transition: all 0.3s ease;
	    width: 100%;
	}
	  .card-body:hover {
	    transform: scale(1.2);

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
   <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: rgba(194, 194, 214, 1.0);">
   	<div class="container" >
   		<div class="mr-auto">
   			<form method="POST" action="profile.php">
   			<input  type="search" name="search" placeholder="Search" maxlength="13" required>
   			<button class="btn-sm btn-outline-dark my-sm-0 bg-primary text-light ml-2" name="submit" type="submit">Search</button>
   			</form>
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

				<!-- Slider Start -->

				<div id="demo" class="carousel slide" data-ride="carousel">
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo $baseurl; ?>website_pic\nbu6.jpg" alt="Nbu" width="100%" height="400px">
	      <div class="carousel-caption">
	        <h3 class="text-dark"></h3>
	      
	      </div>   
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo $baseurl; ?>website_pic\nbu7.jpg" alt="nbu" width="100%" height="400px">
	      <div class="carousel-caption">
	        <h3 class="text-dark"></h3>
	   
	      </div>   
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo $baseurl; ?>website_pic\nbu8.jpg" alt="unbu" width="100%" height="400px">
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

		<!-- Slider End-->

		<!-- Card Start -->
		<div class="container">
	 
	  <div class="card-columns m-4 ">

	    <div class="card  rounded-lg border border-success bg-light shadow p-4 mb-4 bg-white">
	      <div class="card-body text-center">
	        <p class="card-text  text-success font-weight-bolder">Student Zone</p>
	         <a href="<?php echo $baseurl; ?>stud_login.php">
	        <button type="button" class="btn btn-outline-success mx-3 ">Log in</button></a>
	         <a href="<?php echo $baseurl; ?>stud_applicant.php">
	          <button type="button" class="btn btn-outline-success mx-3">Register</button></a>
	       <!--  <span class="material-icons">person</span>
	        <span class="material-icons">person_add</span> -->
	      </div>
	    </div>

	    <div class="card card rounded-lg border border-info bg-light shadow p-4 mb-4 bg-white ">
	      <div class="card-body text-center ">
	        <p class="card-text  text-primary font-weight-bolder">Alumni Zone</p>
	        <a href="<?php echo $baseurl; ?>alum_login.php">
	        <button type="button" class="btn btn-outline-info mx-3 ">Log in</button></a>
	        <a href="<?php echo $baseurl; ?>alum_applicant_regno.php">
	          <button type="button" class="btn btn-outline-info mx-3">Register</button></a>
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
		<!-- Card End -->




  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="#"></a>
  </div>
  <!-- Copyright -->
</footer>
	</body>
	</html>