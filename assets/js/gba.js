$( document ).ready(function() {
    $(function(){
       
        $(window).scroll(function(){
            if($(this).scrollTop()>10){              
                $('#logo-R').attr("style", "width: 100%");
                $('#logo-R').addClass("tam-logo");

            }else{
                $('#logo-R').attr("style", "width: 170%");
                $('#logo-R').addClass("tam-logo");
            }
        });
    

    });

});
