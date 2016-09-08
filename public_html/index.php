<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!--what does this do again-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<!-- sets the content to take up the entire viewport?-->
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!--Bootstrap stuff here-->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!--ADD CUSTOM CSS HERE-->
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!--jQuery-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
		<!---------Google Font---------------->
		<link href="https://fonts.googleapis.com/css?family=Oswald:300," rel="stylesheet">


		<!--ADD CUSTOM JS FILES HERE -->
		<!--LINK HERE=-->
		<title>Victorious Design</title>

	</head>
	<body>
		<header>
			<!------------place Navbar here---------------->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!--Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
								  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php"><img src="images/vc-logo-white.png"></a>
					</div>

					<!--Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#homepage">Home</a></li>
							<li><a href="#">About Me</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Contact Me</a></li>
						</ul>
					</div><!--.navbar-collapse -->
				</div> <!--.container-fluid-->
			</nav>
		</header>
		<main>
			<div class="logo .col-xs-12">
				<img src="images/vc-logo-white.png">
			</div>
			<!------------place Jumbotron here------------>
			<div class="container">
				<div class="col-xs-12">
					<div class="col-lg-12">
						<div class="jumbotron">
							<h1>Graphic Designer, Web Developer, Artist </h1>
						</div>
					</div>
				</div>
			</div>
			<!------------------------End Jumbotron----------------------------->\
			<!------------------------Begin Home Here------------------------>
			<div id="homepage">
				<div class="container . col-lg-12 .col-md-6">
					<a id="homepage"></a>
					<p>Hello! Welcome to my webpage. Scroll down to learn more about Victorious Desgin and what I can do for
						you and your next project.</p>

				</div>
			</div>
			<!----------------------------Begin About Me Page----------------->
			<div class=container>
				<div id="aboutMe">
					<div class=imageAbout>
						<h1>About Me</h1>
						<img src="../public_html/images/victoriaVector.jpg">
						<p class="aboutmetext">I am a fifty bagels thought of simply as almanacs. The unturfed television
							reveals itself as a northmost typhoon to those who look. Visitors are hoggish flutes. The milkshake
							of a neon becomes an unled epoxy.

							This could be, or perhaps they were lost without the changing organisation that composed their
							shampoo. Their syrup was, in this moment, a housebound receipt. Soybeans are negroid circles. A
							longhand sunshine without balineses is truly a representative of pukka taxicabs.</p>
					</div>
				</div>
			</div>
			<!-----------------------------END about me page------------------->
			<!-----------------------Being Portfolio Page--------------------->
			<div class="row">
				<div class="col-xs-6 col-md-3">
					<a href="#" class="thumbnail">
						<img src="../public_html/images/johndoe.jpg" alt="johndoe">

					</a>
					<div class="row">
						<div class="col-xs-6 col-md-3">
							<a href="#" class="thumbnail">
								<img src="../public_html/images/victoriaVector.jpg" alt="Victoria">
							</a>
						</div>
					</div>
				</div>
				...
			</div>
			<!----------------------------contact form----------------------------->
			<!--Begin Contact Form-->
			<form id="contact-form" action="php/mailer.php" method="post">
				<div class="form-group">
					<label for="name">Name <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="name" name="name" placeholder="Name">
					</div>
				</div>
				<div class="form-group">
					<label for="email">Email <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="subject">Subject</label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
					</div>
				</div>
				<div class="form-group">
					<label for="message">Message <span class="text-danger">*</span></label>
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
					</div>
				</div>

				<!-- reCAPTCHA -->
				<div class="g-recaptcha" data-sitekey="--YOUR RECAPTCHA SITE KEY--"></div>

				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</form>

			<!--empty area for form error/success output-->
			<div class="row">
				<div class="col-xs-12">
					<div id="output-area"></div>
				</div>
			</div>
		</main>
	</body>
</html>
