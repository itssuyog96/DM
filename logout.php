<?php 
 $past = time() - 100; 
 //this makes the time in the past to destroy the cookie 
 setcookie('DESIGNORGANISTS', gone, $past); 
 setcookie('hj439043h6sdopjkajkap', gone, $past); 
 header("Location: login.php"); 
 ?> 
