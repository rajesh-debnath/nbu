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

         header("Location:".$baseurl."admin_alum_applicant_pending.php?approve=successfull");
      } 
      else {
        header("Location:".$baseurl."admin_alum_applicant_pending.php?approve=unsuccessfull");
     }
  }
}

?>