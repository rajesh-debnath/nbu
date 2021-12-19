<?php session_start();
include 'controller/connection.php';
include 'controller/baseurlconfig.php';
$verify=0;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $ad_username=filter_var($_POST['ad_username'], FILTER_SANITIZE_STRING);
  
    $ad_password=filter_var($_POST['ad_password'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM admin_login";
$result = mysqli_query($conn, $sql);
    while($admin_id_verify = mysqli_fetch_array($result)) {

      if ($ad_username==$admin_id_verify["ad_username"] && $ad_password==$admin_id_verify["ad_password"]) {
         $verify++;
      }
   }

if ($verify>0) {
   header("Location:".$baseurl."admin_dashboard.php");
   $_SESSION['ad_username']=$ad_username;

}
else{
   echo "not ok";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<input type="text" name="ad_username">
		<input type="password" name="ad_password">
		<input type="submit" name="ad_submit">
	</form>

</body>
</html>