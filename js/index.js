$(document).rady(function(){
    $('img').lazyload({
        threshold:200,
        effect:'fadeIN'
    });
});