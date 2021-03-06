var respuestaCaptcha;

var verifyCallback = function(response) {
    //console.log("el captcha se verifico correctamente "+response);
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
    /*var formulario = document.getElementById('formulario-contacto');
    var datos = new FormData(formulario);
    console.log(datos)
    console.log(datos.get('name'))
    console.log(datos.get('email'))
    console.log(datos.get('subject'))
    console.log(datos.get('message'))*/
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
              //  console.log(ajax.readyState);
              //  console.log(ajax.status);
                if(ajax.readyState == 4 && ajax.status == 200){
                    alert("Formulario enviado correctamente");
                }else{
                    
                }
            }

                //alert("Se envio el formulario correctamente!");
                document.getElementById("formulario-contacto").reset();
                grecaptcha.reset(respuestaCaptcha);
    }else{

    }

   // console.log(validacionDatos);

}

function validarDatos() {
    var nombre=document.getElementById('nombre').value;
    var emailId=document.getElementById('email').value;
    var telefonoId = document.getElementById('telefono').value;
    //var telefonoRegex2 = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
    var telefonoRegex = /^(\(\+?\d{2,3}\)[\*|\s|\-|\.]?(([\d][\*|\s|\-|\.]?){6})(([\d][\s|\-|\.]?){2})?|(\+?[\d][\s|\-|\.]?){8}(([\d][\s|\-|\.]?){2}(([\d][\s|\-|\.]?){2})?)?)$/;
    //var nameRegex2 = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
    var nameRegex = /^[A-Za-z]{1}[A-Za-z\s]+$/;
   // console.log(telefonoRegex.test(telefonoId));
   
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
    return true;
} 