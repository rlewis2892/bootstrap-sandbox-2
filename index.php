<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!--Bootstrap Drawer Menu CSS-->
		<link rel="stylesheet" href="css/bootstrap-drawer.min.css" type="text/css"/>

		<!--Font Awesome-->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>

		<!-- My Custom CSS rlewis37@cnm.edu -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!--Bootstrap Drawer js-->
		<script type="text/javascript" src="js/drawer.min.js"></script>

		<title>Bootstrap Drawwwurrrr</title>
	</head>
	<body class="sfooter has-drawer">

		<div class="sfooter-content">

			<!-- --------------------------------- -->
			<!-- begin drawer example here         -->
			<!-- --------------------------------- -->

			<div id="drawerExample" class="drawer drawer-right drawer-inverse dw-xs-10 dw-sm-6 dw-md-4 fold" aria-labelledby="drawerExample">
				<div class="drawer-contents">

					<!--drawer heading-->
					<div class="drawer-heading">
						<h2 class="drawer-title">Menu</h2>
					</div>

					<!--drawer body-->
					<div class="drawer-body">
						<p>
							This is a properly padded container for content in the
							drawer that isn't a navigation.
						</p>
						<a href="#">A Regular Link</a>
					</div>

					<!--drawer nav links-->
					<ul class="drawer-fullnav">
						<li role="presentation" class="active"><a href="#">Home</a></li>
						<li role="presentation"><a href="#">Profile</a></li>
						<li role="presentation"><a href="#">Messages</a></li>
					</ul>

					<!--drawer footer-->
					<div class="drawer-footer locked">
						<small>&copy; drawer footer here</small>
					</div>
				</div><!--.drawer-contents-->
			</div><!--#drawer-example-->

			<!-- --------------------------------- -->
			<!-- content as usual below the drawer -->
			<!-- --------------------------------- -->

			<header>
				<nav>
					<div class="container-fluid">
						<div class="row">

							<!--logo/brand-->
							<div class="col-xs-10 col-sm-6">
								<a href="#"><h2>Open the Drawer!</h2></a>
							</div>

							<!--nav drawer control-->
							<div class="col-xs-2 col-sm-6">
								<div class="nav-toggle pull-right">
									<a href="#drawerExample" data-toggle="drawer" aria-foldedopen="false" aria-controls="drawerExample"><i class="fa fa-bars fa-3x"></i></a>
								</div><!--/.nav-toggle-->
							</div><!--/.col-xs-12-->
						</div><!--/.row-->
					</div><!--/.container-fluid-->
				</nav>
			</header>

			<main>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12">
							<p>Nifty handy-dandy side drawer menu that works with default Bootstrap (requires jQuery). Documentation: <a href="http://clineamb.github.io/bootstrap-drawer/">http://clineamb.github.io/bootstrap-drawer/</a>http://clineamb.github.io/bootstrap-drawer/</p>
						</div>
					</div>
				</div>
			</main>
		</div><!--.sfooter-content-->

		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">

					</div>
				</div>
			</div>
		</footer>
	</body>
</html>