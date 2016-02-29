<?php

	require_once("site_dim.php");
	

	function new_entry($val)
	{
								
		include('db-config.php');

		switch($val['type'])
		{
			case 'menu':
					$query = "INSERT INTO `menu` VALUES ('', '".$val['url']."', '".$val['label']."')";
					$result = mysqli_query($dbc, $query)
						or die("Error executing query!");

					break;
			case 'project':
					$query = "INSERT INTO `project` VALUES ('','".$val['img_url']."','".$val['label']."','".$val['title']."', '".$val['sub_title']."', '".$val['url']."')";
					$result = mysqli_query($dbc, $query)
						or die("Error executing query!");
					break;
			case 'social':
					$query = "INSERT INTO `social` VALUES ('', '".$val['url']."', '".$val['label']."')";
					$result = mysqli_query($dbc, $query)
						or die("Error executing query!");
					break;
			default :	$result == 'false';
						echo "No such type exists!";
		}

		if($result)
		{
			echo "Added new ".$val['type']." ".$val['label']." successfully";
			return true;
		}
		else
		{
			return false;
		}
							
	}

	function redirect($url, $statusCode = 303)
	{
		header('Location: ' . $url, true, $statusCode);
		die();
	}

	if(isset($_POST['type']))
	{
		$reply = new_entry($_POST);
		if($reply == 'true')
		{
			echo "<br>Redirecting...";
			sleep(2);
			redirect($site_url.'/input.php');
		}
		else
		{
			echo "Error occurred. Please contact the developer!";
		}
	}
	else
	{
		echo "Please veirfy the input data!";
	}
?>