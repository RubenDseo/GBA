<?php

	require_once 'app/init.php';

	//var_dump($_POST);
	$response = $recaptcha->verify($_POST['g-recaptcha-response']);

	if ($response -> isSuccess()) {
		# code...

		echo "OK"; //se va a ejecutar cuando captcha es correcta
	}else{
		echo "captcha no es valida"; //se puede redireccionar al formulario
	}

?>