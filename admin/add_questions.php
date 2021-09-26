<?php
 date_default_timezone_set("Asia/Karachi");
	SESSION_START();
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) { // 30mins
    	session_unset();
    	session_destroy();
	}
	$_SESSION['LAST_ACTIVITY'] = time();
    if($_SESSION["login"]==true){
	}
	else{
		echo "<script> window.location.assign('index.php')</script>";
	}
include("include/conn.php");
?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
		<title>MMT</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

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
		<section class="body">

			<?php include('include/header.php')?>
			<?php include('include/sidebar.php')?>
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Add Questions</h2>

						
					</header>

					<!-- start: page -->
						<div class="row">
							<div class="col-lg-12">
								<section class="panel">
									<header class="panel-heading">
										
									</header>
									<div class="panel-body">
										<form class="form-horizontal form-bordered" action="" method="post" enctype="multipart/form-data">

											<div class="form-group">
												<label class="col-md-3 control-label" >Question</label>
												<div class="col-md-6">
													<input type="text" id="question" name="question" class="form-control" placeholder="" required >
												</div>
											</div>

											<div class="form-group">
												<label class="col-md-3 control-label" >Answer</label>
												<div class="col-md-6">
													<input type="text" class="form-control" name="reply" id="reply" required >
												</div>
											</div>

											<div class="form-btn">
												<div class="col-md-6">
												  <span class="input-group-btn">
								                     <button class="btn btn-primary" type="Submit" name="Submit" style="margin-left:50%;">Submit</button>
												  </span>
												</div>
											</div>
											</form>
                                        <?php
                                            if (isset($_POST['Submit']))
                                            {
                                                $question = $_POST['question'];
                                                $reply = $_POST['reply'];
                                                $sql = "INSERT INTO chatbot_hints (questions, reply)
                                                VALUES ('$question' , '$reply')";
                                                $run_query= @mysqli_query($conn, $sql);
                    
                                            
                                                if($run_query){
                                                    echo "<script> alert('Successfully Added') </script>";
                                                    echo "<script> window.location.assign('add_questions.php') </script>";
                                                    exit();
                                                }
                                                else{
                                                    echo "<script> alert('Something Went Wrong! ') </script>";
                                                    echo("Error description: " . mysqli_error($conn));
                                                    exit();
                                                }
                                            }
                                        ?>
						           </section>
							</div>
						</div>
					</div>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-autosize/jquery.autosize.js"></script>
		<script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>

		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>
