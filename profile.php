<?php include 'controller/baseurlconfig.php';
session_start();
include 'controller/connection.php';
include 'controller/baseurlconfig.php';

if (isset($_POST["submit"])){
  $id = filter_var($_POST["search"], FILTER_SANITIZE_STRING);
}



$sql1 = "SELECT stud_applicant.*,stud_profile.* FROM stud_applicant,stud_profile WHERE stud_profile.sp_reg_no = '".$id."' AND stud_profile.sp_reg_no=stud_applicant.sa_reg_no";
$result1 = mysqli_query($conn, $sql1);

while($profile1 = mysqli_fetch_array($result1)) { 

  $reg_no1=$profile1['sp_reg_no'];

  $data1=$profile1['sa_profile_pic'];
  $data2=$profile1['sa_name'];
  $data3=$profile1['sa_dob'];
  $data4=$profile1['sa_reg_no'];
  $data5=$profile1['sa_session'];
  $data6=$profile1['sa_course'];
  $data7=$profile1['sa_semester'];
  $data8=$profile1['sa_class_roll'];
  $data9=$profile1['sa_phn_no'];
  $data10=$profile1['sa_mail'];

}

$sql2 = "SELECT alum_applicant.*, alum_profile.* FROM alum_applicant, alum_profile WHERE  alum_profile.alp_reg_no= '".$id."' AND alum_profile.alp_reg_no = alum_applicant.al_reg_no";
$result2 = mysqli_query($conn, $sql2);

while($profile2 = mysqli_fetch_array($result2)) { 

  $reg_no2=$profile2['alp_reg_no'];

  $data11=$profile2['al_profile_pic'];
  $data12=$profile2['al_name'];
  $data13=$profile2['al_reg_no'];
  $data14=$profile2['al_session'];
  $data15=$profile2['al_course'];
  $data16=$profile2['al_mail'];

  if ($profile2['alp_job']=="") {
    $data17="**********";
  }
  else{
    $data17=$profile2['alp_job'];
  }

}




?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Admin View Student Profile</title>
 <link rel = "icon" href = "<?php echo $baseurl; ?>website_pic\logo.png" type = "image/x-icon">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
           

      </ul>
    </div>
  </div>
</nav>
<!-- Navbar End -->

<center><div id="stud" class="table-responsive-sm pt-2 pb-2 m-2">
  <img class="rounded-circle" src="s_profile_pic/<?php echo $data1;?>" style="width:100px;height:100px;"><br><br>


  <table class="table table-bordered w-25">

    <tbody>
      <tr>
        <td><small><b>Students's Name</b></small></td>
        <td><small><?php echo $data2; ?></small></td>
        
      </tr>

    </tbody>
    <tbody>
      <tr>
        <td><small><b>Registration No.</b> </small></td>
        <td><small><?php echo $data4; ?></small></td>
      </tr>

    </tbody>
    <tbody>
      <tr>
        <td><small><b> Session </b></small></td>
        <td><small><?php echo $data5; ?></small></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><small><b>Date of birth</b></small></td>
        <td><small><?php echo $data2; ?></small></td>
      </tr>

    </tbody>
    <tbody>
      <tr>
        <td><small><b> Course </b></small></td>
        <td><small><?php echo $data6; ?></small></td>
      </tr>

    </tbody>
    <tbody>
      <tr>
        <td><small><b> Semester </b></small></td>
        <td><small><?php echo $data7; ?></small></td>
      </tr>

    </tbody>
    <tbody>
      <tr>
        <td><small><b> Class Roll </b></small></td>
        <td><small><?php echo $data8; ?></small></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><small><b> Mobile NO. </b></small></td>
        <td><small><?php echo $data9; ?></small></td>
      </tr>

    </tbody>
    <tbody>
      <tr>
        <td><small><b> Email </b></small></td>
        <td><small><?php echo $data10; ?></small></td>
      </tr>

    </tbody>

  </table>


</div>
</center>


<center><div id="alumni" class="table-responsive-sm pt-2 pb-2 m-2">
  <img class="rounded-circle" src="s_profile_pic/<?php echo $data11;?>" style="width:100px;height:100px;"><br><br>


  <table class="table table-bordered w-25">

    <tbody>
      <tr>
        <td><small><b>Alumni'S Name</b></small></td>
        <td><small><?php echo $data12; ?></small></td>
        
      </tr>

    </tbody>
    <tbody>
      <tr>
        <td><small><b>Registration No.</b> </small></td>
        <td><small><?php echo $data13; ?></small></td>
      </tr>

    </tbody>
    <tbody>
      <tr>
        <td><small><b> Session </b></small></td>
        <td><small><?php echo $data14; ?></small></td>
      </tr>

    </tbody>

    
    <tbody>
      <tr>
        <td><small><b> Course </b></small></td>
        <td><small><?php echo $data15; ?></small></td>
      </tr>

    </tbody>

    <tbody>
      <tr>
        <td><small><b> Job Description </b></small></td>
        <td><small><?php echo $data17; ?></small></td>
      </tr>

    </tbody>
    <tbody>
      <tr>
        <td><small><b> Email </b></small></td>
        <td><small><?php echo $data16; ?></small></td>
      </tr>

    </tbody>

  </table>


</div>
</center>
<center><div id="not" class="container m-4 border border-danger w-50">
    <p class="text-danger">OOPS!<br>No Records Found</p></div></center>



<!-- Footer -->
<footer class="page-footer font-small bg-dark">

 <!-- Copyright -->
 <div class="footer-copyright text-center py-3 text-white">© 2021 Copyright:

 </div>
 <!-- Copyright -->

</footer>
<!-- Footer -->

</body>

<?php
 if (!empty($reg_no1)) {
  
  ?>
  <script type="text/javascript">
    document.getElementById("alumni").style.display="none";
    document.getElementById("not").style.display="none";
  </script>


  <?php
}
elseif (!empty($reg_no2)) {

  ?>
  <script type="text/javascript">
    document.getElementById("stud").style.display="none";
    document.getElementById("not").style.display="none";
  </script>


  <?php
 
}
else{

  

  ?>
  <script type="text/javascript">
    document.getElementById("stud").style.display="none";
    document.getElementById("alumni").style.display="none";
  </script>


  <?php

}

?>

</html>
