var respuestaCaptcha;

var verifyCallback = function(response) {
    if(response !=0){
        document.getElementById("btnEnviar").innerHTML = "<button type='button' onclick='enviaForm()' class='appao-btn appao-btn2' style='color: white;'>Enviar</button>";
    }
};

var onloadCallback = function() {
    respuestaCaptcha=grecaptcha.render('wrecaptcha', {
        'sitekey' : '6LfO6KEUAAAAANK3EauCKGq4DmSZMdpCPd_Z4zMX',
        'callback' : verifyCallback,
    });
};


function enviaForm(){
    var validacionDatos=validarDatos();
    if(validacionDatos){
        var nombre = document.getElementById('nombre').value;
        var telefonoId = document.getElementById('telefono').value;
        var emailId = document.getElementById('email').value;
        var asunto = document.getElementById('asunto').value;
        var mensajeF = document.getElementById('mensajeF').value;

        var ajax = new XMLHttpRequest();
            ajax.open("POST","./formulario.php",true);
            ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            ajax.send("name="+nombre+"&email="+emailId+"&subject="+asunto+"&telefono="+telefonoId+"&message="+mensajeF);
            ajax.onreadystatechange = function(){
                if(ajax.readyState == 4 && ajax.status == 200){
                    alert("Formulario enviado correctamente");
                }else{
                    
                }
            }

                document.getElementById("formulario-contacto").reset();
                grecaptcha.reset(respuestaCaptcha);
                document.getElementById("btnEnviar").innerHTML = "<button type='button' class='appao-btn appao-btn2' style='color: white; background: rgba(48, 69, 131, 0.45);' disabled>Enviar</button>";
    }else{

    }
}

function validarDatos() {
    var nombre=document.getElementById('nombre').value;
    var emailId=document.getElementById('email').value;
    var telefonoId = document.getElementById('telefono').value;
    var asunto = document.getElementById('asunto').value;

    var telefonoRegex = /^(\(\+?\d{2,3}\)[\*|\s|\-|\.]?(([\d][\*|\s|\-|\.]?){6})(([\d][\s|\-|\.]?){2})?|(\+?[\d][\s|\-|\.]?){8}(([\d][\s|\-|\.]?){2}(([\d][\s|\-|\.]?){2})?)?)$/;
    var nameRegex = /^[A-Za-záéíóúÁÉÍÓÚ]{1}[A-Za-záéíóúÁÉÍÓÚ\s]+$/;
   
    if(nombre == null || nombre.length == 0 || !(nameRegex.test(nombre)) ) {
        alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
        return false;
    }
    if( !( telefonoRegex.test(telefonoId) ) ) {
        alert('Error: Número no válido')
        return false;
    }

    if( !(/\S+@\S+\.\S+/.test(emailId)) ){
        alert('ERROR: Debe escribir un correo válido');
        return false;
    }  
    if(asunto == null || asunto.length==0){
        alert('ERROR: Por favor escriba el asunto');
        return false;
    }
    return true;
} 

