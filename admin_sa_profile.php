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
</head>
<body>
   <img src="s_profile_pic/<?php echo $pic;?>" style="width:60px;height:80px;"><br>
   <p><?php echo $gender;?></p><br>
   <p><?php echo $dob;?></p><br>
   <p><?php echo $reg_no;?></p><br>
   <p><?php echo $session;?></p><br>
   <p><?php echo $course;?></p><br>

   <!-- end of part 1 -->

   <p><?php echo $semester;?></p><br>
   <p><?php echo $class_roll;?></p><br>
  <p><?php echo $ph_no;?></p><br>

   <!-- end of part 2 -->

   <p><?php echo $email;?></p><br>

   <a href="<?php echo $baseurl;?>controller/admin_sa_profile_approve.php?operation=1"><button>Approve</button></a>

   <button onclick="reject.style.display='block'">Reject</button>

   <form id="reject" style="display: none;" method="post" action="<?php echo $baseurl;?>controller/admin_sa_profile_reject.php">
      <input type="text" name="resone">
      <input type="submit" name="Reject">

   </form>


</body>
</html>