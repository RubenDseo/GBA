<?php  
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $asunto = $_POST['subject'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['message'];

  $contenido="\n\n";
  $contenido.="\n Nombre: ".$nombre;
  $contenido.="\n Email: ".$email;
  $contenido.="\n Asunto: ".$asunto;
  $contenido.="\n Telefono: ".$telefono;
  $contenido.="\n Mensaje: ".$mensaje;
  
  $cabecera= "From: ".$nombre. "< ".$email. " >\r\n";

  if(mail('adriaana.05@gmail.com',$asunto, $contenido, $cabecera)){
    echo "¡Gracias por tu mensaje ".$nombre."! Nos pondremos en contacto contigo  ";

  }else{
    echo "error";
  }

?>