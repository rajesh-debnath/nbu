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
	<title>Admin Dashboard</title>
</head>
<body>
	<form method="post" action="<?php echo $baseurl;?>admin_stud_list.php">
		<select name="sessions">
		<?php 
         $sql = "SELECT DISTINCT sa_session FROM stud_applicant Where sa_reg_no IN (SELECT sp_reg_no FROM stud_profile)";
            $result = mysqli_query($conn, $sql);

             while($sessions = mysqli_fetch_array($result)) { 
               ?> 
               <option value="<?php echo $sessions['sa_session']; ?>"><?php echo $sessions['sa_session']; ?></option>

  <?php
   }

    ?>
 </select>

		<select name="course">
 			<option value="mca">Masters of Computer Application</option>
 			<option value="msc_com">Masters of Computer Sc.</option>
 		</select>
		<input type="submit" name="ad_stud_submit">
	</form>
</body>
</html>