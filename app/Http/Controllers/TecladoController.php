<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Pedido;
use App\Teclado;

class TecladoController extends Controller
{
    public function delete(Request $r){
      $id = $r->componente_id;
      $elimino = false;
      $pedidos = Pedido::where('teclado_id',$id)->get()->first();
      if ($pedidos){
        return Response::json([ 'mensaje' => 'Teclado no puede ser eliminado, 
          esta siendo utilizado en pedidos de usuarios',
          'elimino' => $elimino]);
      }
      else{
          Teclado::destroy($id);
          $elimino = true;
          return Response::json([ 'mensaje' => 'Teclado ha sido eliminado',
            'elimino' => $elimino]);
      }
    }
}
