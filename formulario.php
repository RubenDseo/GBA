<?php  
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $asunto = $_POST['subject'];

  $contenido="\n\n";
  $contenido.="\n Nombre: ".$nombre;
  $contenido.="\n Email: ".$email;
  $contenido.="\n Asunto: ".$asunto;
  
  $cabecera= "From: ".$nombre. "< ".$email. " >\r\n";

  if(mail('adriaana.05@gmail.com',$asunto, $contenido, $cabecera)){
    echo "error";
  }else{
    echo "¡Gracias por tu mensaje ".$nombre."! Nos pondremos en contacto contigo  ";
  }

?>