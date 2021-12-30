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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <!--  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
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
                     <a class="navbar-brand" href="<?php echo $baseurl; ?>index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="navbar-brand" href="#">About NBU</a>
                  </li>
                  <li class="nav-item">
                     <a class="navbar-brand" href="#">Change Password</a>
                  </li> 
                  <li class="nav-item">
                     <a class="navbar-brand" href="#">Log Out</a>
                  </li>    
                  
               </ul>
            </div>  
         </div>
         </nav>

         <!-- Navbar End -->
         
 <div class="container col-sm" style="padding-top: 10%">
  
  <div class="card">
   <div class="card bg-light">
      <div class="card-body text-center rounded-lg border border-success shadow p-4">
        <p class="card-text text-primary font-weight-bolder">Student Zone</p>
        <?php 
         $sql = "SELECT stud_applicant.sa_reg_no FROM stud_applicant WHERE sa_reg_no NOT IN (SELECT stud_profile.sp_reg_no FROM stud_profile)";
            $result = mysqli_query($conn, $sql);

             while($sa_profile = mysqli_fetch_array($result)) { 
               ?> 
               <table class="table table-borderless">
              
               <tbody>
                  <tr>
                    <td><label><?php echo $sa_profile['sa_reg_no']; ?></label></td>
                 
                     <td><label><a href="<?php echo $baseurl;?>admin_sa_profile.php?stud_reg_no=<?php echo $sa_profile['sa_reg_no'];?>"><button>view</button></a></label></td>
                 </tr>
              </tbody>
           </table>
              
  <?php 
   }
?>

      </div>
    </div>
 </div>
</div>


  <!--  <?php 
         $sql = "SELECT stud_applicant.sa_reg_no FROM stud_applicant WHERE sa_reg_no NOT IN (SELECT stud_profile.sp_reg_no FROM stud_profile)";
            $result = mysqli_query($conn, $sql);

             while($sa_profile = mysqli_fetch_array($result)) { 
               ?> 

               <label><?php echo $sa_profile['sa_reg_no']; ?></label>

               <label><a href="<?php echo $baseurl;?>admin_sa_profile.php?stud_reg_no=<?php echo $sa_profile['sa_reg_no'];?>"><button>view</button></a></label><br>
  <?php
   }

    ?> -->

    <!-- Footer -->
<footer class="page-footer font-small bg-dark" style="margin-top:85%">

   <!-- Copyright -->
   <div class="footer-copyright text-center py-3 text-white">© 2021 Copyright:

   </div>
   <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>