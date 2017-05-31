$(function () {

  $.ajax({
     url: "/componentes/json",
     context: document.body,
     success: function (data) {
         mostrar(ordenarComponentes(data));
     }
 });

});

function ordenarComponentes(componentes) {
    var index, index1, cont;
    cont = 0;
    var arreglo = new Array();
    for (index = 0; index < componentes.length; ++index) {
        var objet = componentes[index];
        for (index1 = 0; index1 < objet.length; ++index1) {
            var objeto = objet[index1];
            objeto.id2 = objet[index1].id;    //para ubicar en segund arreglo en json (dentro de tipo de componente)
            objeto.id = index;      //para ubicar en primer arreglo en json
            //        objeto.pedido = false;
            arreglo[cont] = objeto;
            ++cont;
        }
    }
    return arreglo;
}

function mostrar(arreglo) {
    var index2,index;

    for (index2 = 0; index2 < arreglo.length; ++index2) {
        var objeto = arreglo[index2];
          agregarComponente(objeto,index2);
    }
}

function agregarComponente(componente,indice) {

    var tipo;

    switch(componente.id){
      case 0 :
        tipo = "Monitor";
        break;
      case 1 :
        tipo = "Teclado";
        break;
      case 2 :
        tipo = "Mouse";
        break;
      case 3 :
        tipo = "Parlante";
        break;
    }

    var row = $("<tr></tr>").attr("id", indice);
    row.append($("<td></td").text(tipo));
    row.append($("<td></td").text(componente.marca));
    row.append($("<td></td").text(componente.precio));
    row.append($("<td></td").text(componente.color));
    var boton = $("<button></button>").text("Eliminar");
    boton.attr("type","submit");
    boton.attr("class","btn btn-primary")
    row.append($("<td></td").append(boton));
    boton.click(function() {
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
        eliminar(componente,indice);
    });
    $("#tabla-eliminar").append(row);
}

function eliminar(componente,indice){
  var url1 = "";

    switch(componente.id){
      case 0 :
        url1 = '/componentes/monitor/delete';
        break;
      case 1 :
        url1 = '/componentes/teclado/delete';
        break;
      case 2 :
        url1 = '/componentes/mouse/delete';
        break;
      case 3 :
        url1 = '/componentes/parlante/delete';
        break;
    }

    $.ajax({
      type: "post",
      url : url1,
      data : {
           componente_id: componente.id2
          },
      datatype: "JSON",
        success : function(data){
          alert(data.mensaje);
          if(data.elimino){
            $("#"+indice).remove();
          }
      }
     });
}
