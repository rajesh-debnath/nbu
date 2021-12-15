<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Applicant</title>
</head>
<body>
<form action="controller/stud_applicant.inc.php" method="post">
	<input type="file" name="pic"><br>
	<input type="text" name="name"><br>
	<input type="text" name="reg_no"><br>
	<input type="text" name="reg_session"><br>
	<input type="text" name="course"><br>
	<input type="text" name="class_roll"><br>

	<!-- end of part 1 -->

	<input type="radio" name="gender" value="male">
	<label for="male">Male</label>
	<input type="radio" name="gender" value="female">
	<label for="female">Female</label>
	<input type="radio" name="gender" value="other">
	<label for="other">Other</label><br>
	<input type="text" name="semester"><br>
	<input type="date" name="dob"><br>

	<!-- end of part 2 -->

	<input type="text" name="m_number"><br>
	<input type="text" name="email"><br>
	<input type="password" name="pwd"><br>
	<input type="password" name="repwd"><br>
	<input type="submit" name="submit">
</form>
<?php 
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				echo "<p><b>*Fill In All The Inputs</b></p>";
			}
			elseif ($_GET["error"] == "passwordsdonotmatch") {
				echo "<p><b>*enter same password</b></p>";
			}
		}
		?>
</body>
</html>