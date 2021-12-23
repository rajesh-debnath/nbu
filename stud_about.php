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
			$row1 = mysqli_fetch_assoc($r_result);
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
				$row2 = mysqli_fetch_assoc($r_result);
			}
		}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>about change</title>
</head>
<body>
<form action="controller/stud_about.inc.php" method="post">
	<input type="text" name="phn_no" value="<?php echo $row1['sa_phn_no'];?>" ><br>
	<input type="text" name="mail" value="<?php echo $row1['sa_mail'];?>"><br>
	<input type="text" name="father" value="<?php echo $row2['sp_f_name'];?>"><br>
	<input type="text" name="mother" value="<?php echo $row2['sp_m_name'];?>"><br>
	<textarea rows="4" cols="50" name="add"><?php echo $row2['sp_add'];?> </textarea><br>
	<button type="submit" name="change">Change about</button>
</form>
</body>
</html>