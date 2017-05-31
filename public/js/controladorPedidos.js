
$(function () {

  $.ajax({
     url: "/pedidos/listado",
     context: document.body,
     success: function (data) {
         mostrar(data);
     }
 });

});

function mostrar(arreglo) {
    var index2;

    for (index2 = 0; index2 < arreglo.length; ++index2) {
        var objeto = arreglo[index2];
        agregarComponente(objeto,index2);
    }
}

function agregarComponente(componente,indice) {
    var row = $("<tr></tr>").attr("id", indice);
    row.append($("<td></td>").text(componente.monitor));
    row.append($("<td></td>").text(componente.teclado));
    row.append($("<td></td>").text(componente.mouse));
    row.append($("<td></td>").text(componente.parlante));
    row.append($("<td></td>").text(componente.url));
    var boton = $("<button></button>").text("Ver");
    boton.attr("class","btn btn-primary");
    boton.attr("type","submit");
    row.append($("<td></td").append(boton));
    boton.click(function() {
        obtenerPedido(componente);
    });
    $("#tablaPedidos").append(row);
}

function obtenerPedido(componente){
  var index;
    $.ajax({
        url: "/pedidos/listado/"+componente.id,
        context: document.body,
        success: function (data) {
             mostrarPedido(data);
     }
    });
}

function mostrarPedido(arreglo){
    var index2;

    for (index2 = 0; index2 < arreglo.length; ++index2) {
        var objeto = arreglo[index2];
        if (objeto !== null)
            $("#imagen" + index2).attr("src", objeto.imagen);
    }
}
