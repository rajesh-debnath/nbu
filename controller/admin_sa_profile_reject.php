<?php session_start();
include 'connection.php';
include 'baseurlconfig.php';

if($_SESSION['ad_username'] == "" || !isset($_SESSION['ad_username'])) 
{
   header("Location:".$baseurl."admin_login.php");
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){
 $resone=filter_var($_POST['resone'], FILTER_SANITIZE_STRING);



 $sql = "INSERT INTO reject (r_reg_no,r_pwd,r_reason) VALUES ('".$_SESSION['pending_sa_reg_no']."','".$_SESSION['pending_sa_pwd']."','".$resone."' )";
  if ($conn->query($sql) === TRUE){ 


   unlink("../s_profile_pic/".$_SESSION['pending_sa_pic']);

   $sql1 = "DELETE FROM stud_applicant WHERE sa_reg_no='".$_SESSION['pending_sa_reg_no']."'";

   if (mysqli_query($conn, $sql1)) {
      header("Location:".$baseurl."admin_stud_applicant_pending.php?reject=successfull");  
   }
   else {
     header("Location:".$baseurl."admin_stud_applicant_pending.php?reject=unsuccessfull");
  }

} 
else {
  header("Location:".$baseurl."admin_stud_applicant_pending.php?reject=unsuccessfull");
}
}

?>