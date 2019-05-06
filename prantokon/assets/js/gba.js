$( document ).ready(function() {
    $(function(){
       
        $(window).scroll(function(){
            if($(this).scrollTop()>50){              
                $('#logo-R').attr("style", "width: 100%");
            }else{
                $('#logo-R').attr("style", "width: 170%");
            }
        });
    

    });

});
