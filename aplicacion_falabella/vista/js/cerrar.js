if ($("#cerrar")) 
{
  $("#cerrar").click(function(e){
    e.preventDefault();
    $.post("../controlador/cerrar.php", function(){});
    window.location = "http://localhost/aplicacion_falabella/aplicacion_falabella/index.php";
  });
}


