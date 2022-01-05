<?php  
session_start();
include "connection.php";
if(!isset($_SESSION['userId'])){
	header("location: stud_login.php");
}
if (isset($_POST['submit'])) {
	$ph_no = filter_var($_POST["phn_no"], FILTER_SANITIZE_STRING);
	$mail = filter_var($_POST["mail"], FILTER_SANITIZE_STRING);
	$father = filter_var($_POST["father"], FILTER_SANITIZE_STRING);
	$mother = filter_var($_POST["mother"], FILTER_SANITIZE_STRING);
	$add = filter_var($_POST["add"], FILTER_SANITIZE_STRING);
	$sql1 = "UPDATE stud_applicant SET sa_phn_no = '".$ph_no."', sa_mail = '".$mail."' WHERE sa_reg_no = '".$_SESSION['userId']."'";
    mysqli_query($conn, $sql1);
    $sql2 = "UPDATE stud_profile SET sp_f_name = '".$father."', sp_m_name = '".$mother."', sp_add = '".$add."' WHERE sp_reg_no = '".$_SESSION['userId']."'";
    mysqli_query($conn, $sql2);
	header("location: ../stud_profile.php");

}

?>