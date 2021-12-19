<?php
session_start();
include "controller/connection.php";
if(!isset($_SESSION['userId'])){
	header("location: stud_login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>profile</title>
</head>
<body>
	<?php  
	if($_SESSION['verified'] == 0){
	?>
	<div><p>your profile is under verifying process</p>
		<p>wait for 48 hrs or contact the office</p></div>
	<?php }
	elseif ($_SESSION['userName'] == 'rejected') {
	?>
	<div><p>Your profile is rejected for</p></div>
	<div><p><?php echo $_SESSION['reason']; ?></p></div>
	<?php }
	elseif ($_SESSION['verified'] == 0) {
	?>
	<div><p>profile code</p></div>
	<?php }
	else{
	?>
	<div><p>something went wrong</p></div>
	<?php } ?>


</body>
</html>