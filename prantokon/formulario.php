<?php

	// If the form was submitted
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // If the Google Recaptcha box was clicked
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        $captcha=$_POST['g-recaptcha-response'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfO6KEUAAAAAAR-QdcRJ_QiGF547ScqlsIS3iK5&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $obj = json_decode($response);

        // Si recaptcha fue exitoso entra a validar los campos del formulario
        if($obj->success == true  && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject'])) {
          echo "¡Gracias por su mensaje! Nos pondremos en contacto con usted.";
          exit;  
          jQuery
         //se valida que los campos nombre email y asunto no esten vacios
         // if ( empty($_POST['name']) OR empty($_POST['email']) OR empty($_POST['subject'])) {
         //   http_response_code(400);
         //   echo "Oops! Ocurrio un problema al enviar los datos. Por favor ingresa todos los campos.";
         //   exit;
         // }else{
         //   echo "¡Gracias por su mensaje! Nos pondremos en contacto con usted.";            
           // $('input').val("");//todos los inputs quedarán vacíos ;)
		     // }
        }else{
            //http_response_code(500);
          echo "Oops! Ocurrio un problema al enviar sus datos. Intento en un momento";
         // echo "¡Gracias por su mensaje! Nos pondremos en contacto con usted.";            

        }

      } 

      // Si recaptcha no fue exitoso   
      //else {
		  //http_response_code(400);
      //  echo "La verificación de no soy un robot falló. Intentelo de nuevo.";
      //}

  } 

  // If the Google Recaptcha box was not clicked   
  else {
    echo "Por favor da click en reCAPTCHA box.";
  }   */

  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $asunto = $_POST['subject'];
  $recaptcha =isset($_POST['g-recaptcha-response']);
if(isset($_POST['g-recaptcha-response']) && $recaptcha!==''){
        $captcha=$this->input->post('recaptchaResponse');
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfO6KEUAAAAAAR-QdcRJ_QiGF547ScqlsIS3iK5&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $obj = json_decode($response);

        if ($obj->success == false || $nombre === '' || $email==='' || $asunto === '') {
          echo json_encode('error'.$recaptcha.'l '.$captcha);
        }else{
          echo json_encode('¡Gracias por tu mensaje '.$nombre.'! Nos pondremos en contacto contigo  ');
        }
}else{
  echo json_encode('erro'.$recaptcha.'l'.$resCaptcha);
}
  
?>