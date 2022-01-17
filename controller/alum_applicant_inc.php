<?php 
include 'connection.php';
include 'baseurlconfig.php';



	if (isset($_POST['check'])) {
		$reg_no = $_POST["reg_no"];
		$sql = "SELECT * FROM stud_profile WHERE sp_reg_no = '".$reg_no."'";
		$result = mysqli_query($conn, $sql);
		$sql0 = "SELECT * FROM alum_applicant WHERE al_reg_no = '".$reg_no."'";
		$result0 = mysqli_query($conn, $sql0);
		if (mysqli_num_rows($result) === 1){
			if (mysqli_num_rows($result0) === 1) {
			header("location: ../alum_applicant_regno.php?error=registration exists");
			}
			else{
			header("location: ../alum_applicant_regno.php?reg=".$reg_no."");
			}
		}
		else {
			header("location: ../alum_applicant_register.php?");
		}


	}
	elseif (isset($_POST['register'])) {
		$reg_no = $_POST["reg_no"];
		$pwd = $_POST["pwd"];
		$sql1 = "SELECT * FROM stud_applicant WHERE sa_reg_no = '".$reg_no."' AND sa_pwd = '".$pwd."'";
		$result1 = mysqli_query($conn, $sql1);
		if (mysqli_num_rows($result1) === 1){
			$row = mysqli_fetch_assoc($result1);
			if ($row['sa_reg_no'] === $reg_no && $row['sa_pwd'] === $pwd) {
				$sql2 = "INSERT INTO alum_applicant (al_profile_pic,	al_name,	al_gender,	al_dob,	al_reg_no,	al_session,	al_course,	al_phn_no,	al_mail,  al_pwd) VALUES ('".$row['sa_profile_pic']."', '".$row['sa_name']."', '".$row['sa_gender']."', '".$row['sa_dob']."', '".$row['sa_reg_no']."', '".$row['sa_session']."',  '".$row['sa_course']."', '".$row['sa_phn_no']."', '".$row['sa_mail']."', '".$row['sa_pwd']."')";
				mysqli_query($conn, $sql2);
				header("Location: ../alum_applicant_register.php?error=none");
				exit();
			}
		}

	}
	else {
		header("location: ../index.php?");
	}







?>