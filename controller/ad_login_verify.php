
<?php session_start();
include 'connection.php';
include 'baseurlconfig.php';
$verify=0;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   echo $ad_username=filter_var($_POST['ad_username'], FILTER_SANITIZE_STRING);
  
    echo $ad_password=filter_var($_POST['ad_password'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM admin_login";
$result = mysqli_query($conn, $sql);
    while($admin_id_verify = mysqli_fetch_array($result)) {

      if ($ad_username==$admin_id_verify["ad_username"] && $ad_password==$admin_id_verify["ad_password"]) {
         $verify++;
      }
   }

if ($verify>0) {
   header("Location:".$baseurl."nbu/admin_dashboard.php");
}
else{
   echo "not ok";
}

}

?>
