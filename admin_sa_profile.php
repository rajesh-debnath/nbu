<?php include 'controller/baseurlconfig.php'; ?>
<?php session_start();
include 'controller/connection.php';
include 'controller/baseurlconfig.php';

if($_SESSION['ad_username'] == "" || !isset($_SESSION['ad_username'])) 
{
   header("Location:".$baseurl."admin_login.php");
}
$stud_reg_no=$_GET["stud_reg_no"];


         $sql = "SELECT * FROM stud_applicant WHERE stud_applicant.sa_reg_no = '".$stud_reg_no."'";
            $result = mysqli_query($conn, $sql);

             while($sa_profile = mysqli_fetch_array($result)) { 

                $pic=$sa_profile['sa_profile_pic'];
                $name=$sa_profile['sa_name'];
                $gender=$sa_profile['sa_gender'];
                $dob=$sa_profile['sa_dob'];
                $reg_no=$sa_profile['sa_reg_no'];
                $session=$sa_profile['sa_session'];
                $course=$sa_profile['sa_course'];
                $semester=$sa_profile['sa_semester'];
                $class_roll=$sa_profile['sa_class_roll'];
                $ph_no=$sa_profile['sa_phn_no'];
                $email=$sa_profile['sa_mail'];
                $pass=$sa_profile['sa_pwd'];
               }
               $_SESSION['pending_sa_reg_no']=$reg_no;
               $_SESSION['pending_sa_pwd']=$pass;
               $_SESSION['pending_sa_pic']=$pic;
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

<div class="container" style="padding-top: 95px;">
   <div class="field-set">
      <img src="s_profile_pic/<?php echo $pic;?>" style="width:60px;height:80px;"><br>
               <table class="font-weight-bold">
                 <tr >
               <td><label for="gender">Name:</label> 
               <label><?php echo $name;?></label>
               </td>
               </tr>  
               <tr >
               <td><label for="gender">Gender:</label> 
               <label><?php echo $gender;?></label>
               </td>
               </tr>
               <tr>
                  <td><label for="dob">Date of Birth:</label>
                 <label><?php echo $dob;?></label>  
              </td>
               </tr>
               <tr>
                  <td><label for="reg_no">Registration No:</label>
                 <label><?php echo $reg_no;?></label>  
              </td>
               </tr>
               <tr>
                  <td><label for="sessions">Session:</label>
                 <label><?php echo $session;?></label>  
              </td>
               </tr>
               <tr>
                  <td><label for="course">Course:</label>
                 <label><?php echo $course;?></label>  
              </td>
               </tr>
               <tr>
                  <td><label for="semester">Semester:</label>
                 <label><?php echo $semester;?></label>  
              </td>
               </tr>
               <tr>
                  <td><label for="class_roll">Class Roll:</label>
                 <label><?php echo $class_roll;?></label>  
              </td>
               </tr>
               <tr>
                  <td><label for="phn_no">Mobile No:</label>
                 <label><?php echo $ph_no;?></label>  
              </td>
               </tr>
               <tr>
                  <td><label for="email">Email:</label>
                 <label><?php echo $email;?></label>  
              </td>
               </tr>
                </table> 
               <a href="<?php echo $baseurl;?>controller/admin_sa_profile_approve.php?operation=1"><button class="btn btn-outline-success">Approve</button></a>

   <button class="btn btn-outline-danger " onclick="reject.style.display='block'">Reject</button>

   <form id="reject" style="display: none;" method="post" action="<?php echo $baseurl;?>controller/admin_sa_profile_reject.php">
      <input type="text" name="resone">
      <button class="btn btn-outline-danger m-3 " type="submit" name="Reject">Submit</button> 

   </form>
            
          </div>
       </div>
<!--    <img src="s_profile_pic/<?php echo $pic;?>" style="width:60px;height:80px;"><br>
   <p><?php echo $gender;?></p><br>
   <p><?php echo $dob;?></p><br>
   <p><?php echo $reg_no;?></p><br>
   <p><?php echo $session;?></p><br>
   <p><?php echo $course;?></p><br>
 -->
   <!-- end of part 1 -->

<!--    <p><?php echo $semester;?></p><br>
   <p><?php echo $class_roll;?></p><br>
  <p><?php echo $ph_no;?></p><br>
 -->
   <!-- end of part 2 -->

   <!-- <p><?php echo $email;?></p><br>

   <a href="<?php echo $baseurl;?>controller/admin_sa_profile_approve.php?operation=1"><button>Approve</button></a>

   <button onclick="reject.style.display='block'">Reject</button>

   <form id="reject" style="display: none;" method="post" action="<?php echo $baseurl;?>controller/admin_sa_profile_reject.php">
      <input type="text" name="resone">
      <input type="submit" name="Reject">

   </form> -->

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