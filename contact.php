<?php
// Email Setting
//=======================================
$admin_email = "ccv@ccvingenieria.cl";
$from_name   = "\"Sitio Web\"";




if(isset($_POST['useremail'])) {
	
	 $user_name 	= strip_tags($_POST['username']);
	 $user_email 	= strip_tags($_POST['useremail']);
	 $comment_text 	= strip_tags($_POST['commenttext']);
	
	if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
	echo 5;
	exit;
	}
	else
	{
	$to  	   		= "$admin_email"; 
	$subject 		= "Formulario Sitio Web";
	$message		= "Nonbre: $user_name <br/>";
	$message 		.= "Email: $user_email <br/>";
	$message 		.= "Mensaje: $comment_text <br/>";
	$headers  		= "MIME-Version: 1.0\r\n";
	$headers 		.= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers 		.= "From:$from_name<$admin_email>\r\n";
	$headers 		.= "Reply-To: $user_email\r\n"."X-Mailer: PHP/".phpversion();
	$send 			= mail($to, $subject, $message, $headers);
	echo '1';	
}
}


?>