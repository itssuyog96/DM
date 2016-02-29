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
			<h1 class="center">Services</h1>
			<!-- Page Title End -->
			
			<!-- Page Description -->
			<h2 class="title-border center">An award-winning architecture &amp; interior design studio</h2>
			<!-- Page Description End -->
			
			<!-- Space -->
			<div class="space"></div>
			<!-- Space End -->
			
			<!-- Item List -->
			<div class="item-list masonry-list service-list">
				<!-- Item Width Size -->
				<div class="grid-sizer padding-none col-lg-4 col-md-6 col-sm-6 col-xs-12"></div>
				<!-- Item Width Size End -->
				
				<!-- Item -->
				<div class="item masonry-item padding-none col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/service-2.png" class="img-full" alt="Service Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="service-detail.html">
							<div class="desc-content">
								<span class="title">Interior Design</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis diam nulla, nec egestas quam laoreet quis...</p>
								<span class="yellow">READ MORE</span>
							</div>
						</a>
					</div>
					<!-- Item Description End -->
				</div>
				<!-- Item End -->
				
				<!-- Item -->
				<div class="item masonry-item padding-none col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/service-3.png" class="img-full" alt="Service Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="service-detail.html">
							<div class="desc-content">
								<span class="title">Engineering</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis diam nulla, nec egestas quam laoreet quis...</p>
								<span class="yellow">READ MORE</span>
							</div>
						</a>
					</div>
					<!-- Item Description End -->
				</div>
				<!-- Item End -->
				
				<!-- Item -->
				<div class="item masonry-item padding-none col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/service-1.png" class="img-full" alt="Service Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="service-detail.html">
							<div class="desc-content">
								<span class="title">Architechture</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis diam nulla, nec egestas quam laoreet quis...</p>
								<span class="yellow">READ MORE</span>
							</div>
						</a>
					</div>
					<!-- Item Description End -->
				</div>
				<!-- Item End -->
				
				<!-- Item -->
				<div class="item masonry-item padding-none col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/service-4.png" class="img-full" alt="Service Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="service-detail.html">
							<div class="desc-content">
								<span class="title">Planning</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis diam nulla, nec egestas quam laoreet quis...</p>
								<span class="yellow">READ MORE</span>
							</div>
						</a>
					</div>
					<!-- Item Description End -->
				</div>
				<!-- Item End -->
				
				<!-- Item -->
				<div class="item masonry-item padding-none col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/service-5.png" class="img-full" alt="Service Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="service-detail.html">
							<div class="desc-content">
								<span class="title">Strategy &amp; Discovery</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut convallis diam nulla, nec egestas quam laoreet quis...</p>
								<span class="yellow">READ MORE</span>
							</div>
						</a>
					</div>
					<!-- Item Description End -->
				</div>
				<!-- Item End -->
			</div>
			<!-- Item List End -->
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