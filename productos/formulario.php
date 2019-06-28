<?php
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $asunto = $_POST['subject'];
  $recaptcha =isset($_POST['g-recaptcha-response']);
if(isset($_POST['g-recaptcha-response']) && $recaptcha!==''){
        $captcha=$_POST['g-recaptcha-response'];
        //$this->input->post('recaptchaResponse');
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LfO6KEUAAAAAAR-QdcRJ_QiGF547ScqlsIS3iK5&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $obj = json_decode($response);

        if ($obj->success == false || $nombre === '' || $email==='' || $asunto === '') {
          echo json_encode('error');
        }else{
          echo json_encode('¡Gracias por tu mensaje '.$nombre.'! Nos pondremos en contacto contigo  ');
        }
}else{
  echo json_encode('erro');
}
  
?>