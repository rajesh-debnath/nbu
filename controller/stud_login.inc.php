<?php

if (isset($_POST["login"])) {
	$reg_no = $_POST['reg_no'];
	$pwd = $_POST['pwd'];

	include "connection.php";


	if ((empty($reg_no) || empty($pwd)) !== false) {
		header("location: ../stud_login.php?error=emptyinput");
		exit();
	}

	$sql1 = "SELECT * FROM stud_applicant WHERE sa_reg_no = ? AND sa_pwd = ?;";
	$sa_stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($sa_stmt, $sql1)) {
	  header("location: ../stud_login.php?error=stmt1failed");
	  exit();
	}

	mysqli_stmt_bind_param($sa_stmt, "ss", $reg_no, $pwd);
	mysqli_stmt_execute($sa_stmt);

	$sa_result = mysqli_stmt_get_result($sa_stmt);

	$sql2 = "SELECT * FROM stud_profile WHERE sp_reg_no = ?;";
	$s_prof_stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($s_prof_stmt, $sql2)) {
	  header("location: ../stud_login.php?error=stmt2failed");
	  exit();
	}

	mysqli_stmt_bind_param($s_prof_stmt, "s", $reg_no);
	mysqli_stmt_execute($s_prof_stmt);

	$s_prof_result = mysqli_stmt_get_result($s_prof_stmt);


	if (mysqli_num_rows($sa_result) === 1) {
		$row = mysqli_fetch_assoc($sa_result);
		if ($row['sa_reg_no'] === $reg_no && $row['sa_pwd'] === $pwd) {
			session_start();
			$_SESSION['userName'] = $row['sa_name'];
			$_SESSION['userId'] = $row['sa_reg_no'];
			if (mysqli_num_rows($s_prof_result) === 1) {
				$_SESSION['verified'] = 1;
				header("location: ../stud_profile.php?error=youareloggedin");
				exit();
			}
			else {
				$_SESSION['verified'] = 0;
				header("location: ../stud_profile.php?error=youarenotverified");
			}
		}
		else {
			header("location: ../stud_login.php?error=wrongidpass");
		}	
				
	}
	else {
		$sql = "SELECT * FROM reject WHERE r_reg_no = ? AND r_pwd = ?;";
		$r_stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($r_stmt, $sql)) {
		  header("location: ../stud_login.php?error=stmt3failed");
		  exit();
		}

		mysqli_stmt_bind_param($r_stmt, "ss", $reg_no, $pwd);
		mysqli_stmt_execute($r_stmt);

		$r_result = mysqli_stmt_get_result($r_stmt);
		if (mysqli_num_rows($r_result) === 1) {
			$row = mysqli_fetch_assoc($r_result);
			if ($row['r_reg_no'] === $reg_no && $row['r_pwd'] === $pwd) {
				session_start();
				$_SESSION['userName'] = 'rejected';
				$_SESSION['userId'] = $row['r_reg_no'];
				$_SESSION['reason'] = $row['r_reason'];
				$_SESSION['verified'] = 0;
				header("location: ../stud_profile.php?error=rejected");
				exit();
			}	
		}
		else {
			header("location: ../stud_login.php?error=wronglogin");
		}
	}
	mysqli_stmt_close($sa_stmt);
	mysqli_stmt_close($s_prof_stmt);
	mysqli_stmt_close($r_stmt);

	}


else{
	header("location: ../stud_login.php?error=why");
}


