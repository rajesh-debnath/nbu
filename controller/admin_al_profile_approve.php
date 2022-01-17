<?php session_start();
include 'connection.php';
include 'baseurlconfig.php';

if($_SESSION['ad_username'] == "" || !isset($_SESSION['ad_username'])) 
{
   header("Location:".$baseurl."admin_login.php");
}



if (isset($_GET["operation"])){

   if ($_GET["operation"] == "1") {
      $sql = "INSERT INTO alum_profile (alp_reg_no) VALUES ('".$_SESSION['pending_al_reg_no']."')";
        if ($conn->query($sql) === TRUE){
        $sql1 = "DELETE FROM stud_applicant WHERE sa_reg_no='".$_SESSION['pending_al_reg_no']."'";
        $result1 = mysqli_query($conn, $sql1); 
        $sql2 = "DELETE FROM stud_profile WHERE sp_reg_no='".$_SESSION['pending_al_reg_no']."'";
        $result2 = mysqli_query($conn, $sql2); 
        $sql3 = "DELETE FROM reject WHERE r_reg_no='".$_SESSION['pending_al_reg_no']."'";
        $result3 = mysqli_query($conn, $sql3); 


         header("Location:".$baseurl."admin_alum_applicant_pending.php?approve=successfull");
      } 
      else {
        header("Location:".$baseurl."admin_alum_applicant_pending.php?approve=unsuccessfull");
     }
  }
}

?>