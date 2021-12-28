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
	  <style>
	  /* Make the image fully responsive 
	  .carousel-inner img {
	    width: 100%;
	    height: 100%;
	  }*/
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

		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<div class="container-fluid">
			
			 <a class="navbar-brand" href="#"><img src="<?php echo $baseurl; ?>website_pic\logo.png" alt="logo" width="10%"><span class="ml-5">UNIVERSITY OF NORTH BENGAL</span></a>
	<!--for search box -->
			<form class="d-flex ml-10">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-sm-0 bg-primary text-dark" type="submit">Search</button>
    	</form>
		<!--end search option  -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $baseurl; ?>index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About NBU</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
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
		<!-- Card End -->


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