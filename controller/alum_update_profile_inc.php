<?php  
session_start();
include "connection.php";
if(!isset($_SESSION['userId'])){
	header("location: alum_login.php");
}
if (isset($_POST['update'])) {
	$ph_no = filter_var($_POST["phn_no"], FILTER_SANITIZE_STRING);
	$mail = filter_var($_POST["mail"], FILTER_SANITIZE_STRING);
	$job = filter_var($_POST["job"], FILTER_SANITIZE_STRING);
	$add = filter_var($_POST["add"], FILTER_SANITIZE_STRING);
	$sql1 = "UPDATE alum_applicant SET al_phn_no = '".$ph_no."', al_mail = '".$mail."' WHERE al_reg_no = '".$_SESSION['userId']."'";
    mysqli_query($conn, $sql1);
    $sql2 = "UPDATE alum_profile SET  alp_add = '".$add."' , alp_job = '".$job."' WHERE alp_reg_no = '".$_SESSION['userId']."'";
    mysqli_query($conn, $sql2);
	header("location: ../alum_profile.php");

}

?>