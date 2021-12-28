<!DOCTYPE html>
<html lang="en">
<head>
<title>Student Test Grade Prediction System</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />





	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //google fonts -->
	
	<!-- script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script> -->

	<script>
		$(document).click(function() {
		$("#todelete").remove();
		});
	</script>

</head>
<body>

<!-- header -->
<header>
	<div class="top-head container">
		<div class="ml-auto text-right right-p">
			<ul>
				<li class="mr-3">
					<span class="fa fa-clock-o"></span>Designed By Shubham</li>
				<li>
					<span class="fa fa-envelope-open"></span> <a href="mailto:www.samk8800@gmail.com">Mail any query to Shubham</a> </li>
			</ul>
		</div>
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
								
							
								
								<div id="">
								<?php

								

									if(isset($_POST["submit"]))
									{
									$hours = $_POST["hours"];
									echo "<br><br>";
									system("C:\\Users\\SHUBHAM\\AppData\\Local\\Programs\\Python\\Python37-32\\python.exe student_model.py ".$hours." 2>&1 -W ignore::DeprecationWarning");
									
									}

									?>
								</div>	
						

								
							
								
		
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
