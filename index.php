<!DOCTYPE html>
<html>
	<head lang="en">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Custom CSS Goes HERE -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<title>Venn Diagram</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<header>
				<div class="container">
					<h1>CSS Venn Diagram</h1>
				</div>
			</header>
			<main>
				<div class="container">
					<div class="panel panel-default m-b-4">
						<div class="panel-body">
							<p class="h4">A mobile-first, fully responsive Venn diagram made with Flexbox. Author: Rochelle Lewis</p>
							<p>On xs screens (< 768px), the Venn diagram defaults to a vertical layout, and flips to a horizontal layout on screens > 768px. The relative units of measure rems, percentage and vw have been favored over hard pixel sizes. All centering has been handled with flexbox rules, and the overlap with negative margins. This example has been made to fully integrate with Bootstrap. If not using bootstrap, be sure that <code>box-sizing: border-box;</code> has been set on the Venn diagram to ensure the animation works as it does here in this example.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-xs-12">

							<!-- Begin Venn Diagram-->
							<div id="venn">
								<div>
									<p>venn 1</p>
								</div>
								<div>
									<p>venn 2</p>
								</div>
							</div><!--/#venn-->
						</div><!--/.col-->
					</div><!--/.row-->

					<h3>HTML</h3>
					<pre>
&lt;!-- Begin Venn Diagram--&gt;
&lt;div id="venn"&gt;
  &lt;div&gt;
    &lt;p&gt;venn 1&lt;/p&gt;
  &lt;/div&gt;
  &lt;div&gt;
    &lt;p&gt;venn 2&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;&lt;!--/#venn--&gt;</pre>

					<h3>CSS</h3>
					<pre>
/**
* Venn Diagram Styles
**/
#venn {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
}

#venn div {
  width: 50vw;
  height: 50vw;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

#venn div:hover {
  border: 5rem solid rgba(0,0,0,0.1);
  box-shadow: 0 0 0 2rem rgba(0,0,0,0.15);
  -webkit-box-shadow: 0 0 0 2rem rgba(0,0,0,0.15);
  -webkit-transition: all 250ms ease-in-out;
  -moz-transition: all 250ms ease-in-out;
  -ms-transition: all 250ms ease-in-out;
  -o-transition: all 250ms ease-in-out;
  transition: all 500ms ease-in-out;
}

#venn div:first-child {
  background-color: rgba(255,0,0,0.5);
}

#venn div:nth-child(2) {
  background-color: rgba(0,255,255,0.5);
  margin: -10vw 0 0 0;
}

/* venn styles for sm, md, lg breakpoints*/
@media only screen and (min-width: 768px) {

  #venn {
    flex-direction: row;
  }

  #venn div {
    width: 25vw;
    height: 25vw;
  }

  #venn div:nth-child(2) {
    margin: 0 0 0 -5vw;
  }
}</pre>
				</div>
			</main>
		</div>
	</body>
</html>