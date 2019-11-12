<?php  
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $asunto = $_POST['subject'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['message'];

  $contenido="\n\n";
  $contenido.="\n Mensaje envidado desde página web";
  $contenido.="\n Nombre: ".$nombre;
  $contenido.="\n Email: ".$email;
  $contenido.="\n Asunto: ".$asunto;
  $contenido.="\n Telefono: ".$telefono;
  $contenido.="\n Mensaje: ".$mensaje;
  $contenido.="\n\n\n Clave(gba@grupobiomedicoazteca.com.mx)";
  
  $cabecera= "From: ".$nombre. "< ".$email. " >\r\n";

  if(mail('ventas@grupobiomedicoazteca.com.mx',$asunto, $contenido, $cabecera)){
    echo "¡Gracias por tu mensaje ".$nombre."! Nos pondremos en contacto contigo  ";

  }else{
    echo "error";
  }

?>