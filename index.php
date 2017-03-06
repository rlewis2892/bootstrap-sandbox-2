<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet"/>

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<title>ABQuery Splash Demo</title>
	</head>
	<body class="sfooter">
		<main class="sfooter-content">

			<div class="logo-search">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-4 text-center">
							<img class="img-responsive" src="images/abqueryname.png" alt="abquery logo">

							<!-- search field -->
							<form>
								<div class="form-group">
									<label for="searchAddress" class="sr-only">Search an Albuqueruqe Address</label>
									<div class="input-group">
										<input id="searchAddress" name="searchAddress" type="text" class="form-control input-lg" placeholder="ABQ Address"/>
										<div class="input-group-btn">
											<button class="btn btn-default btn-lg" type="button">
												<i class="glyphicon glyphicon-search"></i>
											</button>
										</div>
									</div>
								</div>
							</form>

						</div><!--/.col-*-->
					</div><!--/.row-->
				</div><!--/.container-->
			</div><!--/.logo-search-->

			<!-- background video -->
			<video autoplay loop muted poster="images/screenshot.jpg" id="background">
				<source src="images/backgroundmovie.mp4" type="video/mp4">
			</video>

		</main>

		<footer>
			<div class="container text-center">
				<div class="row">
					<div class="col-md-4">
						<p class="text-muted copy">Copyright &copy; ABQuery 2017</p>
					</div>
					<div class="col-md-4 col-md-offset-4">
						<p class="text-muted copy">
							<a href="about-view.php">About Us</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>