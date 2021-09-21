$("#reporte").click(function(e){
  var doc = new jsPDF();

  var specialElementHandlers = 
  {
    '#editor': function (element,renderer) 
    {
      return true;
    }
  };
  
  doc.fromHTML($('#divTabla').html(), 0, 0, 
  {
    'width': 0
  });
  
  doc.save('reporte.pdf');

});