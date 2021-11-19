<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Test Grade Prediction System</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>

<!-- header -->
<header>
	<div class="top-head container">
		<div class="ml-auto text-right right-p">
			<ul>
				<li class="mr-3">
					<span class="fa fa-clock-o"></span>Designed By Hackveda</li>
				<li>
					<span class="fa fa-envelope-open"></span> <a href="mailto:yash_sharma@hackveda.in">yash_sharma@hackveda.in</a> </li>
			</ul>
		</div>
	</div>
	<div class="container">
		<!-- nav
		<nav class="py-3 d-lg-flex">
			<div id="logo">
				<h1> <a href="index.html"><img src="images/s2.png" alt=""> Child Learn </a></h1>
			</div>
			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu ml-auto mt-1">
				<li class="active"><a href="index.html">Home</a></li>
				<li class=""><a href="#about">About</a></li>
				<li class=""><a href="#services">Services</a></li>
				<li class=""><a href="#stats">Stats</a></li>
				<li class=""><a href="#testi">Testimonials</a></li>
				<li class=""><a href="#team">Teachers</a></li>
				<li class=""><a href="#subscribe">Subscribe</a></li>
			</ul>
		</nav>
		<!-- //nav -->  -->
	</div>
</header>
<!-- //header -->

<!-- banner -->
<div class="banner" id="home">
	<div class="layer">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text-w3pvt">
					<!-- banner slider-->
					<div class="csslider infinity" id="slider1">
						<input type="radio" name="slides" checked="checked" id="slides_1" />
						<input type="radio" name="slides" id="slides_2" />
						<input type="radio" name="slides" id="slides_3" />
						<ul class="banner_slide_bg">
							<li>
								<div class="container-fluid">
									<div class="w3ls_banner_txt">
										<h3 class="b-w3ltxt text-capitalize mt-md-4">Student Test Grade Prediction System</h3>
										<h4 class="b-w3ltxt text-capitalize mt-md-2">Designed Using Linear Regression</h4>
			
										<a href="#about" class="btn btn-banner my-3">Read More</a>
									</div>
								</div>
							</li>
							
						</ul>
						
					</div>
					<!-- //banner slider-->
				</div>
				<div class="col-lg-5 col-md-8 px-lg-3 px-0">
					<div class="banner-form-w3 ml-lg-5">
						<div class="padding">
							<!-- banner form -->
							<form action="index.php" method="post">
								<h5 class="mb-3">Enter Information To Predict</h5>
								<div class="form-style-w3ls">
									<input placeholder="Student Name" name="name" type="text" required="">
									<input placeholder="Student RollNumber" name="rno" type="text" required="">
									<select>
									  <option value="0">Course</option>
									  <option value="1">BCA</option>
									  <option value="1">MCA</option>
									  <option value="1">B.Tech</option>
									  <option value="1">B.VOC</option>
									  <option value="1">B.SC</option>
									</select>
									<input placeholder="Student Hours_Studied" name="hours" type="text" required="">
									
									<!--<input placeholder="Password" name="password" type="password" required=""> -->
									<button Class="btn" name="submit"> Click To Predict</button>
									<span>By registering, you agree to our <a href="#">Terms & Conditions.</a></span>
								</div>
								
								<?php

								if(isset($_POST["submit"]))
								{
								$hours = $_POST["hours"];
								echo "<br><br>";
								system("C:\\Users\\YASH\\AppData\\Local\\Programs\\Python\\Python37-32\\python student_model.py ".$hours." 2>&1 -W ignore::DeprecationWarning");
								
								}
								
								?>
		
							</form>
							<!-- //banner form -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
</body>
</html>