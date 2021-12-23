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
	<p>Student</p>
	<ul>
		<li><a href="<?php echo $baseurl;?>admin_stud_applicant_pending.php"> Pending Applicant</a></li>
		<a href="<?php echo $baseurl;?>admin_search_stud.php"><li>MCA / MSc.Computer sc.</li></a>
	</li>
	</ul>

</body>
</html>