function enviar(){
  //  alert("ho");
   // $("#aviso-contacto").modal("show");
    event.preventDefault(); 
    $.ajax({
        type:'POST',
        url:'./php/enviar.php',
    })
    .done(function(){
        $("#aviso-contacto").modal("show");
    });
    return false;
}