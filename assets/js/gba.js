$( document ).ready(function() {
    console.log("hola00");
    var ventana_ancho = $(window).width();
    console.log(ventana_ancho);
    $(function(){
        if(ventana_ancho >= 992){
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

        if(ventana_ancho>=768 && ventana_ancho<=991){
            $('#logo-R').attr("style", "width: 135%");

            $(window).scroll(function(){
                if($(this).scrollTop()>10){              
                    $('#logo-R').attr("style", "width: 100%");
                    $('#logo-R').addClass("tam-logo");

                }else{
                    $('#logo-R').attr("style", "width: 135%");
                    $('#logo-R').addClass("tam-logo");
                }
            });
        }

        if(ventana_ancho<=767){
            $('#logo-R').attr("style", "width: 100%");
            $('#menuClick').addClass("menu-top");
            $(window).scroll(function(){
                if($(this).scrollTop()>10){              
                    $('#logo-R').attr("style", "width: 50%");
                    $('#logo-R').addClass("tam-logo");
                    $('#menuClick').removeClass("menu-top");
                    $('#menuClick').addClass("menu-topScroll");
                }else{
                    $('#logo-R').attr("style", "width: 100%");
                    $('#logo-R').addClass("tam-logo");
                    $('#menuClick').removeClass("menu-topScroll");
                    $('#menuClick').addClass("menu-top");

                }
            });
        }
        
    

    });

});
