<?php  
session_start();
include "connection.php";
if (isset($_POST["register"])){
	$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$reg = filter_var($_POST["reg_no"], FILTER_SANITIZE_STRING);
	$session = filter_var($_POST["session"], FILTER_SANITIZE_STRING);
	$course = filter_var($_POST["course"], FILTER_SANITIZE_STRING);
	$m_number = filter_var($_POST["phn_no"], FILTER_SANITIZE_STRING);
	$mail = filter_var($_POST["mail"], FILTER_SANITIZE_STRING);
	$gender = filter_var($_POST["gender"], FILTER_SANITIZE_STRING);
	$dob = filter_var($_POST["dob"], FILTER_SANITIZE_STRING);
	$pwd = filter_var($_POST["pwd"], FILTER_SANITIZE_STRING);
	$repwd = filter_var($_POST["repwd"], FILTER_SANITIZE_STRING);
	$target_dir = "../s_profile_pic/";
	$pic = time() . '_' . basename($_FILES["pic"]["name"]);
    $uplodto = $target_dir . $pic;
    $imageFileType = strtolower(pathinfo($pic,PATHINFO_EXTENSION));
    $pic = filter_var($pic, FILTER_SANITIZE_STRING);





$verify=0;

$sql = "SELECT * FROM alum_profile WHERE alp_reg_no='".$reg."'";
$result = mysqli_query($conn, $sql);
    while($al_reg = mysqli_fetch_array($result)) {

      if ($reg==$al_reg["alp_reg_no"]) {
         $verify++;
      }
   }




	if ((empty($name)||empty($pic)||empty($reg)||empty($session)||empty($course)||empty($m_number)||empty($mail)||empty($gender)||empty($dob)||empty($pwd)||empty($repwd)) !== false) {
		

		header("location: ../alum_applicant_register.php?error=emptyinput");
		exit();
	}

	elseif ($verify>0) {
		header("location: ../alum_applicant_register.php?error=regexist");
		exit();
	}



	elseif ($_FILES["pic"]["size"] > 200000) {
		header("location: ../alum_applicant_register.php?error=imgwrongsize");
		exit();
    }
    elseif ($imageFileType != "jpg" && $imageFileType != "jpeg") {
		header("location: ../alum_applicant_register.phpt.php?error=imgwrongextent");
		exit();
	}
	elseif (($pwd !== $repwd) !== false) {
		header("location: ../alum_applicant_register.php?error=passwordsdonotmatch");
		exit();
	}
	else {
		move_uploaded_file($_FILES["pic"]["tmp_name"], $uplodto);
		$sqlins = "INSERT INTO alum_applicant (al_profile_pic,	al_name,	al_gender,	al_dob,	al_reg_no,	al_session,	al_course,	al_phn_no,	al_mail,  al_pwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sqlins)) {
		  header("location: ../alum_applicant_register.php?error=stmtfailed");
		  exit();
		}


	mysqli_stmt_bind_param($stmt, "ssssssssss", $pic, $name, $gender, $dob, $reg, $session, $course, $m_number, $mail, $pwd);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);
	session_unset();
	session_destroy();
	header("Location:".$baseurl."../alum_applicant_register.php?error=none");
	exit();
	}

}