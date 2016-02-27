<?php
	$db = 'dm';
	$host = 'localhost';
	$user = 'thewire';
	$pass = 'NyCubZmN38QqHDBU';
	$menu_table = 'menu';
	$social_table = 'social';
	$project_table = 'project';
	
	$dbc = mysqli_connect($host, $user, $pass, $db)
		or die("Failed to establish database connection!");
?>