$("#botonRegistro").click(function(e){
  e.preventDefault();
  values = {
    "email" : $("#email").val(),
    "clave" : $("#clave").val(),
    "confirmeClave" : $("#confirmeClave").val(),
    "nombres" : $("#nombres").val(),
    "apellidos" : $("#apellidos").val(),
  }
  $.post("../controlador/registro.php",values, function(data){
    if (data=="1") 
    {
      window.location.href = 'http://localhost/aplicacion_falabella/aplicacion_falabella/vista/principal.php';
    }
    else
    {
      alert("Datos de registro incorrectos")
    }
  });
});

