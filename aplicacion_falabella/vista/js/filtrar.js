$("#filtro").click(function(e){
  e.preventDefault();
  values = {
    "limiteInferior" : $("#limiteInferior").val(),
    "limiteSuperior" : $("#limiteSuperior").val()
  }
  $.post("../controlador/filtro.php",values, function(data){
    document.getElementById("tabla").innerHTML = data;
  });
});

