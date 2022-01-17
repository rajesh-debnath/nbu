<?php include 'controller/baseurlconfig.php'; ?>
<?php session_start();
include 'controller/connection.php';
include 'controller/baseurlconfig.php';

if($_SESSION['ad_username'] == "" || !isset($_SESSION['ad_username'])) 
{
 header("Location:".$baseurl."admin_login.php");
}
$alum_reg_no=$_GET["alum_reg_no"];


$sql = "SELECT * FROM alum_applicant WHERE alum_applicant.al_reg_no = '".$alum_reg_no."'";
$result = mysqli_query($conn, $sql);

while($al_profile = mysqli_fetch_array($result)) { 

    $pic=$al_profile['al_profile_pic'];
    $name=$al_profile['al_name'];
    $gender=$al_profile['al_gender'];
    $dob=$al_profile['al_dob'];
    $reg_no=$al_profile['al_reg_no'];
    $session=$al_profile['al_session'];
    $course=$al_profile['al_course'];
    $ph_no=$al_profile['al_phn_no'];
    $email=$al_profile['al_mail'];
    $pass=$al_profile['al_pwd'];
}
$_SESSION['pending_al_reg_no']=$reg_no;
$_SESSION['pending_al_pwd']=$pass;
$_SESSION['pending_al_pic']=$pic;
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Alumni Applicant Profile</title>
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
<center><div class="table-responsive-sm pt-2 pb-2 m-2">
  <img class="rounded-circle" src="s_profile_pic/<?php echo $pic;?>" style="width:80px;height:100px;"><br><br>


  <table class="table table-bordered w-25">

    <tbody>
      <tr>
        <td><small><b>ALUMNI'S NAME</b></small></td>
        <td><small><?php echo $name; ?></small></td>
        
    </tr>
    
</tbody>
<tbody>
  <tr>
    <td><small><b>REGISTRATION NO</b> </small></td>
    <td><small><?php echo $reg_no; ?></small></td>
</tr>

</tbody>
<tbody>
  <tr>
    <td><small><b> Session </b></small></td>
    <td><small><?php echo $session; ?></small></td>
</tr>

</tbody>
<tbody>
  <tr>
    <td><small><b>Gender</b></small></td>
    <td><small><?php echo $gender; ?></small></td>
</tr>

</tbody>
<tbody>
  <tr>
    <td><small><b>Date of birth</b></small></td>
    <td><small><?php echo $dob; ?></small></td>
</tr>

</tbody>
<tbody>
  <tr>
    <td><small><b> Course </b></small></td>
    <td><small><?php echo $course; ?></small></td>
</tr>

</tbody>

<tbody>
  <tr>
    <td><small><b> Mobile NO. </b></small></td>
    <td><small><?php echo $ph_no; ?></small></td>
</tr>

</tbody>
<tbody>
  <tr>
    <td><small><b> Email </b></small></td>
    <td><small><?php echo $email; ?></small></td>
</tr>

</tbody>

</table>

<small><a href="<?php echo $baseurl;?>controller/admin_al_profile_approve.php?operation=1">
    <button class="btn btn-outline-success">Approve</button>
</a>
</small>

<small>
 <button class="btn btn-outline-danger " onclick="reject.style.display='block'">Reject</button>

 <form id="reject" style="display: none;" method="post" action="<?php echo $baseurl;?>controller/admin_al_profile_reject.php">
  <br><textarea type="text" name="resone" class="form-control w-25" maxlength="100" placeholder="Give some Resones &#13;&#10; (max:100 words)" required></textarea>
  <button class="btn btn-outline-danger m-3 " type="submit" name="Reject">Submit</button> 

</form>
</small>


</div></center>

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