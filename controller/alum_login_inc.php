<?php

if (isset($_POST["login"])) {
	$reg_no = $_POST['reg_no'];
	$pwd = $_POST['pwd'];

	include "connection.php";


	if ((empty($reg_no) || empty($pwd)) !== false) {
		header("location: ../stud_login.php?error=emptyinput");
		exit();
	}

	$sql1 = "SELECT * FROM alum_applicant WHERE al_reg_no = ? AND al_pwd = ?;";
	$al_stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($al_stmt, $sql1)) {
	  header("location: ../alum_login.php?error=stmt1failed");
	  exit();
	}

	mysqli_stmt_bind_param($al_stmt, "ss", $reg_no, $pwd);
	mysqli_stmt_execute($al_stmt);

	$al_result = mysqli_stmt_get_result($al_stmt);

	$sql2 = "SELECT * FROM alum_profile WHERE alp_reg_no = ?;";
	$al_prof_stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($al_prof_stmt, $sql2)) {
	  header("location: ../alum_login.php?error=stmt2failed");
	  exit();
	}

	mysqli_stmt_bind_param($al_prof_stmt, "s", $reg_no);
	mysqli_stmt_execute($al_prof_stmt);

	$al_prof_result = mysqli_stmt_get_result($al_prof_stmt);


	if (mysqli_num_rows($al_result) === 1) {
		$row = mysqli_fetch_assoc($al_result);
		if ($row['al_reg_no'] === $reg_no && $row['al_pwd'] === $pwd) {
			session_start();
			$_SESSION['userName'] = $row['al_name'];
			$_SESSION['userId'] = $row['al_reg_no'];
			if (mysqli_num_rows($al_prof_result) === 1) {
				$_SESSION['verified'] = 1;
				header("location: ../alum_profile.php?error=youareloggedin");
				exit();
			}
			else {
				$_SESSION['verified'] = 0;
				header("location: ../alum_profile.php?error=youarenotverified");
			}
		}
		else {
			header("location: ../alum_login.php?error=wrongidpass");
		}	
				
	}
	else {
		$sql = "SELECT * FROM reject WHERE r_reg_no = ? AND r_pwd = ?;";
		$r_stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($r_stmt, $sql)) {
		  header("location: ../alum_login.php?error=stmt3failed");
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
				$_SESSION['reason'] = $row['r_resone'];
				$_SESSION['verified'] = 0;
				header("location: ../alum_profile.php?error=rejected");
				exit();
			}	
		}
		else {
			header("location: ../alum_login.php?error=wronglogin");
		}
	}
	mysqli_stmt_close($al_stmt);
	mysqli_stmt_close($al_prof_stmt);
	mysqli_stmt_close($r_stmt);

	}


else{
	header("location: ../alum_login.php?error=why");
}


