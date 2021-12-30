<?php session_start();
include 'controller/connection.php';
include 'controller/baseurlconfig.php';
$verify=0;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $ad_username=filter_var($_POST['ad_username'], FILTER_SANITIZE_STRING);
  
    $ad_password=filter_var($_POST['ad_password'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM admin_login";
$result = mysqli_query($conn, $sql);
    while($admin_id_verify = mysqli_fetch_array($result)) {

      if ($ad_username==$admin_id_verify["ad_username"] && $ad_password==$admin_id_verify["ad_password"]) {
         $verify++;
      }
   }

if ($verify>0) {
   header("Location:".$baseurl."admin_dashboard.php");
   $_SESSION['ad_username']=$ad_username;

}
else{
   echo "not ok";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
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
	  	.fa-user,.fa-lock{
	  		position: absolute;
	  		left: 28px;
	  		color: grey;
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
      <input class="form-control mr-sm-2 flex-row-reverse" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-sm-0 bg-primary text-dark" type="submit">Search</button>
    	</form>
		<!--end search option  -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="navbar-brand" href="<?php echo $baseurl; ?>index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="#">About NBU</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="#">Contact Us</a>
      </li>

      
    </ul>
  </div>  
 </div>  
</nav>
<!-- Navbar End -->


<!--Modal start -->	
	<div class="modal-dialog modal-dialog-centered text-center modal-lg">
		<div class="col-sm-8 main-section ">
			<div class="modal-content bg-light border-danger py-0 px-5 shadow p-4 mb-4">

		<div class="col-12 user_img mt-n5 mb-4" >
			<img src="<?php echo $baseurl; ?>website_pic\admin_logo.png" class="w-25">
		</div>
			 		<h3 style="font-family: Constantia";>Admin Login</h3>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="col-12">

		<div class="form-group mb-4 mt-2">
		<table class="table table-borderless">
			<tr >
				<td><i class="fas fa-user fa-2x pt-2"></i><input type="text" class="form-control pl-5" name="ad_username" placeholder="Enter Username"></td>
			</tr>
			<tr >
				<td ><i class="fas fa-lock fa-2x pt-2"></i><input type="password" class="form-control pl-5" name="ad_password" placeholder="Enter Password"></td>
			</tr>
		</table>
		</div>
		
		<input type="submit" value="Login" id="ad_btn" name="ad_submit" class="btn-outline-danger rounded w-50">
	</form>
			<div class="col-12 forgot mt-3">
				<a href="#">Forgot Password?</a>
			</div>	
		</div>
	</div>
</div>

<!--Modal End -->
<!-- Footer -->
	<footer class="page-footer font-small bg-dark" style="margin-top:40%">

	  <!-- Copyright -->
	  <div class="footer-copyright text-center py-3 text-white">© 2021 Copyright:

	  </div>
	  <!-- Copyright -->

	</footer>
	<!-- Footer -->
</body>
</html>