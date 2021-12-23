<?php session_start();
include 'controller/connection.php';
include 'controller/baseurlconfig.php';
 
 

if($_SESSION['ad_username'] == "" || !isset($_SESSION['ad_username'])) 
{
	header("Location:".$baseurl."admin_login.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$sessions = filter_var($_POST["sessions"], FILTER_SANITIZE_STRING);
	$course = filter_var($_POST["course"], FILTER_SANITIZE_STRING);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
</head>
<body>
	
		<?php 
         $sql = "SELECT stud_applicant.*,stud_profile.* FROM stud_applicant,stud_profile Where stud_applicant.sa_session='".$sessions."' AND stud_applicant.sa_course='".$course."' AND stud_applicant.sa_reg_no=stud_profile.sp_reg_no";
            $result = mysqli_query($conn, $sql);

             while($stud_list = mysqli_fetch_array($result)) { 
             	?>
               <label><?php   echo $stud_list['sa_reg_no'];?></label> 
                <label><?php echo $stud_list['sa_name'];?></label>
               <label><?php echo $stud_list['sa_course'];?></label>
                <label><?php echo $stud_list['sa_session'];?></label>
                <a href="<?php echo $baseurl;?>admin_stud_profile.php?stud_id=<?php   echo $stud_list['sa_reg_no'];?>"><button>View</button></a><br>

<?php
   }

    ?>

</body>
</html>