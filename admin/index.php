<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords"/>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
        <title>Login</title>
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>

		<div class="col-sm-3">
			
		</div>

		<div class="col-sm-6">
			
		
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<form action="admin_1.php" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input id="Username" name="Username" type="text" class="form-control input-lg" />
									<!--<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>-->
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password </label>
									<!--<a href="pages-recover-password.html" class="pull-right">Lost Password?</a>-->
								</div>
								<div class="input-group input-group-icon">
									<input id="Password" name="Password" type="Password" class="form-control input-lg" />
									<span class="input-group-addon">
										<a style="margin-left:5px;" onClick="eye()" class="icon icon-lg">
											<i class="fa fa-eye"></i>
										</a>
									</span>
								</div>
							</div>
							<script>
							    function eye(){
							     if(document.getElementById('Password').type=="password")
							        document.getElementById('Password').type= "text";
							     else
							        document.getElementById('Password').type = "password";
							    }
							</script>

							<div class="row">
								<div class="col-sm-8">
									<div class="input-group input-group-icon">
									<a href="forgotpassword.php" class="pull-left">Lost Password?</a>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" name="login" class="btn btn-primary hidden-xs">Sign In</button>
									<!--<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>-->
								</div>
							</div>

							<!--<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>-->

							<!--<p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a>-->

						</form>
					</div>
				</div>

			</div>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>