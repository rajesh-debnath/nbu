 <?php 
		if (isset($_GET["error"])) {
			if ($_GET["error"] == "emptyinput") {
				$a = "*Fill In All The Inputs";
			}
			elseif ($_GET["error"] == "passwordsdonotmatch") {
				$a = "*enter same password";
			}
			elseif ($_GET["error"] == "imgwrongsize") {
				$a = "*Sorry, your file is too large";
			}
			elseif ($_GET["error"] == "imgwrongextent") {
				$a = "*Sorry, your file is not jpg or jpeg";
			}
			elseif ($_GET["error"] == "none") {
				$a = "*application taken";
			}
			else{
				$a = " ";
			}
		}
		?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Applicant</title>
</head>
<body>
<form action="controller/stud_applicant.inc.php" method="post" enctype="multipart/form-data">
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
<div name=error> <?php echo $a ?></div>

</body>
</html>