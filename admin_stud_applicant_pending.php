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
	<title>Student Applicant Pending</title>
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

<div class="table-sm pt-2 pb-2 m-2 "><!--main page-->


   <table class="table table-bordered" >
     <thead class="table table-dark text-center">
      <tr>
        <th class="text-light">Student Name</th>
        <th class="text-light">Registration Number</th>
        <th class="text-light">Course</th>
        <th class="text-light">Action</th>

     </tr>
  </thead>
  <?php 
  $sql = "SELECT stud_applicant.* FROM stud_applicant WHERE sa_reg_no NOT IN (SELECT stud_profile.sp_reg_no FROM stud_profile)";
  $result = mysqli_query($conn, $sql);

  while($sa_profile = mysqli_fetch_array($result)) { 
   ?> 

   <tbody>
      <tr>


       <td><small><?php echo $sa_profile['sa_name']; ?></small></td>
       <td><small><?php echo $sa_profile['sa_reg_no']; ?></small></td>
       <td><small><?php echo $sa_profile['sa_course']; ?></small></td>
       <td><small><a href="<?php echo $baseurl;?>admin_sa_profile.php?stud_reg_no=<?php echo $sa_profile['sa_reg_no'];?>"><button class="btn-secondary">view</button></a></small></td>


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
