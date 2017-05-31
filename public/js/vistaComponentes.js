/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function mostrar(arreglo) {
    var index2, cartel;
    cartel = "";
    for (index2 = 0; index2 < arreglo.length; ++index2) {
        var objeto = arreglo[index2];
        agregarComponente(objeto,index2);
        cartel = cartel + " " + (objeto.pedido);
    }

}

function agregarComponente(componente,indice) {
    var primerTex = $("<p></p>").text("Marca: " + componente.marca);
    var segundoTex = $("<p></p>").text("Precio: " + componente.precio);
    var tercerTex = $("<p></p>").text("Color: " + componente.color);
    var div = $("<div></div>").attr("class", "panel-body");
    var imagen = $("<img></img>").attr("src", componente.imagen);
    imagen.attr("align", "right");
    var opcion = $("<option></option>").attr("value",componente.id);
    opcion.text("Pedido N°: "+componente.marca);
    $("#pedidos").append(opcion);
    div.append(imagen);
    div.append(primerTex);
    div.append(segundoTex);
    div.append(tercerTex);
    var boton = $("<button></button>").text("Agregar al carrito");
//var botonB = $("<button></button>").text("Borrar del carrito");
    boton.attr("id", indice);
    boton.click(function() {
        actualizarPedido(componente);
    });
    boton.attr("id", indice);
  /*  botonB.click(function() {
        eliminarItem(componente);
    });*/
    div.append(boton);
    var cuartoTex = $("<p></p>").text("");
    div.append(cuartoTex);
  //  div.append(botonB);
    $("#collapse" + componente.id).append(div);
}
