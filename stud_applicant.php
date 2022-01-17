 <?php include 'controller/baseurlconfig.php';
 
 $result="";
 if (isset($_GET["error"])) {
 	if ($_GET["error"] == "emptyinput") {
 		$result = "*Fill In All The Inputs";
 	}
 	elseif ($_GET["error"] == "passwordsdonotmatch") {
 		$result = "*Enter same password";
 	}
 	elseif ($_GET["error"] == "imgwrongsize") {
 		$result = "*Sorry, your file is too large";
 	}
 	elseif ($_GET["error"] == "imgwrongextent") {
 		$result = "*Sorry, your file is not jpg or jpeg";
 	}
 	elseif ($_GET["error"] == "regexist") {
 		$result = "*Registration no. is allready exist";
 	}
    elseif ($_GET["error"] == "none") {
       header("location:".$baseurl."stud_login.php?result=applicationtaken");
    }

 }
 else{
 	$result = " ";
 }



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Student Registration</title>
    <link rel = "icon" href = "<?php echo $baseurl; ?>website_pic\logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"> -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo $baseurl; ?>js/sa_registration.js"></script>
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
input::-webkit-input-placeholder {
    font-size: 12px;
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
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo $baseurl; ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="https://www.nbu.ac.in/abt/about.aspx">About NBU</a>
                </li>   
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo $baseurl; ?>contact.php">Contact Us</a>
                </li>   
            </ul>
        </div>
    </div>
</nav>


<!-- Navbar End -->

<!--  stud_reg start  -->
<div class="container" style="padding-top: 95px;">
    <div class="row">
        <div class="col-md-8">
            <div class="header">
                <h1 style="font-family:Bahnschrift Light" >Register Yourself</h1> <!--  -->
                <br>
                <h6 class="mb-4 pb-0 text-uppercase text-muted" >Personal Information</h6>
                <hr class="mt-3 pt-0" >
                <form action="controller/stud_applicant.inc.php" method="post" enctype="multipart/form-data">
                    <div class="field-set">
                        <p class="text-danger" name="error"> <?php echo $result; ?></p>
                        <input type="file" id="sa_pic" name="pic">
                        <label class="text-primary small">image < 200kb and .jpg or .jpeg format</label>
                        <p id="e_pic" class="text-danger small"></p>
                        <table class="table table-borderless font-weight-bold ">
                            <tr>

                               <td><label for="name" class="tdh w-75">Name:</label></td>
                               <td class="tdi w-75 "><input type="text" id="sa_name" name="name" placeholder="Enter Your Full Name(max:30charecters)" onkeyup="s_a_name()">
                                <p id="e_n" class="text-danger small"></p></td>
                            </tr>

                            <tr>
                                <td><label>Gender:</label></td>
                                <td class="mt-3">
                                    <label for="male">Male</label><input type="radio" name="gender" id="male" value="Male"/>
                                    <label for="female">Female</label><input type="radio" name="gender" id="female" value="Female"/>
                                    <label for="other">Other</label><input type="radio" name="gender" id="other" value="Other"/>
                                    <p id="e_gender" class="text-danger small"></p>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="dob">Date of Birth:</label></td>
                                <td><input type="date" name="dob" id="dob"/>
                                    <p id="e_dob" class="text-danger small"></p>
                                </td>
                                

                            </tr>
                            <tr>
                                <td><label for="course">Course:</label></td>
                                <td><select name="course" id="sa_course">
                                    <option value="">--select--</option>
                                    <option value="MCA">Masters of Computer Application</option>
                                    <option value="Msc. Computer">Masters of Computer Sc.</option>
                                </select>
                                <p id="e_course" class="text-danger small"></p>
                            </td>

                        </tr>
                        <tr>
                            <td><label for="semester">Semester:</label></td>
                            <td><select name="semester" id="sa_semester">
                                <option value="">--select--</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                            <p id="e_semester" class="text-danger small"></p>
                        </td>


                    </tr>
                    <tr>
                        <td><label for="class_roll">Class Roll:</label></td>
                        <td><input type="text" id="sa_class_roll" name="class_roll" placeholder="Enter your class roll" onkeyup="s_a_class_roll()">
                            <p id="e_class_roll" class="text-danger small"></p>
                        </td>

                    </tr>
                </table>
            </div>
            <br>
            <!-- end of part 1 -->


            <hr class="mt-3 pt-0">
            <div class="field-set">
                <table class="table table-borderless font-weight-bold">
                    <tr>
                        <td><label for="reg_no" class="tdh w-75">Registration Number:</label></td>
                        <td class="tdi w-75"><input type="text" id="sa_reg_no" name="reg_no" placeholder="Enter your 13 digit registration number" onkeyup="s_a_reg_no()">
                            <p id="e_reg_no" class="text-danger small"></p>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="reg_session">Registration Session:</label></td>
                        <td><input type="text" id="sa_session" name="reg_session" placeholder="Enter your session(e.g.:2001-2002)" onkeyup="s_a_session()">
                            <p id="e_session" class="text-danger small"></p>
                        </td>
                    </tr>


                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="text" id="sa_email" name="email" id="email" placeholder="Enter your Email Id(e.g.: example@abc.com)" onkeyup="s_a_email()" />
                            <p id="e_email" class="text-danger small"></p>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="m-number">Mobile Number:</label></td>
                        <td><input type="text" id="sa_mobile" name="m_number" placeholder="Enter your 10 digit mobile number" onkeyup="s_a_mobile()">
                            <p id="e_mobile" class="text-danger small"></p>
                        </td>
                    </tr>

                </table>
            </div>


            <hr class="mt-3 pt-0">
            <div class="field-set">

                <table class="table table-borderless font-weight-bold">


                   <tr>
                    <div class="small"><span class="font-weight-bold text-dark">Note: Password should Contain atleast:</span><br>
                        <span  id="uc">One uppercase latter. </span>
                        <span  id="sym">One symbol like !,@,$,%,*. </span>
                        <span  id="num">One number. </span>
                        <span  id="min_char">Minimum 8 charecters. </span>
                        <span  id="max_char">Maximum 20 charecters. </span></div>
                        <td><label for="pwd">Password:</label></td>
                        <td><input type="password" id="sa_pass1" name="pwd" placeholder="Enter Your password" onkeyup="s_a_checking1()">
                            <p id="e_pass1" class="text-danger small"></p>

                        </td>


                        <tr>
                            <td><label for="repwd">Confirm Password:</label></td>
                            <td><input type="password" id="sa_pass2" name="repwd" placeholder="Re-enter your  password" onkeyup="s_a_checking2()">
                                <p id="e_pass2" class="text-danger small"></p>
                            </td>
                        </tr>

                    </table> 
                </div>


                <!-- end of part 2 -->
                <div class="submit text-center pb-3">
                 <button type="button" id="submit" class="btn btn-outline-success mx-3"  name="button" onclick="validateForm()">Register</button>
             </div>

         </form>
     </div>
 </div>


 <div class="col-md-4 pb-3 text-muted" style="padding-top: 78px;">
    <h4>Registered !</h4>
    <hr>
    <br />
    <a href="<?php echo $baseurl; ?>stud_login.php" class="btn btn-outline-success mx-3 ">Login Here</a>
</div>
</div>
</div>




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