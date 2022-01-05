<?php include 'controller/baseurlconfig.php';

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
	<title>Student Profile</title>
  <link rel = "icon" href = "<?php echo $baseurl; ?>website_pic\logo.png" type = "image/x-icon">
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
          <li class="nav-item">
            <a class="nav-link " href="<?php echo $baseurl; ?>index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="https://www.nbu.ac.in/">About NBU</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="<?php echo $baseurl;?>controller/logout.php">Log Out</a>
          </li>    

        </ul>
   		</div>
   	</div>
   </nav>
<!-- Navbar End -->

	<?php  
	if($_SESSION['verified'] == 0 && $_SESSION['userName'] != 'rejected'){
	?>
	<center><div class="container m-4 border border-primary w-50">
    <p class="text-primary">Your profile is under verifying process<br>
		Wait for 48 hrs or contact the office</p>
  </div></center>
	<?php }
	elseif ($_SESSION['userName'] == 'rejected') {
	?>
	<center><div class="container m-4 border border-danger w-50">
    <p class="text-danger">Your profile is rejected for<br>"
  <?php echo $_SESSION['reason']; ?>"</p></div></center>
	
	<?php }
	elseif ($_SESSION['verified'] == 1 && $_SESSION['userName'] != 'rejected') {
	?>
	<center><div class="table-responsive-sm pt-2 pb-2 m-2">
      <img class="rounded-circle" src="s_profile_pic/<?php echo $row1['sa_profile_pic'];?>" style="width:100px;height:100px;"><br><br>


  <table class="table table-bordered w-25">

    <tbody>
      <tr>
        <td><small><b> Name</b></small></td>
        <td><small><?php echo $row1['sa_name']; ?></small></td>
      
      </tr>
      
    </tbody>
    <tbody>
      <tr>
        <td><small><b>Gender</b> </small></td>
        <td><small><?php echo $row1['sa_gender'] ?></small></td>
      </tr>
      
    </tbody>
    <tbody>
      <tr>
        <td><small><b> Date of Birth </b></small></td>
        <td><small><?php echo $row1['sa_dob']; ?></small></td>
      </tr>
      
    </tbody>
    <tbody>
      <tr>
        <td><small><b>Registration Number</b></small></td>
        <td><small><?php echo $row1['sa_reg_no']; ?></small></td>
      </tr>
      
    </tbody>
    <tbody>
      <tr>
        <td><small><b>Session</b></small></td>
        <td><small><?php echo $row1['sa_session'];?></small></td>
      </tr>
      
    </tbody>
    <tbody>
      <tr>
        <td><small><b> Course </b></small></td>
        <td><small><?php  echo $row1['sa_course'];?></small></td>
      </tr>
      
    </tbody>
    <tbody>
      <tr>
        <td><small><b> Semester </b></small></td>
        <td><small><?php echo $row1['sa_semester']; ?></small></td>
      </tr>
      
    </tbody>
    <tbody>
      <tr>
        <td><small><b> Class Roll </b></small></td>
        <td><small><?php echo $row1['sa_class_roll']; ?></small></td>
      </tr>
      
    </tbody>
    <tbody>
      <tr>
        <td><small><b> Mobile Number </b></small></td>
        <td><small><?php echo $row1['sa_phn_no']; ?></small></td>
      </tr>
      
    </tbody>
    <tbody>
      <tr>
      	
        <td><small><b> Email </b></small></td>
        <td><small><?php echo $row1['sa_mail']; ?></small></td>
      </tr>
      
    </tbody>
        <tbody>
      <tr>
      	
        <td><small><b> Father's Name </b></small></td>
        <td><small><?php echo $row2['sp_f_name']; ?></small></td>
      </tr>
      
    </tbody>
        <tbody>
      <tr>
      	
        <td><small><b> Mother's Name </b></small></td>
        <td><small><?php echo $row2['sp_m_name'];?></small></td>
      </tr>
      
    </tbody>
        <tbody>
     
      
    </tbody>
    <tbody>
    	 <td><small><b> Address </b></small></td>
			<td><small><?php echo $row2['sp_add'];?> </small></td>
			<?php } ?>
		
    </tbody>
  </table>
  <small><a href="<?php echo $baseurl;?>stud_update_profile.php">
    <button class="btn btn-outline-success">Update Profile</button>
</a>
</small>
</div>
</center>    
 
	      
     



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

		