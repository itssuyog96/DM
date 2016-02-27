<?php
	
	class Project
	{
		public function gen_projects()
		{
			
			include('db-config.php');

			$query = "SELECT * FROM `$project_table`";
			$result = mysqli_query($dbc, $query)
				or die("Failed to execute query!");

			while($row = mysqli_fetch_array($result, MYSQLI_NUM))
			{	
				echo '<!-- Item -->'.
						'<div class="item">'.
							'<!-- Item Image -->'.
							'<div class="item-image"><img src='.$row[1].' class="img-full" alt="'.$row[2].'"></div>'.
							'<!-- Item Image End -->'.
							'<!-- Item Description -->'.
							'<div class="item-desc">'.
								'<a class="link" href="'.$row[5].'">'.
									'<div class="desc-content">'.
										'<span class="yellow">'.$row[3].'</span>'.
										'<span class="title">'.$row[4].'</span>'.
									'</div>'.
								'</a>'.
							'</div>'.
							'<!-- Item Description End -->'.
						'</div>'.
						'<!-- Item End -->';
			}
		}
	}
?>