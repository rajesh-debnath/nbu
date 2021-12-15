<?php include 'controller/connection.php';

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
</head>
<body>
	<form method="post" action="controller/ad_login_verify.php">
		<input type="text" name="ad_username">
		<input type="password" name="ad_password">
		<input type="submit" name="ad_submit">
		//
	</form>

</body>
</html>