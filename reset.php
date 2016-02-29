<?php
	require_once("site_dim.php");
	require_once("db-config.php");
	require_once("menu.php");
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
<!-- Basic Page Head -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ARCT - Architects Corporate Template</title>
<meta name="description" content="ARCT - Architects Corporate Template">
<meta name="author" content="Loco Theme - locotheme.com">
<meta name="keywords" content="architects, architect, multipurpose, html5 template, premium template, theme, corporate">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<link rel="apple-touch-icon" href="assets/img/apple-touch-icon-precomposed.png">

<!-- Css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="assets/css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="assets/css/bxslider.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Khand:300,400,500,600,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- Site Loader -->
<?php
	if($loader==1)
	{
		echo '<div class="site-loader"><img src="assets/img/loader.gif" alt="Loading"></div>';
	}
?>
<!-- Site Loader End -->

<!-- Site Back Top -->
<div class="site-back-top" title="Back to top"></div>
<!-- Site Back Top End -->

<!-- Site Background -->
<div class="site-background"></div>
<!-- Site Background End -->

<div class="site-container">
	<!-- Site Menu Button -->
	<button class="site-toggle" type="button"><i class="fa fa-bars"></i></button>
	<!-- Site Menu Button End -->
	
	<!-- Site Menu -->
	<?php 
		$menu = new Menu();
		$menu->menu_generator();
		$menu = NULL;
	?>
	<!-- Site Menu End -->
	
	<!-- Site Content -->
	<div class="site-wrapper">
		<div class="site-page shadow-top">
			<!-- Page Title -->
			<h1 class="center">Contact Us</h1>
			<!-- Page Title End -->
			
			<!-- Page Description -->
			<h2 class="title-border center">An award-winning architecture &amp; interior design studio</h2>
			<!-- Page Description End -->
			
			<!-- Space -->
			<div class="space"></div>
			<!-- Space End -->
			
			<!-- Grid Row -->
			<div class="row margin-none" centered>
				
				
				<!-- Grid Col -->
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-none col-md-offset-3">
					<div class="box-white padding-all">
						<!--h2 class="title-border right block-mobile">Contact Form</h2-->
						<div class="data-form">

						<?php 
								if (isset($_GET['encrypt'])&&isset($_GET['action'])) 
								{ 

									$encrypt = mysqli_real_escape_string($dbc,$_GET['encrypt']);
								    $query = "SELECT * FROM users where md5(96*17+username)='".$encrypt."'";

								    $result = mysqli_query($dbc,$query);
								    $Results = mysqli_fetch_array($result);
								    $username = $Results['username'];
								    if(count($Results)>=1)
								    {
								       // $query = "update users set password='".md5($password)."' where id='".$Results['id']."'";
								        //mysqli_query($dbc,$query);
								
								        //$message = "Your password changed sucessfully <a href=\"http://demo.phpgang.com/login-signup-in-php/\">click here to login</a>.";
								   
									?>

									<form action="secure_reset.php" method="post">
										<div class="row">
													<input type="hidden" name="username" value="<?php echo $username ?>">
																					
											
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" centered>
												<label>Password</label>
												<div class="form-field">
													<i class="fa fa-lock"></i>
													<input type="password" name="pass" placeholder="Enter your password"  maxlength="10" required>
												</div>
											</div>
											
										</div>
										<div class="row">
											<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" centered>
												<label>Confirm password</label>
												<div class="form-field">
													<i class="fa fa-lock"></i>
													<input type="password" name="pass2" placeholder="Enter your password" maxlength="10" required>
												</div>
											</div>
											
										</div>
										
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-md-offset-5">
												<input type="submit" class="btn btn-dark" value="  RESET PASSWORD  " centered>
											</div>
										</div>
									</form>

							<?php 
								}
								
						else{
								
								echo '<h4>Invalid reset link!<br /><br />The link may have expired. Please try again.</h4><hr>';
							}
						}

						?>

						</div>
					</div>
				</div>
				<!-- Grid Col End  -->

			</div>
			<!-- Grid Row End -->
			
			<!-- Space -->
			<div class="space"></div>
			<!-- Space End -->
			
		</div>
	</div>
	<!-- Site Content End -->
</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/jquery.countTo.js"></script>
<script src="assets/js/jquery.fitvids.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/imagesloaded.pkgd.js"></script>
<script src="assets/js/masonry.pkgd.js"></script>
<script src="assets/js/bxslider.js"></script>

<!-- Map Scripts -->
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="assets/js/gmap3.js"></script>

<!-- Custom Scripts -->
<script src="assets/js/scripts.js"></script>
</body>
</html>