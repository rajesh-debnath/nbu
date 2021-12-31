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
 <style type="text/css">
 
input[type=text],input[type=date],input[type=password],select{
  width: 95%;
  padding: 10px;  
  box-sizing: border-box;
  border-radius:4px;
  border: 1px solid #ccc; 
}
input[type=radio]{

width: 10%;
cursor:pointer;
 }
 </style>
 <body>


<!-- navbar start -->

                <div class="wrapper">
            <header class="header">
                <div class="topbar bg-dark">
                    <a class="navbar-brand ml-2 " href="#"><img class="d-inline-block align-top" src="<?php echo $baseurl; ?>website_pic\logo.png" alt="logo" width="10%"><span class="ml-5 text-light font-weight-bolder">University of North Bengal</span></a>
     <!--  <input  type="search" placeholder="Search">
        <span class="fa fa-search"></span> -->
     </header>
   </div>
   <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: rgba(194, 194, 214, 0.8);">
    <div class="container" >
        <div class="mr-auto">
            <input  type="search" placeholder="Search">
            <button class="btn-sm btn-outline-dark my-sm-0 bg-primary text-light ml-2" type="submit">Search</button>
        </div>
        <!-- <span class="fa fa-search"></span> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav font-weight-bold ml-auto ">
                <li class="nav-item active">
                    <a class="nav-link " href="<?php echo $baseurl; ?>index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="#">About NBU</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="#">Change Password</a>
                </li> 
                <li class="nav-item active" >
                    <a class="nav-link" href="#">Log Out</a>
                </li>    

            </ul>
        </div>
    </div>
   </nav>
                        
    
                <!-- Navbar End -->

 <!--  stud_reg start  -->
    <div class="container" style="padding-top: 95px;">
        <div class="row">
            <div class="col-md-6">
                <div class="header">
                    <h1 style="font-family:Bahnschrift Light" >Register Yourself</h1> <!--  -->
                    <br>
                    <h6 class="mb-4 pb-0 text-uppercase text-muted" >Personal Information</h6>
                    <hr class="mt-3 pt-0" >
     	<form action="controller/stud_applicant.inc.php" method="post" enctype="multipart/form-data">
            <div class="field-set">
                <input type="file" name="pic">
                <table class="table table-borderless font-weight-bold ">
                    <tr>
                            
                       <td><label for="name" class="tdh w-75">Name:</label></td>
                        <td class="tdi w-75 "><input type="text" name="name" placeholder="Enter your full name"></td>
                    </tr>

                    <tr>
                    <td><label>Gender:</label></td>
                    <td class="mt-3">
                        <label for="male">Male</label><input type="radio" name="gender" id="male" value="Male"/>
                        <label for="female">Female</label><input type="radio" name="gender" id="female" value="Female"/>
                        <label for="other">Other</label><input type="radio" name="gender" id="other" value="Other"/>
                    </td>
                </tr>
                <tr>
                    <td><label for="dob">Date of Birth:</label></td>
                    <td><input type="date" name="dob" id="dob"/></td>
                        
                </tr>
                <tr>
                    <td><label for="course">Course:</label></td>
                    <td><select name="course" >
                        <option value="MCA">Masters of Computer Application</option>
                        <option value="Msc. Computer">Masters of Computer Sc.</option>
                       </select></td>
                </tr>
                <tr>
                    <td><label for="semester">Semester:</label></td>
                    <td><input type="text" name="semester" placeholder="Enter your Semester" /></td>
                        
                </tr>
                <tr>
                    <td><label for="class_roll">Class Roll:</label></td>
                    <td><input type="text" name="class_roll" placeholder="Enter your class roll"></td>
                        
                </tr>
            </table>
            </div>
     		 <br>
 <!-- end of part 1 -->

             <h6 class="mb-4 pb-0 text-uppercase text-muted" style="font-family:Bahnschrift Light">Sign-in Information</h6>
             <hr class="mt-3 pt-0">
            <div class="field-set">
                <table class="table table-borderless font-weight-bold">
                <tr>
                    <td><label for="reg_no" class="tdh w-75">Registration Number:</label></td>
                    <td class="tdi w-75"><input type="text" name="reg_no" placeholder="Enter your registration number">
                    </td>
                </tr>
                 <tr>
                    <td><label for="reg_session">Registration Session:</label></td>
                    <td><input type="text" name="reg_session" placeholder="Enter your session">
                    </td>
                </tr>
                

                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" name="email" id="email" placeholder="Enter your Email Id(e.g.: example@abc.com)"/>
                    </td>
                </tr>

                 <tr>
                    <td><label for="pwd">Password:</label></td>
                    <td><input type="password" name="pwd" placeholder="Enter Your password">
                    </td>
                </tr>
                <tr>
                    <td><label for="repwd">Confirm Password:</label></td>
                    <td><input type="password" name="repwd" placeholder="Enter your  password ">
                    </td>
                </tr>

                <tr>
                    <td><label for="m-number">Mobile Number:</label></td>
                    <td><input type="text" name="m_number" placeholder="Enter your 10 digit mobile number">
                    </td>
                </tr>
            </div>
        </table>
 <!-- end of part 2 -->
            <div class="submit text-center pb-3">
                 <button type="submit" class="btn btn-outline-success mx-3"  name="submit">Register</button>
            </div>
             <!-- <p class="link p-3 font-weight-bold text-center">Have already registered? <a href=" echo $baseurl; ?>stud_login.php">Login Here</a></p> -->
     		</form>
                    </div>
                </div>
            </div>
        
            <div class="col-md-6 pb-3 text-muted" style="padding-top: 78px;">
                <h4>Registered !</h4>
               <hr>
           <br />
               <a href="<?php echo $baseurl; ?>stud_login.php" class="btn btn-outline-success mx-3 ">Login Here</a>
           </div>
        </div>
    </div>

     	<div name="error"> <?php echo $a ?></div>

        <!-- Footer -->
        <footer class="page-footer font-small bg-dark">

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3 text-white">© 2021 Copyright:

          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->

 </body>
 </html>