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

		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<div class="container-fluid ">

				<a class="navbar-brand" href="#"><img src="<?php echo $baseurl; ?>website_pic\logo.png" alt="logo" width="10%"><span class="ml-5">UNIVERSITY OF NORTH BENGAL</span></a>
		<!--for search box -->
				<form class="d-flex">
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
						<li class="nav-item">
							<a class="nav-link" href="#">Contact Us</a>
						</li>    
						
					</ul>
				</div>  
			</div>
			</nav>

			<!-- Navbar End -->

			<div class="container"  style="padding-top: 10%;">

				<div class="card-columns m-4 text-center pl-5">

					<div class="card  rounded-lg border border-success bg-light shadow p-4 mb-4 bg-white">
						<div class="card-body text-center">
							<p class="card-text  text-success font-weight-bolder">Student Zone</p>
							<ul>
								<a href="<?php echo $baseurl;?>admin_stud_applicant_pending.php"> <li>Pending Applicant</li></a>
							</ul>
						</div>
					</div>

					<div class="card card rounded-lg border border-info bg-light shadow p-4 mb-4 bg-white">
						<div class="card-body text-center">
							<p class="card-text  text-primary font-weight-bolder">Alumini Zone</p>
							<ul>
								<a href="<?php echo $baseurl;?>admin_search_stud.php"><li>MCA / MSc.Computer sc.</li></a>
							</ul>

						</div>
					</div>
				</div>
			</div>

<!-- 	<p>Student</p>
	<ul>
		<li><a href=" echo $baseurl;?>admin_stud_applicant_pending.php"> Pending Applicant</a></li>
		<a href=" echo $baseurl;?>admin_search_stud.php"><li>MCA / MSc.Computer sc.</li></a>
	</li>
	</ul>
-->
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