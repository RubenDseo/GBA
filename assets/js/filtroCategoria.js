(function(){
    $(document).ready(function(){

        $(".btn-menu").click(function(e){
            e.preventDefault();
            var filtro = $(this).attr("data-filter");
            //console.log(filtro);
            if(filtro== "todos"){
                $(".filtroProduct").show(200);//tiempo que tarda en mostrarlos 200 milisegundos
            }else{
                $(".filtroProduct").not("."+filtro).hide(200);//tiempo que tarda en ocultarlos 200 milisegundos                        

                $(".filtroProduct").filter("."+filtro).show(200);//tiempo que tarda en mostrarlos 200 milisegundos                        
            }
        });

        $("ul li").click(function(){
            $(this).addClass("activarSeleccion").siblings().removeClass("activarSeleccion");
        })
    });
}())