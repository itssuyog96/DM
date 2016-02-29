<?php
require_once("menu.php");
require_once("project-edit-opt.php");
require_once("site_dim.php");
require_once("authenticate.php");

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
			<h1 class="center">Consectetur Adipiscing</h1>
			<!-- Page Title End -->
			
			<!-- Page Description -->
			<h2 class="title-border center">London, 2012-2014</h2>
			<!-- Page Description End -->
			
			<!-- Space -->
			<div class="space"></div>
			<!-- Space End -->
			
			<!-- Grid Row -->
			<div class="row margin-none">
				<!-- Grid Col -->
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 padding-none">
					<!-- Project Slide -->
					<div class="box-white padding-all">
						<ul class="project-slider bxslider">
							<li>
								<a href="assets/img/slide-1.png" title="Project Description" data-rel="prettyPhoto" class="zoom-effect"><img src="assets/img/slide-1.png" class="img-full" alt="Project Name"></a>
								<div class="slide-caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt consectetur velit, quis imperdiet lacus consequat vitae. Donec quam augue, elementum vel aliquet vitae, imperdiet porttitor risus.</div>
							</li>
							<li>
								<a href="assets/img/slide-2.png" title="Project Description" data-rel="prettyPhoto" class="zoom-effect"><img src="assets/img/slide-2.png" class="img-full" alt="Project Name"></a>
								<div class="slide-caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt consectetur velit, quis imperdiet lacus consequat vitae. Donec quam augue, elementum vel aliquet vitae, imperdiet porttitor risus.</div>
							</li>
							<li>
								<a href="assets/img/slide-3.png" title="Project Description" data-rel="prettyPhoto" class="zoom-effect"><img src="assets/img/slide-3.png" class="img-full" alt="Project Name"></a>
								<div class="slide-caption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt consectetur velit, quis imperdiet lacus consequat vitae. Donec quam augue, elementum vel aliquet vitae, imperdiet porttitor risus.</div>
							</li>
						</ul>
					</div>
					<!-- Project Slide End -->
				</div>
				<!-- Grid Col End -->
				
				<!-- Grid Col -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 padding-none">
					<!-- Project Description -->
					<div class="box-dark padding-all justify text-small">
						<h2 class="title-border right">Project Details</h2>
						<p class="yellow">Project Description:</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sagittis hendrerit risus, id porta augue porta vel. Donec varius quam lorem, nec venenatis massa tincidunt eu. Pellentesque arcu leo, egestas in gravida in, laoreet nec arcu. Nulla lobortis risus eget tortor vehicula dictum.</p>
						<p class="yellow">Client:</p>
						<p>Consectetur Museum</p>
						<p class="yellow">Category:</p>
						<p>Museum</p>
						<p class="yellow">Architects:</p>
						<p>Marilyn Suttle, Jack Mason, Michael Feldstein, John Federico</p>
						<ul class="social-icons nav-default clearfix">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<!-- Project Description End -->
					
					<!-- Project Nav -->
					<div class="box-dark padding-all padding-none-top">
						<div class="row project-nav">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#" class="btn btn-default btn-prev block"><i class="fa fa-angle-left"></i>Prev Project</a></div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#" class="btn btn-default btn-next block">Next Project<i class="fa fa-angle-right"></i></a></div>
						</div>
						<div class="row project-nav">
							<?php
								if(logged_in())
									editdel();
							?>
						</div>
					</div>
					<!-- Project Nav End -->
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