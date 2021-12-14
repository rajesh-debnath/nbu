<?php  
if (isset($_POST["submit"])){
	$name = $_POST["name"];
	$pic = $_POST["pic"];
	$reg = $_POST["reg_no"];
	$session =$_POST["reg_session"];
	$course =$_POST["course"];
	$class_roll =$_POST["class_roll"];
	$m_number =$_POST["m_number"];
	$semester =$_POST["semester"];
	$mail =$_POST["email"];
	$gender =$_POST["gender"];
	$dob =$_POST["dob"];
	$pwd =$_POST["pwd"];
	$repwd =$_POST["repwd"];


	include "connection.php";



	if ((empty($name)||empty($pic)||empty($reg)||empty($session)||empty($course)||empty($class_roll)||empty($m_number)||empty($semester)||empty($mail)||empty($gender)||empty($dob)) !== false) {
		

		header("location: ../stud_applicant.php?error=emptyinput");
		exit();
	}
	elseif (($pwd !== $repwd) !== false) {
		header("location: ../stud_applicant.php?error=passwordsdonotmatch");
		exit();
	}
	else {
		$sqlins = "INSERT INTO stud_applicant (sa_profile_pic,	sa_name,	sa_gender,	sa_dob,	sa_reg_no,	sa_session,	sa_course,	sa_semester,	sa_class_roll,	sa_phn_no,	sa_mail	) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sqlins)) {
		  header("location: ../stud_applicant.php?error=stmtfailed");
		  exit();
	}


	mysqli_stmt_bind_param($stmt, "sssssssssss", $uid, $fname, $lname, $age, $trainno, $doj, $board, $dest, $boardtime, $coach, $seat);
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);
	header("location: ../ticket.php?error=none");
	exit();
	}

    










}