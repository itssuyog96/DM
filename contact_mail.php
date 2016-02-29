<?php
	require_once("site_dim.php");


	$to      = $support_mail;
	
	$subject = 'From Contact Form';


	$message = '<html>'.
				'<head>'.
				  '<title>From Designorganists contact form</title>'.
				'</head>'.
				'<body>'.
				  '<p>'.$_POST['name'].' tried to contact you!</p>'.
				  '<table>'.
				    '<tr>'.
				      '<td>Email Id:</td><td>'.$_POST['email'].'</td>'.
				    '</tr>'.
				    '<tr>'.
				      '<td>Phone:</td><td>'.$_POST['mob'].'</td>'.
				    '</tr>'.
				    '<tr>'.
				      '<td>Message:</td><td>'.$_POST['msg'].'</td>'.
				    '</tr>'.
				  '</table>'.
				'</body>'.
				'</html>';

	
	if(mail($to, $subject, $message))
	{
		header("Location: contact_success.php");
	}
	else
	{
		header("Location: contact_failed.php");
	}
?>
