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
			<h1 class="center">About Us</h1>
			<!-- Page Title End -->
			
			<!-- Page Description -->
			<h2 class="title-border center">An award-winning architecture &amp; interior design studio</h2>
			<!-- Page Description End -->
			
			<p class="center">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales augue non nunc lacinia consectetur. Sed at neque turpis. 
			Nullam eleifend convallis eros vel ullamcorper. Donec euismod, nulla sed imperdiet sagittis, augue libero mollis nunc, consequat luctus mauris 
			dolor non diam. Curabitur vitae lacus at nibh hendrerit dignissim sed nec libero. Etiam molestie, leo sit amet sagittis volutpat, lacus nisl euismod urna, et 
			fringilla est sapien ac lectus. Curabitur auctor, mi non euismod hendrerit, ipsum tellus vestibulum orci, non ullamcorper nibh nibh sed leo. 
			Donec ac neque dui. Donec ac arcu eros. Nunc aliquam dui vitae rutrum faucibus. Sed pharetra vulputate ornare. Mauris aliquet vulputate ligula. 
			Duis in metus leo. In dictum, risus in tempus ultricies, lorem sem mattis turpis, vel pretium nisl tortor quis nibh.
			</p>
			<p class="center">
			Donec hendrerit lorem et tortor accumsan bibendum. Pellentesque eget nisl enim. Aliquam a feugiat odio, eget facilisis ligula. Nulla facilisi. 
			Maecenas sagittis velit ligula, ac consequat lectus dignissim quis. Curabitur at dapibus quam, ac volutpat nunc. Sed a semper nisi. Sed fermentum, 
			lorem ac iaculis consectetur, nibh libero ultrices dui, eu molestie nibh odio eu est. Aliquam egestas risus eget condimentum mattis. In in nunc 
			sollicitudin, vehicula dui vitae, auctor justo. Integer blandit nunc quis aliquam tempus. Sed non sapien arcu. Cras nisi mi, lobortis eget nibh et, 
			convallis fringilla elit. Donec pulvinar porta purus, vel tincidunt diam condimentum vitae. In a diam velit.
			</p>
			
			<!-- Space -->
			<div class="space"></div>
			<!-- Space End -->
			
			<!-- Title -->
			<h2 class="center">Why Choose us?</h2>
			<!-- Title End -->
			
			<!-- Number List -->
			<div class="row number-list">
				<!-- Number Box -->
				<div class="col-md-3 col-sm-6">
					<div class="number-box circle">
						<div class="box-content">
							<span class="countTo yellow" data-from="0" data-to="600" data-speed="5000" data-refresh-interval="50"></span>Happy Customer
						</div>
					</div>
				</div>
				<!-- Number Box End -->
				
				<!-- Number Box -->
				<div class="col-md-3 col-sm-6">
					<div class="number-box circle">
						<div class="box-content">
							<span class="countTo yellow" data-from="0" data-to="1500" data-speed="5000" data-refresh-interval="50"></span>Projects
						</div>
					</div>
				</div>
				<!-- Number Box End -->
				
				<!-- Number Box -->
				<div class="col-md-3 col-sm-6">
					<div class="number-box circle">
						<div class="box-content">
							<span class="countTo yellow" data-from="0" data-to="56" data-speed="5000" data-refresh-interval="50"></span>Offices
						</div>
					</div>
				</div>
				<!-- Number Box End -->
				
				<!-- Number Box -->
				<div class="col-md-3 col-sm-6">
					<div class="number-box circle">
						<div class="box-content">
							<span class="countTo yellow" data-from="0" data-to="24" data-speed="5000" data-refresh-interval="50"></span>Architect
						</div>
					</div>
				</div>
				<!-- Number Box End -->
			</div>
			<!-- Number List End -->
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