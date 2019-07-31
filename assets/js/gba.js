$( document ).ready(function() {
    console.log("hola00");
    var ventana_ancho = $(window).width();
    console.log(ventana_ancho);
    $(function(){
        if(ventana_ancho >= 768 && ventana_ancho<991){
            $('#logo-R').attr("style", "width: 140%");

            $(window).scroll(function(){
                if($(this).scrollTop()>10){              
                    $('#logo-R').attr("style", "width: 100%");
                    $('#logo-R').addClass("tam-logo");

                }else{
                    $('#logo-R').attr("style", "width: 140%");
                    $('#logo-R').addClass("tam-logo");
                }
            });
        }

        if(ventana_ancho>=991){
            $('#logo-R').attr("style", "width: 170%");

            $(window).scroll(function(){
                if($(this).scrollTop()>10){              
                    $('#logo-R').attr("style", "width: 100%");
                    $('#logo-R').addClass("tam-logo");

                }else{
                    $('#logo-R').attr("style", "width: 170%");
                    $('#logo-R').addClass("tam-logo");
                }
            });
        }

        if(ventana_ancho<576){
            $('#logo-R').attr("style", "width: 170%");

            $(window).scroll(function(){
                if($(this).scrollTop()>10){              
                    $('#logo-R').attr("style", "width: 100%");
                    $('#logo-R').addClass("tam-logo");

                }else{
                    $('#logo-R').attr("style", "width: 170%");
                    $('#logo-R').addClass("tam-logo");
                }
            });
        }
        
    

    });

});
