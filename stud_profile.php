<?php include 'controller/baseurlconfig.php'; ?>
<?php
session_start();
include "controller/connection.php";
if(!isset($_SESSION['userId'])){
	header("location: stud_login.php");
}
if($_SESSION['verified'] == 1){
	$sql1 = "SELECT * FROM stud_applicant WHERE sa_reg_no = ?";
		$sa_stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($sa_stmt, $sql1)) {
		  header("location: ../stud_login.php?error=stmt1failed");
		  exit();
		}

		mysqli_stmt_bind_param($sa_stmt, "s", $_SESSION['userId']);
		mysqli_stmt_execute($sa_stmt);

		$r_result = mysqli_stmt_get_result($sa_stmt);
		if (mysqli_num_rows($r_result) === 1) {
			$row1 = mysqli_fetch_assoc($r_result);
			$sql2 = "SELECT * FROM stud_profile WHERE sp_reg_no = ?";
			$sp_stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($sp_stmt, $sql2)) {
			  header("location: ../stud_login.php?error=stmt2failed");
			  exit();
			}

			mysqli_stmt_bind_param($sp_stmt, "s", $row1['sa_reg_no']);
			mysqli_stmt_execute($sp_stmt);

			$r_result = mysqli_stmt_get_result($sp_stmt);
			if (mysqli_num_rows($r_result) === 1) {
				$row2 = mysqli_fetch_assoc($r_result);
			}
		}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>profile</title>
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

	<?php  
	if($_SESSION['verified'] == 0 && $_SESSION['userName'] != 'rejected'){
	?>
	<div><p>your profile is under verifying process</p>
		<p>wait for 48 hrs or contact the office</p></div>
	<?php }
	elseif ($_SESSION['userName'] == 'rejected') {
	?>
	<div><p>Your profile is rejected for</p></div>
	<div><p><?php echo $_SESSION['reason']; ?></p></div>
	
	<?php }
	elseif ($_SESSION['verified'] == 1 && $_SESSION['userName'] != 'rejected') {
	?>
	
	<div class="container" style="padding-top: 95px; ">
    <div class="field-set">
    <img src="s_profile_pic/<?php echo $row1['sa_profile_pic'];?>" style="width:60px;height:80px;"><br>

	<label>Name: <?php echo $row1['sa_name'];?></label><br>
   <label>Gender: <?php echo $row1['sa_gender'];?></label><br>
  <label>Date of Birth: <?php echo $row1['sa_dob'];?></label><br>
   <label>Registration No: <?php echo $row1['sa_reg_no'];?></label><br>
   <label>Session: <?php echo $row1['sa_session'];?></label><br>
   <label>Course: <?php echo $row1['sa_course'];?></label><br>

   <!-- end of part 1 -->

	<label>Semester: <?php echo $row1['sa_semester'];?></label>
	<br>
	<label>Class Roll:<?php echo $row1['sa_class_roll'];?></label>
	<br>
	<label>Mobile No: <?php echo $row1['sa_phn_no'];?></label>
	<br>
	<label>Email: <?php echo $row1['sa_mail'];?></label><br>
		<?php
		if ($row2['sp_f_name'] != "") { ?>
			<label><?php echo $row2['sp_f_name'];?></label><br>
		<?php }
		if ($row2['sp_m_name'] != "") { ?>
			<label><?php echo $row2['sp_m_name'];?></label><br>
		<?php }
		if ($row2['sp_status'] != "") { ?>
			<label><?php echo $row2['sp_status'];?></label><br>
		<?php }
		if ($row2['sp_add'] != "") { ?>
			<textarea rows="4" cols="50" name="add" readonly><?php echo $row2['sp_add'];?> </textarea><br> 
		<?php } ?>
		<a href="stud_about.php">change about</a>

	</div>
</div>
	<?php }
	else{
	?>
	<div><p>something went wrong</p></div>
	<?php } ?>


</body>
</html>