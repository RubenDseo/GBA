/*$(document).ready(function(){

    $("button[type=button]").click(function(event){
        event.preventDefault();
        var nombre=$("#nombreF").val();
        var email=$("#emailF").val();
        var asunto=$("#asuntoF").val();
        var mensaje=$("#mensajeF").val();
        var captcha=$("#recaptcha").val();

        $.post("formulario.php",{
            nombre: nombre,
            email: email,
            asunto: asunto,
            mensaje: mensaje,
            captcha: captcha

        }, function(respuesta){
            $("#info").text(respuesta);
        });
    });
});*/
//lo que envia en url sin nada: name=&email=&subject=&message=&g-recaptcha-response=

console.log('entro al formulario-modal.js');

var respuestaCaptcha;

var verifyCallback = function () {
    console.log("el captcha se verifico respuesta: " + respuestaCaptcha);
};

var onloadCallback = function () {
    console.log("el captcha antes respuesta: " + respuestaCaptcha)

    respuestaCaptcha = grecaptcha.render('recaptchaID', {
        'sitekey': '6LfO6KEUAAAAANK3EauCKGq4DmSZMdpCPd_Z4zMX',
        'callback': verifyCallback,
    });
    console.log("el captcha despu: " + respuestaCaptcha)

};


var formulario = document.getElementById('formularioModal');
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', function (e) {
    e.preventDefault();

    var datos = new FormData(formulario);
    console.log(datos)
    console.log(datos.get('name'))
    console.log(datos.get('email'))
    console.log(datos.get('subject'))
    // console.log(datos.get('message'))

    fetch('./formulario.php', {
        method: 'POST',
        body: datos
    })

        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data === 'error') {
                alert("Ingrese todos los campos");
                console.log("valor del captcha: " + respuestaCaptcha + " " + datos.get('name') + " " + datos.get('email') + " " + datos.get('subject'));
                if (respuestaCaptcha != undefined) {
                    console.log("entro a refresh");
                    grecaptcha.reset(respuestaCaptcha);  //limpia el recaptcha  
                }
            } else if (data === 'erro') {
                alert("No se valido el recaptcha: " + respuestaCaptcha);
                grecaptcha.reset(respuestaCaptcha);  //limpia el recaptcha  

            } else {
                alert(data);
                // Limpiar el formulario
                $('input').val("");//todos los inputs quedarán vacíos ;)
                $('textarea').val("");//todos los textarea quedarán vacíos ;)
                grecaptcha.reset(respuestaCaptcha);  //limpia el recaptcha  
            }


        })
})
