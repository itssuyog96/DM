<?php
require_once("menu.php");
require_once("projects.php");
require_once("project-edit-opt.php");
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

<!--div class="site-loader"><img src="assets/img/loader.gif" alt="Loading"></div-->

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
			<h1 class="center">Projects</h1>
			<!-- Page Title End -->
			
			<!-- Page Description -->
			<h2 class="title-border center">An award-winning architecture &amp; interior design studio</h2>
			<!-- Page Description End -->
			
			<!-- Item Filter -->
			<div class="item-filter center">
				<ul class="nav-default clearfix">
					<li><a href="#" data-filter=".item" class="active">All</a></li>
					<?php
						$proj_desc = new Project();
						$proj_desc->proj_filter();
					?>
				</ul>
			</div>
			<!-- Item Filter End -->
			
			<!-- Item List -->
			<div class="item-list masonry-list">
				<!-- Item Width Size -->
				<div class="grid-sizer padding-none col-lg-3 col-md-4 col-sm-6 col-xs-12"></div>
				<!-- Item Width Size End -->
				
				<!-- Item -->
				
				<?php
					
					$proj_desc->gen_project_desc();
				?>

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