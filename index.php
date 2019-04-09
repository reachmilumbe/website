<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

		<!-- Core css -->
		<link rel="stylesheet" href="static/css/core.css">

		<title>Web Development | Music | Health | reachmilumbe.com</title>
	</head>

	<body>
		<!-- The Jombotron -->
		<div class="wrapper">
			<div class="container">
				<div class="row justify-content-md-center">
					<center>
						<h1 class="shadow-text">JOSEPH HEADSONLY MILUMBE</h1>
						<small><h4>Web Development | Microsoft Office Training | Teaching </h4></small>
						<a href="#contact"><button type="button" class="btn btn-dark btn-sm">SO LET'S GET STARTED</button></a>
					</center>
				</div>
			</div>
		</div>

		<!-- Contact Area -->
		<div class="container">
			<div class="row justify-content-md-center mt-5">
				<div class="col-md-8" id="contact">
					<center><h3>TALK TO ME</h3></center>
					<div id="error_display">

					</div>
					<form name="contact_form" action="phpscripts/Contact.php" method="POST" onsubmit="return formValidation()">
						<div class="form-group">
							<input type="text" class="form-control" id="" name="sender_name" placeholder="Your Name">
							<small><p id="name_disp" class="text-danger"></p></small>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" name="sender_email" aria-describedby="emailHelp" placeholder="Your Email">
							<small><p id="email_disp" class="text-danger"></p></small>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="msg_body" placeholder="Your message..."></textarea>
							<small><p id="msg_disp" class="text-danger"></p></small>
						</div>
						<button type="submit" name="msg_submit" class="btn btn-primary btn-block lightseagreen-btn">SEND MESSAGE</button>
					</form> 
				</div>
			</div>
		</div>

		<!-- The Social Icons Area -->
		<div class="container">
			<div class="row justify-content-md-center mt-5">
				<div class="col-md-4">
					<center><h3>SOCIAL</h3></center>
					<center>
						<ul class="social-icons">
							<li><a href="https://twitter.com/reachmilumbe" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://facebook.com/joseph.milumbe.7" target="_blank"><i class="fab fa-facebook"></i></a></li>
							<li><a href="mailto:reachmilumbe@gmail.com"><i class="fas fa-envelope"></i></a></li>
						</ul>
					</center>
					
				</div>
			</div>
		</div>

		<div class="container mt-5">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-sm-8 footer_top_line">
						<center><small><p id="footer_date">&copy </p></small></center>
					</div>
				</div>
			</div>
		</div>

		<!-- Core Javascript -->
		<script type="text/javascript" src="static/jav/core.js"></script>
		<!-- Framework Javascript -->
		<script type="text/javascript" src="static/jav/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="static/jav/popper.min.js"></script>
		<script type="text/javascript" src="static/jav/bootstrap.min.js"></script>
	</body>
</html>