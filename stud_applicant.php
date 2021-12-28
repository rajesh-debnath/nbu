 <?php include 'controller/baseurlconfig.php'; ?>
 <?php 
 $a="";
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

 }
 else{
 	$a = " ";
 }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Applicant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet"> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </head>
 <body>


<!-- navbar start -->

        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
            
             <a class="navbar-brand" href="#"><img src="<?php echo $baseurl; ?>website_pic\logo.png" alt="logo" width="10%"><span class="ml-5">UNIVERSITY OF NORTH BENGAL</span></a>
    <!--for search box -->
            <form class="d-flex ml-10">
      <input class="form-control mr-sm-2 flex-row-reverse" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-sm-0 bg-primary text-dark" type="submit">Search</button>
        </form>
        <!--end search option  -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About NBU</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>    
      
    </ul>
  </div>  
   
</nav>
                        
    
                <!-- Navbar End -->

   <!--  stud_reg start  -->
 	<form action="controller/stud_applicant.inc.php" method="post" enctype="multipart/form-data">
 		<input type="file" name="pic"><br>
 		<input type="text" name="name"><br>
 		<input type="text" name="reg_no" placeholder="reg_no"><br>
 		<input type="text" name="reg_session"><br>
 		<select name="course">
 			<option value="mca">Masters of Computer Application</option>
 			<option value="msc_com">Masters of Computer Sc.</option>
 		</select><br>
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
 	<div name="error"> <?php echo $a ?></div>

 </body>
 </html>