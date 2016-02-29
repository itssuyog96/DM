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
			<h1 class="center">Marilyn Suttle</h1>
			<!-- Page Title End -->
			
			<!-- Page Description -->
			<h2 class="title-border center">Co Director</h2>
			<!-- Page Description End -->
			
			<!-- Space -->
			<div class="space"></div>
			<!-- Space End -->
			
			<!-- Grid Row -->
			<div class="row margin-none">
			
				<!-- Grid Col -->
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 padding-none">
					<!-- Team Image -->
					<div class="box-white padding-all padding-none-right">
						<a href="assets/img/team-1.png" title="Team Name" data-rel="prettyPhoto" class="zoom-effect"><img src="assets/img/team-1.png" class="img-full" alt="Team Name"></a>
					</div>
					<!-- Team Image End -->
					<!-- Team Social -->
					<div class="box-dark padding-all-15 center">
						<ul class="social-icons social-white nav-default clearfix">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<!-- Team Social End -->
				</div>
				<!-- Grid Col End -->
				
				<!-- Grid Col -->
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-none">
					<!-- Team Biography -->
					<div class="box-white justify padding-all text-small">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel tristique turpis. Mauris lacinia, urna nec bibendum eleifend, mauris velit lobortis risus, porttitor venenatis justo erat eu lectus. Ut auctor justo est, quis gravida magna pharetra non. Aliquam ullamcorper erat sit amet lectus aliquam, in pulvinar eros interdum. Pellentesque iaculis tristique nulla a commodo. Sed at interdum odio, vitae consequat urna. Sed porttitor nunc a sollicitudin ornare. Duis pulvinar tellus euismod, sagittis leo vitae, cursus nulla. Suspendisse nisi est, aliquet a velit gravida, dapibus ornare metus. Sed facilisis egestas neque. Aliquam erat volutpat.</p>
						<p>Mauris venenatis arcu quis tellus semper, sit amet scelerisque libero congue. Etiam a porta erat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum facilisis ut lorem at aliquet. Morbi mollis faucibus metus sed venenatis. Suspendisse et euismod velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut nec libero et purus interdum pharetra eget et mi. Fusce tristique tempor luctus. Sed augue erat, bibendum ultricies neque a, porta ultrices neque.</p>
						<p>Suspendisse pretium lorem sed vestibulum elementum. Vivamus faucibus nulla nisi, nec aliquet ligula facilisis nec. Aliquam elementum egestas eros vel porta. Fusce at elit faucibus, tincidunt nisl id, egestas risus. Sed ultrices porta mi id rhoncus. Proin adipiscing rutrum ante a pellentesque. Quisque imperdiet sapien nibh, sit amet convallis elit luctus faucibus. Duis vel velit vitae purus varius consequat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tristique vitae diam vitae varius. Quisque a fringilla dolor. Vestibulum fermentum interdum lectus ac varius. Proin libero nisl, mollis in sagittis eu, adipiscing vel leo. Fusce a eleifend purus. Praesent tincidunt purus et risus lacinia, porta malesuada justo lacinia. Integer lobortis, turpis et pulvinar blandit, leo enim faucibus purus, id gravida enim diam vel lacus.</p>
					</div>
					<!-- Team Biography End -->
				</div>
				<!-- Grid Col End -->
				
			</div>
			<!-- Grid Row End -->
			
			<!-- Space -->
			<div class="space"></div>
			<!-- Space End -->
			
			<!-- Title -->
			<h2 class="title-border center">Our Team</h2>
			<!-- Title End -->
			
			<!-- Space -->
			<div class="space"></div>
			<!-- Space End -->
			
			<!-- Item List -->
			<div class="item-list team-list" id="owl-team">
				<div class="item">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/team-1.png" class="img-full" alt="Team Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="team-detail.html">
							<div class="desc-content">
								<span class="yellow">Co Director</span>
								<span class="title">Marilyn Suttle</span>
							</div>
						</a>
						<ul class="social-icons social-white nav-default clearfix">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
						</ul>
					</div>
					<!-- Item Description End -->
				</div>
				
				<div class="item">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/team-2.png" class="img-full" alt="Team Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="team-detail.html">
							<div class="desc-content">
								<span class="yellow">Lead Designer</span>
								<span class="title">Jack Mason</span>
							</div>
						</a>
						<ul class="social-icons social-white nav-default clearfix">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
						</ul>
					</div>
					<!-- Item Description End -->
				</div>
				
				<div class="item">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/team-3.png" class="img-full" alt="Team Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="team-detail.html">
							<div class="desc-content">
								<span class="yellow">Project Designer</span>
								<span class="title">Michael Feldstein</span>
							</div>
						</a>
						<ul class="social-icons social-white nav-default clearfix">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
						</ul>
					</div>
					<!-- Item Description End -->
				</div>
				
				<div class="item">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/team-4.png" class="img-full" alt="Team Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="team-detail.html">
							<div class="desc-content">
								<span class="yellow">Architect</span>
								<span class="title">John Federico</span>
							</div>
						</a>
						<ul class="social-icons social-white nav-default clearfix">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
						</ul>
					</div>
					<!-- Item Description End -->
				</div>
				
				<div class="item">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/team-1.png" class="img-full" alt="Team Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="team-detail.html">
							<div class="desc-content">
								<span class="yellow">Co Director</span>
								<span class="title">Marilyn Suttle</span>
							</div>
						</a>
						<ul class="social-icons social-white nav-default clearfix">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
						</ul>
					</div>
					<!-- Item Description End -->
				</div>
				
				<div class="item">
					<!-- Item Image -->
					<div class="item-image"><img src="assets/img/team-2.png" class="img-full" alt="Team Name"></div>
					<!-- Item Image End -->
					
					<!-- Item Description -->
					<div class="item-desc">
						<a class="link" href="team-detail.html">
							<div class="desc-content">
								<span class="yellow">Lead Designer</span>
								<span class="title">Jack Mason</span>
							</div>
						</a>
						<ul class="social-icons social-white nav-default clearfix">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google"></i></a></li>
						</ul>
					</div>
					<!-- Item Description End -->
				</div>
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