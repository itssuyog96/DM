<?php



function logged_in()
{

	include("db-config.php");

 if(isset($_COOKIE['DESIGNORGANISTS'])){ 

 	$username = $_COOKIE['DESIGNORGANISTS']; 
 	$pass = $_COOKIE['hj439043h6sdopjkajkap']; 
 	$check = mysqli_query($dbc, "SELECT * FROM users WHERE username = '$username'")or die(mysqli_error()); 

 	while($info = mysqli_fetch_array( $check )){ 

 		if ($pass != $info['password']){
			return false;	//header("Location: login.php"); 
 		}

		else{
		
 			return true;
 		}
	}
}

 else{
	return false; //header("Location: login.php");
 }
}
 ?>
