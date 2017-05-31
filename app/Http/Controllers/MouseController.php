<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Pedido;
use App\Mouse;


class MouseController extends Controller
{
    public function delete(Request $r){
      $id = $r->componente_id;
      $elimino = false;
      $pedidos = Pedido::where('mouse_id',$id)->get()->first();
      if ($pedidos){
        return Response::json([ 'mensaje' => 'Mouse no puede ser eliminado, 
          esta siendo utilizado en pedidos de usuarios',
          'elimino' => $elimino]]);
      }
      else{
         Mouse::destroy($id);
        $elimino = true;
         return Response::json([ 'mensaje' => 'Mouse ha sido eliminado'],
          'elimino' => $elimino]);
      }
    }
}
