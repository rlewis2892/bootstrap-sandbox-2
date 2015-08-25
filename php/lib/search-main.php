<div class="container">
	<!-- login modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title" id="login">Log In</h3>
				</div> 
				<div class="modal-body">
					<form id="profileController" class="form" method="post" action="../../php/controllers/profile-controller.php">
						<div class="form-group">
							<label for="UserId">User Name</label>
							<input type="text" class="form-control" id="UserId" placeholder="Choose a username">
						</div>
						<div class="form-group">
							<label for="hash1">Password</label>
							<input type="password" class="form-control" id="verifyPassword1" placeholder="password">
						</div>
						<div class="form-group">
							<button type="submit" class="btn modal-button">Create Account</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- sign up modal --> 
	<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signup">
		<div class="modal-dialog"> 
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title" id="sign-up">Create A New Account</h3>
				</div>
				<div class="modal-body">
					<form id="signUpForm" name="signUpForm" class="form" action="<?php echo $PREFIX?>php/controllers/sign-up-controller.php" method="post">
						<div class="form-group">
							<label for="userName">User Name</label>
							<input type="text" class="form-control" id="userName" name="userName" placeholder="choose a username">
						</div>
						<div class="form-group">
							<label for=password>Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="password">
						</div>
						<div class="form-group">
							<label for="verifyPassword">Verify Password</label>
							<input type="password" class="form-control" id="verifyPassword" name="verifyPassword" placeholder="verify password">
						</div>
						<div class="form-group">
							<label for="email">Email Address</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="email">
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label>
									<input type="checkbox" id="rememberMe[]" name="rememberMe" value="Remember Me">Remember Me
								</label>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn modal-button" id="submitButton" name="submitButton">Create Account</button>
						</div>
					</form>
					<div id="outputArea"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<h1 class="search-main-h1">Find a delicious, clean place to eat.</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form id="main-search" method="get" action="">
				<div class="main-search-align">
					<div class="input-group">
						<input id="mainSearch" name="mainSearch" type="search" class="form-control main-search input-lg" placeholder="Search in Albuquerque">
						<span class="input-group-btn">
							<button id="restaurant-search-submit" type="submit" class="btn btn-lg main-search-button"><i class="fa fa-search"></i></button>
						</span>
					</div>
				</div>
			</form>
		</div>
	</div>
</div><!--.container-->