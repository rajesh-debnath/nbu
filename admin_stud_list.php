<?php session_start();
include 'controller/connection.php';
include 'controller/baseurlconfig.php';



if($_SESSION['ad_username'] == "" || !isset($_SESSION['ad_username'])) 
{
	header("Location:".$baseurl."admin_login.php");
}

if (isset($_POST["ad_stud_submit"])){
	$sessions = filter_var($_POST["sessions"], FILTER_SANITIZE_STRING);
	$course = filter_var($_POST["course"], FILTER_SANITIZE_STRING);
}  
else{
  header("Location:".$baseurl."admin_search_stud.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students List</title>
  <link rel = "icon" href = "<?php echo $baseurl; ?>website_pic\logo.png" type = "image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <!--  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
   	rel="stylesheet"> -->
   	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </head>
   <body>
   	<!-- navbar start -->

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
            <a class="nav-link " href="https://www.nbu.ac.in/dept/csa.aspx">About Us</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="<?php echo $baseurl;?>controller/logout.php">Log Out</a>
          </li>    

        </ul>
  		</div>
  	</div>
  </nav>
  <!-- Navbar End -->

  <div class="table-responsive-sm pt-2 pb-2 m-2 "><!--main page-->


  	<table class="table table-bordered" >
  		<thead class="bg-success text-center">
  			<tr>
  				<th class="text-light">Student Name</th>
  				<th class="text-light">Registration Number</th>
  				<th class="text-light">Course</th>
  				<th class="text-light">Session</th>
  				<th class="text-light">Action</th>

  			</tr>
  		</thead>
  		<?php 
  		$sql = "SELECT stud_applicant.*,stud_profile.* FROM stud_applicant,stud_profile Where stud_applicant.sa_session='".$sessions."' AND stud_applicant.sa_course='".$course."' AND stud_applicant.sa_reg_no=stud_profile.sp_reg_no";
  		$result = mysqli_query($conn, $sql);

  		while($stud_list = mysqli_fetch_array($result)) { 

  			?>

  			<tbody>
  				<tr>


  					<td><small><?php echo $stud_list['sa_name'];?></small></td>
  					<td><small><?php   echo $stud_list['sa_reg_no'];?></small></td>
  					<td><small><?php echo $stud_list['sa_session'];?></small></td>
  					<td><small><?php echo $stud_list['sa_course'];?></small></td>
  					<td><small><a href="<?php echo $baseurl;?>admin_stud_profile.php?stud_id=<?php   echo $stud_list['sa_reg_no'];?>"><button class="btn-success">View</button></small></td>


  					</tr>

  				</tbody>
  				<?php
  			}

  			?>


  		</table>  


  	</div>



  	<!-- Footer -->
  	<footer class="page-footer font-small bg-dark">

  		<!-- Copyright -->
  		<div class="footer-copyright text-center py-3 text-white">© 2022 Copyright | All rights reserved.

  		</div>
  		<!-- Copyright -->

  	</footer>
  	<!-- Footer -->
  </body>
  </html>
