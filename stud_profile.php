<?php
session_start();
include "controller/connection.php";
if(!isset($_SESSION['userId'])){
	header("location: stud_login.php");
}
if($_SESSION['verified'] == 1){
	$sql1 = "SELECT * FROM stud_applicant WHERE sa_reg_no = ?";
		$sa_stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($sa_stmt, $sql1)) {
		  header("location: ../stud_login.php?error=stmt1failed");
		  exit();
		}

		mysqli_stmt_bind_param($sa_stmt, "s", $_SESSION['userId']);
		mysqli_stmt_execute($sa_stmt);

		$r_result = mysqli_stmt_get_result($sa_stmt);
		if (mysqli_num_rows($r_result) === 1) {
			$row1 = mysqli_fetch_assoc($r_result)
			$sql2 = "SELECT * FROM stud_profile WHERE sp_reg_no = ?";
			$sp_stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($sp_stmt, $sql2)) {
			  header("location: ../stud_login.php?error=stmt2failed");
			  exit();
			}

			mysqli_stmt_bind_param($sp_stmt, "s", $row1['sa_reg_no']);
			mysqli_stmt_execute($sp_stmt);

			$r_result = mysqli_stmt_get_result($sp_stmt);
			if (mysqli_num_rows($r_result) === 1) {
				$row2 = mysqli_fetch_assoc($r_result)
			}
		}
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
	elseif ($_SESSION['verified'] == 0 && $_SESSION['userName'] == 'rejected') {
	?>
	<div><p>profile code</p></div>
	<?php }
	else{
	?>
	<div><p>something went wrong</p></div>
	<?php } ?>


</body>
</html>