<?php include 'controller/baseurlconfig.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
	<link rel = "icon" href = "<?php echo $baseurl; ?>website_pic\logo.png" type = "image/x-icon">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- 	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	      rel="stylesheet"> -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="<?php echo $baseurl; ?>js/sa_registration.js"></script>
</head>
<style type="text/css">
	
	input[type=text]{
      width: 95%;
      padding: 10px;  
      box-sizing: border-box;
      border-radius:4px;
      border: 1px solid #ccc; 
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
   <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: rgba(194, 194, 214, 1.0);">
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

<!-- <div class="container" style="padding-top: 95px;">
    <div class="row">
        <div class="col-md-6">
            <div class="header">
                <h1 style="font-family:Bahnschrift Light" >Drop Us a Message</h1>
               
                <br>
                <hr class="mt-2 pt-0" >
                 <p class="text-info">Do You have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
                <form action="#" method="post">
                    <div class="field-set">	
                    	 <table class="table table-borderless font-weight-bold ">
                            <tr>

                               <td><label for="name">Your Name:</label></td>
                               <td><input type="text" id="sa_name" name="name" placeholder="Enter Your Full Name(max:30charecters)" onkeyup="s_a_name()">
                                <p id="e_n" class="text-danger small"></p></td>
                            </tr>
                             <tr>
                        <td><label for="email">Your Email:</label></td>
                        <td><input type="text" id="sa_email" name="email" id="email" placeholder="Enter your Email Id(e.g.: example@abc.com)" onkeyup="s_a_email()" />
                            <p id="e_email" class="text-danger small"></p>
                        </td>
                    </tr>
                    <tr>

                               <td><label for="name">Your Message:</label></td>
                               <td ><textarea class="form-control" type="text" id="msg" name="msg" placeholder="Enter Your Message(max:30charecters)"></textarea>
                                
                            </tr>
                        </table>
                    </div>
                <div class="submit text-center pb-3">
                 <button type="button" id="submit" class="btn btn-outline-primary mx-3"  name="button" onclick="validateForm()">Submit</button>
             	</div>

                </form>
            </div>
        </div>

-->
<center>
<div class="col-md-6 pb-3 text-muted" style="padding-top: 44px;">
    <h4>The Team</h4>
    <hr>
    <div class="bg-light p-5 mx-auto mt-3 mb-3" style="max-width:600px;">
  <div id="carouselTestimonial" class="carousel carousel-testimonial slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselTestimonial" data-slide-to="0" class="active"></li>
    <li data-target="#carouselTestimonial" data-slide-to="1"></li>
    <li data-target="#carouselTestimonial" data-slide-to="2"></li>
  </ol>
 <!--  slide 1 -->
 <div class="carousel-inner">
    <div class="carousel-item text-center active">
    <div class="carousel-testimonial-img p-1  m-auto">
      <img class="d-inline-block align-top w-25 rounded-circle" src="<?php echo $baseurl; ?>website_pic\ana.jpg"  alt="pic">
    </div>
    <h5 class="mt-4 mb-0"><strong class="text-danger text-uppercase">Anamika Das</strong></h5><br>
    <h6 class="text-dark m-0">Web Developer</h6>
    <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, consectetur adipiscing elit varius quam at, luctus dui. Mauris magna metus consectetur adipiscing elit.</p>
    </div>
<!--  slide 1 end-->

   <div class="carousel-item text-center">
    <div class="carousel-testimonial-img p-1  m-auto">
       <img class="d-inline-block align-top w-50 rounded-circle" src="<?php echo $baseurl; ?>website_pic\rajesh.jpg"  alt="logo">
    </div>
    <h5 class="mt-4 mb-0"><strong class="text-danger text-uppercase">rajesh debnath</strong></h5>
    <h6 class="text-dark m-0">Web Designer</h6>
    <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, consectetur adip varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel.</p>
    </div>
    <!-- slide 2 end -->

    <div class="carousel-item text-center">
    <div class="carousel-testimonial-img p-1  rounded-circle m-auto">
       <img class="d-inline-block align-top w-25 rounded-circle" src="<?php echo $baseurl; ?>website_pic\sandipan.png"  alt="">
    </div>
    <h5 class="mt-4 mb-0"><strong class="text-danger text-uppercase">sandipan pal</strong></h5>
    <h6 class="text-dark m-0">Seo Analyst</h6>
    <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, consectetur adipiscing elit consectetur adipiscing elit luctus dui. Mauris magna metus.</p>
    </div> 
    <!-- slider 3 end -->

     <div class="carousel-item text-center">
    <div class="carousel-testimonial-img p-1  rounded-circle m-auto">
       <img class="d-inline-block align-top w-25 rounded-circle" src="<?php echo $baseurl; ?>website_pic\su.jpg"  alt="logo">
    </div>
    <h5 class="mt-4 mb-0"><strong class="text-danger text-uppercase">subham pramanic</strong></h5>
    <h6 class="text-dark m-0">Seo Analyst</h6>
    <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, consectetur adipiscing elit consectetur adipiscing elit luctus dui. Mauris magna metus.</p>
    </div>
   <!--  slider 4 end -->
   </div>
  <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  				</div>
			</div>
		</div>
	</div>
 </div>  
</center>
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