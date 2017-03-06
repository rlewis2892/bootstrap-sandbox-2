<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"
				rel="stylesheet"/>

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
				<div class="logo text-center">
					<img class="logo-resize" src="images/abqueryname.png" alt="abquery logo">
				</div>
				<div class="container text-center">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3">
							<!-- <h2 class="search-text">Please Input an ABQ Address</h2> -->
							<div id="custom-search-input">
								<div class="input-group col-md-12">
									<input type="text" class="form-control input-lg" placeholder="ABQ Address"/>
									<span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<video autoplay loop muted poster="images/screenshot.jpg" id="background">
				<source src="images/backgroundmovie.mp4" type="video/mp4">
			</video>
		</main>
		<footer class="text-center">
			<div class="container foot-content">
				<div class="row">
					<div class="col-md-4">
						<p class="text-muted copy">Copyright &copy; ABQuery 2017</p>
					</div>
					<div class="col-md-4 col-md-offset-4">
						<a href="about-view.php"><p class="text-muted copy">About Us</p></a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>