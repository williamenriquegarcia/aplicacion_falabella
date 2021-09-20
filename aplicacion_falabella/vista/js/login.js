
$("#botonLogin").click(function(){
  values = {
    "email" : $("#email").val(),
    "clave" : $("#clave").val()
  }
  $.post("../controlador/login.php",values, function(data){
    if (data=="1") 
    {
      window.location.href = 'http://localhost/aplicacion_falabella/aplicacion_falabella/vista/principal.php';
    }
    else
    {
      alert("Datos de logueo incorrectos")
    }
  });
});