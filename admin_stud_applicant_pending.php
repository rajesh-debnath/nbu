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
</head>
<body>
   <?php 
         $sql = "SELECT stud_applicant.*,stud_profile.* FROM stud_applicant,stud_profile WHERE stud_applicant.sa_reg_no <> stud_profile.sp_reg_no";
            $result = mysqli_query($conn, $sql);

             while($sa_profile = mysqli_fetch_array($result)) { 
               ?> 

               <label><?php echo $sa_profile['sa_reg_no']; ?></label>

               <label><a href="<?php echo $baseurl;?>admin_stud_profile.php?stud_reg_no=<?php echo $sa_profile['sa_reg_no'];?>"><button>view</button></a></label><br>
  <?php
   }

    ?>
</body>
</body>
</html>