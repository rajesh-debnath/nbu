<?php  
if (isset($_POST["submit"])){
	$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$reg = filter_var($_POST["reg_no"], FILTER_SANITIZE_STRING);
	$session = filter_var($_POST["reg_session"], FILTER_SANITIZE_STRING);
	$course = filter_var($_POST["course"], FILTER_SANITIZE_STRING);
	$class_roll = filter_var($_POST["class_roll"], FILTER_SANITIZE_STRING);
	$m_number = filter_var($_POST["m_number"], FILTER_SANITIZE_STRING);
	$semester = filter_var($_POST["semester"], FILTER_SANITIZE_STRING);
	$mail = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
	$gender = filter_var($_POST["gender"], FILTER_SANITIZE_STRING);
	$dob = filter_var($_POST["dob"], FILTER_SANITIZE_STRING);
	$pwd = filter_var($_POST["pwd"], FILTER_SANITIZE_STRING);
	$repwd = filter_var($_POST["repwd"], FILTER_SANITIZE_STRING);
	$target_dir = "../s_profile_pic/";
	$pic = time() . '_' . basename($_FILES["pic"]["name"]);
    $uplodto = $target_dir . $pic;
    $imageFileType = strtolower(pathinfo($pic,PATHINFO_EXTENSION));
    $pic = filter_var($pic, FILTER_SANITIZE_STRING);


	include "connection.php";



	if ((empty($name)||empty($pic)||empty($reg)||empty($session)||empty($course)||empty($class_roll)||empty($m_number)||empty($semester)||empty($mail)||empty($gender)||empty($dob)||empty($pwd)||empty($repwd)) !== false) {
		

		header("location: ../stud_applicant.php?error=emptyinput");
		exit();
	}
	elseif ($_FILES["pic"]["size"] > 500000) {
		header("location: ../stud_applicant.php?error=imgwrongsize");
		exit();
    }
    elseif ($imageFileType != "jpg" && $imageFileType != "jpeg") {
		header("location: ../stud_applicant.php?error=imgwrongextent");
		exit();
	}
	elseif (($pwd !== $repwd) !== false) {
		header("location: ../stud_applicant.php?error=passwordsdonotmatch");
		exit();
	}
	else {
		move_uploaded_file($_FILES["pic"]["tmp_name"], $uplodto);
		$sqlins = "INSERT INTO stud_applicant (sa_profile_pic,	sa_name,	sa_gender,	sa_dob,	sa_reg_no,	sa_session,	sa_course,	sa_semester,  sa_class_roll,	sa_phn_no,	sa_mail,  sa_pwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sqlins)) {
		  header("location: ../stud_applicant.php?error=stmtfailed");
		  exit();
	}


	mysqli_stmt_bind_param($stmt, "ssssssssssss", $pic, $name, $gender, $dob, $reg, $session, $course, $semester, $class_roll, $m_number, $mail, $pwd);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);
	 header("location: ../stud_applicant.php?error=none");
	exit();
	}

}