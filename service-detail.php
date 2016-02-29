<?php
require_once("menu.php");
require_once("site_dim.php");
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<!-- Basic Page Head -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $site_title; ?></title>
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
			<h1 class="center">Interior Design</h1>
			<!-- Page Title End -->
			
			<!-- Page Description -->
			<h2 class="title-border center">An award-winning architecture &amp; interior design studio</h2>
			<!-- Page Description End -->
			
			<!-- Space -->
			<div class="space"></div>
			<!-- Space End -->
			
			<!-- Grid Row -->
			<div class="row margin-none">
				<!-- Grid Col -->
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 padding-none">
					<!-- Service Image -->
					<div class="box-white padding-all padding-none-right">
						<a href="assets/img/service-detail.png" title="Service Name" data-rel="prettyPhoto" class="zoom-effect"><img src="assets/img/service-detail.png" class="img-full" alt="Service Name"></a>
					</div>
					<!-- Service Image End -->
				</div>
				<!-- Grid Col End -->
				
				<!-- Grid Col -->
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-none">
					<!-- Service Description -->
					<div class="box-white padding-all justify text-small">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel tristique turpis. Mauris lacinia, urna nec bibendum eleifend, mauris velit lobortis risus, porttitor venenatis justo erat eu lectus. Ut auctor justo est, quis gravida magna pharetra non. Aliquam ullamcorper erat sit amet lectus aliquam, in pulvinar eros interdum. Pellentesque iaculis tristique nulla a commodo. Sed at interdum odio, vitae consequat urna. Sed porttitor nunc a sollicitudin ornare. Duis pulvinar tellus euismod, sagittis leo vitae, cursus nulla. Suspendisse nisi est, aliquet a velit gravida, dapibus ornare metus. Sed facilisis egestas neque. Aliquam erat volutpat.</p>
						<p>Mauris venenatis arcu quis tellus semper, sit amet scelerisque libero congue. Etiam a porta erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum facilisis ut lorem at aliquet. Morbi mollis faucibus metus sed venenatis. Suspendisse et euismod velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut nec libero et purus interdum pharetra eget et mi. Fusce tristique tempor luctus. Sed augue erat, bibendum ultricies neque a, porta ultrices neque.</p>
						<p>Suspendisse pretium lorem sed vestibulum elementum. Vivamus faucibus nulla nisi, nec aliquet ligula facilisis nec. Aliquam elementum egestas eros vel porta. Fusce at elit faucibus, tincidunt nisl id, egestas risus. Sed ultrices porta mi id rhoncus. Proin adipiscing rutrum ante a pellentesque. Quisque imperdiet sapien nibh, sit amet convallis elit luctus faucibus. Duis vel velit vitae purus varius consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tristique vitae diam vitae varius. Quisque a fringilla dolor. Vestibulum fermentum interdum lectus ac varius. Proin libero nisl, mollis in sagittis eu, adipiscing vel leo. Fusce a eleifend purus. Praesent tincidunt purus et risus lacinia, porta malesuada justo lacinia. Integer lobortis, turpis et pulvinar blandit, leo enim faucibus purus, id gravida enim diam vel lacus.</p>
						<p><a href="contact.html" class="btn btn-dark">Have a question?</a></p>
					</div>
					<!-- Service Description End -->
				</div>
				<!-- Grid Col End -->
			</div>
			<!-- Grid Row End -->
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