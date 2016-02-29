<?php

	/**
	* 
	*/
	class Menu
	{

		
		public function menu_generator()
		{

			include("site_dim.php");
			include('db-config.php');
			include_once("authenticate.php");

			echo 	'<div class="site-menu">'.
						'<div class="menu-logo"><a href="index.html">'.$site_subheader_1.' <span class="yellow">|</span> <b>'.$site_subheader_2.'</b></a></div>'.
						'<div class="menu-nav">'.
							'<ul>';
								
								$query = "SELECT * FROM `$menu_table`";
								$result = mysqli_query($dbc, $query)
									or die("Failed to execute query!");

								while($row = mysqli_fetch_array($result, MYSQLI_NUM))
								{
									if($row[1])
									{
										echo '<li><a href='.$row[1].'>'.$row[2].'</a></li>'.PHP_EOL;
									}
								}

								if(logged_in())
								{
									echo '<li><a href="logout.php">LOGOUT</a></li>'.PHP_EOL;
								}
								else
								{
									echo '<li><a href="login.php">LOGIN<a></li>'.PHP_EOL;
								}

			echo 			'</ul>'.
						'</div>'.
						'<div class="menu-search">'.
							'<form>'.
								'<input name="search" type="text" placeholder="SEARCH">'.
								'<button type="submit" class="search-btn"><i class="fa fa-search"></i></button>'.
							'</form>'.
						'</div>'.
						'<div class="menu-footer">'.
							'<ul class="social-icons nav-default clearfix">';

								$query = "SELECT * FROM `$social_table`";
								$result = mysqli_query($dbc, $query)
									or die("Failed to execute query!");

								while($row = mysqli_fetch_array($result, MYSQLI_NUM))
								{
									if($row[1])
									{
										echo '<li><a href='.$row[1].'><i class="'.$row[2].'"></i></a></li>'.PHP_EOL;
									}
								}

			echo 				'</ul>'.
							'<p>© '.$site_subheader_1.' | Architects Design Studio</p>'.
						'</div>'.
					'</div>';
		}
	}
?>