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
</head>
<body>
   <img src="s_profile_pic/<?php echo $pic;?>" style="width:60px;height:80px;"><br>
   <p><?php echo $name;?></p>
   <p><?php echo $gender;?></p>
   <p><?php echo $dob;?></p>
   <p><?php echo $reg_no;?></p>
   <p><?php echo $session;?></p>
   <p><?php echo $course;?></p>

   <!-- end of part 1 -->

   <p><?php echo $semester;?></p>
   <p><?php echo $class_roll;?></p>
  <p><?php echo $ph_no;?></p>
  <p><?php echo $email;?></p>

   <!-- end of part 2 -->

   <p><?php echo $father;?></p>
   <p><?php echo $mother;?></p>
  <p><?php echo $address;?></p>
  <p><?php echo $status;?></p>
   <!-- end of part 3 -->

   


</body>
</html>