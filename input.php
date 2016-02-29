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
			<h1 class="center">Site Manager</h1>
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
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-none">
					<div class="box-white padding-all">
						<h2 class="title-border right block-mobile">Update</h2>
						<div class="data-form">
							

							<form class="selectme" action="post">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="form-field">
										<select name="select" placeholder="Select to update">
											 <option>-Select-</option>
									         <option value="menu">Menu item</option>
									         <option value="project">Project</option>
									         <option value="social">Social Link</option>
									    </select>
									</div>
								</div>
							</div>
							</form>


						</div>
					</div>
				</div>


				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-none menu">
					<div class="box-white padding-all">
						<h2 class="title-border right block-mobile">Add new Menu item</h2>
						<div class="data-form">

							
							<form action="entry.php" method="post">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label>Label</label>
									<div class="form-field">
										<i class="fa fa-user"></i>
										<input type="text" name="label" placeholder="Enter label" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label>Url</label>
									<div class="form-field">
										<i class="fa fa-envelope-o"></i>
										<input type="text" name="url" placeholder="Enter url" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input type="hidden" name="type" value="menu">
									<input type="submit" class="btn btn-dark" value="ADD MENU ITEM">
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-none social">
					<div class="box-white padding-all">
						<h2 class="title-border right block-mobile">Add Social link</h2>
						<div class="data-form">

							<form action="entry.php" method="post">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label>Label</label>
									<div class="form-field">
										<i class="fa fa-user"></i>
										<input type="text" name="label" placeholder="Enter label" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label>Url</label>
									<div class="form-field">
										<i class="fa fa-envelope-o"></i>
										<input type="text" name="url" placeholder="Enter url" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<input type="hidden" name="type" value="social">
									<input type="submit" class="btn btn-dark" value="ADD SOCIAL LINK">
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-none project ">
				<div class="box-white padding-all">
				<form action="123.php">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 btn btn-align:center">
							<input type="hidden" name="type" value="project" >
							<input type="submit" class="btn btn-dark" value="CREATE NEW PROJECT">
							
						</div>
					</div>
				</form>
				</div>
				
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
<script>

	$('.menu').hide();
	$('.social').hide();
	$('.project').hide();


	$('select[name="select"]').on('change',function(){
	   var selectedVal=$(this).val();
	   switch(selectedVal){
	       case 'project':
	                   $('.menu').hide();
	                   $('.social').hide();
	                   $('.project').show();
	             break;
	       case 'menu':
	       			   $('.menu').show();
	       			   $('.social').hide();
	                   $('.project').hide();
	             break;

	       case 'social': 
	                   $('.menu').hide();
	                   $('.social').show();
	                   $('.project').hide();
	             break;
	       default: //change this according to your need
	                   $('.project').hide();
	                   $('.menu').hide();
	                   $('.social').hide();
	             break;
	   }
	   
	});

</script>

</body>
</html>