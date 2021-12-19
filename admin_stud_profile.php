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
<form action="" method="post" enctype="multipart/form-data">
   <img src="" style="width:30px;height:50px;"><br>
   <input type="text" name="name"><br>
   <input type="text" name="reg_no" placeholder="reg_no"><br>
   <input type="text" name="reg_session"><br>
   <input type="text" name="course"><br>
   <input type="text" name="class_roll"><br>

   <!-- end of part 1 -->

   <input type="radio" name="gender" value="male">
   <label for="male">Male</label>
   <input type="radio" name="gender" value="female">
   <label for="female">Female</label>
   <input type="radio" name="gender" value="other">
   <label for="other">Other</label><br>
   <input type="text" name="semester"><br>
   <input type="date" name="dob"><br>

   <!-- end of part 2 -->

   <input type="text" name="m_number"><br>
   <input type="text" name="email"><br>
   <input type="password" name="pwd"><br>
   <input type="password" name="repwd"><br>
   <input type="submit" name="submit">
</form>

</body>
</html>