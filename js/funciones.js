function abrirChat(){
    $(".boton-contacto").hide();
    $(".chat").show();
}
function cerrarChat(){
    $(".chat").removeClass("jello");
    $(".chat").fadeOut();
    $(".boton-contacto").show();
}