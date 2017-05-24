<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css" type="text/css">

		<!-- Custom CSS Goes HERE -->
		<link rel="stylesheet" href="css/waypoints-styles.css" type="text/css">
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery v3.0 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js" type="text/javascript"></script>

		<!-- Waypoints.js -->
		<script src="js/jquery.waypoints.min.js" type="text/javascript"></script>

		<!-- Custom Waypoints JavaScript File -->
		<script src="js/custom-waypoints.js" type="text/javascript"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<title>Waypoints Example</title>
	</head>
	<body class="sfooter">

		<div class="sfooter-content">

			<section class="welcome bg-purple">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="jumbotron text-center animated bounceInDown">
								<h2>Scroll Down</h2>
								<p>To see page content come into view.</p>
								<span class="fa-stack fa-2x animated bounce infinite">
									<i class="fa fa-circle-thin fa-stack-2x"></i>
									<i class="fa fa-arrow-down fa-stack-1x"></i>
								</span>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- BEGIN WAYPOINT SECTION -->
			<section>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div id="waypoint-1" class="animated waypoint">
								<h2>Section One</h2>
								<p class="lead">You did exactly what you had to do. You considered all your options, you tried every alternative and then you made the hard choice. Yes, absolutely, I do indeed concur, wholeheartedly! Travel time to the nearest starbase? Why don't we just give everybody a promotion and call it a night - 'Commander'? The Enterprise computer system is controlled by three primary main processor cores.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- BEGIN WAYPOINT SECTION -->
			<section>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div id="waypoint-2" class="animated waypoint text-right">
								<h2>Section Two</h2>
								<p class="lead">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- BEGIN WAYPOINT SECTION -->
			<section>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<div id="waypoint-3" class="animated waypoint">
								<h2>Section Three</h2>
								<p class="lead">Fixie cronut try-hard gochujang kickstarter activated charcoal. Cliche tumeric single-origin coffee master cleanse enamel pin occupy keffiyeh, biodiesel YOLO woke twee cray narwhal adaptogen celiac. Farm-to-table four loko mumblecore, affogato vegan cred hexagon ennui lyft wolf thundercats lumbersexual dreamcatcher listicle wayfarers. </p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- BEGIN INSTRUCTIONS SECTION -->
			<section class="bg-purple">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div id="waypoint-4" class="jumbotron animated waypoint">
								<h2 class="text-center">Instructions</h2>
								<p>This demo requires two dependencies: <a href="https://daneden.github.io/animate.css/" target="_blank">Animate.css</a> and <a href="http://imakewebthings.com/waypoints/" target="_blank">Waypoints.js</a>. Download these and add to your project files. Add links to your &lt;head&gt; tag.</p>
								<p>You'll need to add the proper classes to your animated sections in your HTML. Look for the <strong>animated</strong> and <strong>waypoint</strong> classes.</p>
								<p>Each animated section also needs an <strong>id</strong>.</p>
								<p>You'll need to create a custom JavaScript/jQuery file to program the behavior of the animated sections. See <strong>custom-waypoints.js</strong> file in this project.</p>
								<p>There were only three css rules I <em>needed</em> to add to bring this all togther. Those specific styles are in the <strong>waypoints-styles.css</strong> file. All other css styles are purely cosmetic!</p>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div><!--/.sfooter-content-->

		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 text-center waypoint animated">
						View on <a href="https://github.com/rlewis2892/bootstrap-sandbox-2/tree/troi-waypoints" target="_blank">GitHub.</a> Meow!
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>