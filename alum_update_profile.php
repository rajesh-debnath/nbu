<?php include 'controller/baseurlconfig.php'; ?>
<?php  
session_start();
include "controller/connection.php";
if(!isset($_SESSION['userId'])){
	header("location:".$baseurl." alum_login.php");
}
$sql = "SELECT alum_applicant.*,alum_profile.* FROM alum_applicant,alum_profile WHERE alum_applicant.al_reg_no = '".$_SESSION['userId']."' AND alum_applicant.al_reg_no = alum_profile.alp_reg_no";
$result = mysqli_query($conn, $sql);

while($alum_profile = mysqli_fetch_array($result)) { 


    $ph_no=$alum_profile['al_phn_no'];
    $email=$alum_profile['al_mail'];
    $job=$alum_profile['alp_job'];
    $address=$alum_profile['alp_add'];
    
}

?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Alumni Profile Update</title>
 <link rel = "icon" href = "<?php echo $baseurl; ?>website_pic\logo.png" type = "image/x-icon">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       <script type="text/javascript" src="<?php echo $baseurl; ?>js/sp_update.js"></script>
   </head>
   <body>

     <!-- navbar start -->

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

<center><div class="table-responsive-sm pt-2 pb-2 m-2">
 
<form method="post" action="controller/alum_update_profile_inc.php">

  <table class="table table-bordered w-50">

    
<tbody>
  <tr>
    <td><small><b> Job </b></small></td>
    <td><small><input type="text" id="job" name="job" value="<?php echo $job; ?>" placeholder="Enter job details(Max:100 Charecters)"></small>
    <p id="e_job" class="text-danger small"></p></td>
</tr>

</tbody>
<tbody>
  <tr>
    <td><small><b> Address </b></small></td>
    <td><small><textarea type="text" id="address" name="add" value="<?php echo $address; ?>" placeholder="Enter Address(Max:100 Charecters)"></textarea></small>
    <p id="e_address" class="text-danger small"></p></td>
</tr>

</tbody>
<tbody>
  <tr>
    <td><small><b> Mobile NO. </b></small></td>
    <td><small><input type="text" id="mobile" name="phn_no" value="<?php echo $ph_no; ?>" placeholder="Enter 10 digit mobile No."></small>
    <p id="e_mobile" class="text-danger small"></p></td>
</tr>

</tbody>
<tbody>
  <tr>
    <td><small><b> Email </b></small></td>
    <td><small><input type="text" id="email" name="mail" value="<?php echo $email; ?>" placeholder="Enter Email(e.g.: example@abc.com)"></small>
    	<p id="e_email" class="text-danger small"></p></td>
</tr>

</tbody>

</table>
<button type="submit" id="submit" class="btn btn-outline-info mx-3"  name="update">Update</button>
</form>
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