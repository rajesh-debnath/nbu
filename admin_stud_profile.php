<?php include 'controller/baseurlconfig.php'; ?>
<?php session_start();
include 'controller/connection.php';
include 'controller/baseurlconfig.php';

if($_SESSION['ad_username'] == "" || !isset($_SESSION['ad_username'])) 
{
   header("Location:".$baseurl."admin_login.php");
}
$stud_id=$_GET["stud_id"];


         $sql = "SELECT stud_applicant.*,stud_profile.* FROM stud_applicant,stud_profile WHERE stud_applicant.sa_reg_no = '".$stud_id."' AND stud_applicant.sa_reg_no=stud_profile.sp_reg_no";
            $result = mysqli_query($conn, $sql);

             while($stud_profile = mysqli_fetch_array($result)) { 

                $pic=$stud_profile['sa_profile_pic'];
                $name=$stud_profile['sa_name'];
                $gender=$stud_profile['sa_gender'];
                $dob=$stud_profile['sa_dob'];
                $reg_no=$stud_profile['sa_reg_no'];
                $session=$stud_profile['sa_session'];
                $course=$stud_profile['sa_course'];
                $semester=$stud_profile['sa_semester'];
                $class_roll=$stud_profile['sa_class_roll'];
                $ph_no=$stud_profile['sa_phn_no'];
                $email=$stud_profile['sa_mail'];
                $pass=$stud_profile['sa_pwd'];
                $father=$stud_profile['sp_f_name'];
                $mother=$stud_profile['sp_m_name'];
                $address=$stud_profile['sp_add'];
                $status=$stud_profile['sp_status'];
                
               }

               
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Applicant</title>
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
<center><div class="table pt-2 pb-2 m-2">
      <img class="rounded-circle" src="s_profile_pic/<?php echo $pic;?>" style="width:80px;height:100px;"><br><br>


 <table class="table table-bordered border border-primary w-25">

    <tbody>
      <tr>
        <td><small><b>STUDENT'S NAME</b></small></td>
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
        <td><small><b> Semester </b></small></td>
        <td><small><?php echo $semester; ?></small></td>
      </tr>
      
    </tbody>
    <tbody>
      <tr>
        <td><small><b> Class Roll </b></small></td>
        <td><small><?php echo $class_roll; ?></small></td>
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
        <tbody>
      <tr>
        <td><small><b> Father's Name </b></small></td>
        <td><small><?php echo $father; ?></small></td>
      </tr>
      
    </tbody>
        <tbody>
      <tr>
        <td><small><b> Mother's Name </b></small></td>
        <td><small><?php echo $mother; ?></small></td>
      </tr>
      
    </tbody>
        <tbody>
      <tr>
        <td><small><b> Address </b></small></td>
        <td><small><?php echo $address; ?></small></td>
      </tr>
      
    </tbody>
        <tbody>
      <tr>
        <td><small><b> Status </b></small></td>
        <td><small><?php echo $status; ?></small></td>
      </tr>
      
    </tbody>
   
  </table>
   
            
          </div></center>

   
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