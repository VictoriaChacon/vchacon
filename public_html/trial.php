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
		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
		<!---------Google Font---------------->
		<link href="https://fonts.googleapis.com/css?family=Oswald:300," rel="stylesheet">

		<!-------------SWIPEBOX Css code/ link ------------------------>
		<link rel="stylesheet" href="css/swipebox.css">
		<!---------------recaptcha---------------------->
		<script src='https://www.google.com/recaptcha/api.js'></script>


		<!--ADD CUSTOM JS FILES HERE -->
		<!--LINK HERE=-->
		<title>Victorious Design</title>

	</head>
	<body>
		<header>
			<nav class="navbar.transparent navbar-inverse">
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
		<!----------------------------------------------------------------------->
		<!------------------------------ Home Section---------------------------->
		<!----------------------------------------------------------------------->
		<section class="home" id="homepage">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<!--------------------------Jumbotron------------------------------>
						<div class="jumbotron">
							<h1>Web Designer, Graphic Designer, Writer, and Artist</h1>
							<p>From web design,graphic design, photography, illustration, and writing Victorious Design can
								help you build your brand </p>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--------------------------------------------------------------------->
		<!----------------------------About Me--------------------------------->
		<!--------------------------------------------------------------------->
		<section class="aboutMe" id="aboutMe">
			<div class="container">
				<div class="row">
					<div class="image, col-xs-4 col-md-offset-10">
						<h1 class="titlePage">About Me</h1>

						<div><p>I am a fifty bagels thought of simply as almanacs. The unturfed television
								reveals itself as a northmost typhoon to those who look. Visitors are hoggish flutes. The
								milkshake
								of a neon becomes an unled epoxy.

								This could be, or perhaps they were lost without the changing organisation that composed their
								shampoo. Their syrup was, in this moment, a housebound receipt. Soybeans are negroid circles. A
								longhand sunshine without balineses is truly a =representative of pukka taxicabs.</p>
						</div>
					</div>
					<div class="col-xs-4 col-md-offset 12">
						<img src="images/victoriaVector.jpg" class="aboutMeImage">
					</div>
				</div>
			</div>
		</section>
		<!------------------------------------------------------------------->
		<!-------------------------Portfoilo--------------------------------->
		<!------------------------------------------------------------------->
		<section class="portfolio" id="portfolioPage">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1 class="titlePage"> Most Recent Work </h1>
						<!----------------carousel object here with most recent work-------->
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<div class=".col-xs-12">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									<li data-target="#carousel-example-generic" data-slide-to="3"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="images/pinkFlower.jpg" alt="pink flower">
										<div class="carousel-caption">
											<h1 class="captionTitle">The Alamo Tour</h1>
											<p class="captionDescription">San Antonio Texas</p>
										</div>
									</div>
									<div class="item">
										<img src="images/road2redone.jpg" alt="road to Colorado">
										<div class="carousel-caption">

										</div>
									</div>
									<div class="item">
										<img src="images/benchClose.jpg" alt="bench at the Albuquerque Zoo">
										<div class="carousel-caption">

										</div>
									</div>
									<div class="item">
										<img src="images/foodie.jpg" alt="crumbtrail app">
										<div class="carousel-caption">

										</div>
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" role="button"
										data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button"
										data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
							<!-------------------carosuel end--------------------------------->
							<!-------------------SWIPEBOX html here???------------------------>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<h1 class="titlePage"> Other Works</h1>
						<a href="images/yellowflower.jpg" class="swipebox" title="Yellow Flower">
							<img src="images/yellowflower.jpg" alt="yellow flower">
						</a>
					</div>
				</div>
		</section>
		<div class="blankspace"
		<!-------------------------------------------------------------->
		<!-------------------Contact Me--------------------------------->
		<!-------------------------------------------------------------->
		<section class="contactMe">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
					</div>
					<h1 class="titlePage"> Contact Me </h1>

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
								<textarea class="form-control" rows="5" id="message" name="message"
											 placeholder="Message (2000 characters max)"></textarea>
							</div>
						</div>

						<!-- reCAPTCHA -->
						<div class="g-recaptcha" data-sitekey="6Le2sykTAAAAAEdf0SSQXqkshfF_6jNfbye1-4WU
"></div>
						<!----------------google recaptcha----------------->


						<button class="btn btn-info" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
						<button class="btn btn-info" type="reset"><i class="fa fa-ban"></i> Reset</button>
					</form>

					<!--empty area for form error/success output-->
					<div class="row">
						<div class="col-xs-12">
							<div id="output-area"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>