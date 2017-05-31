<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Pedido;
use App\Parlante;

class ParlanteController extends Controller
{
    public function delete(Request $r){
      $id = $r->componente_id;
      $elimino = false;
      $pedidos = Pedido::where('parlante_id',$id)->get()->first();
      if ($pedidos){
        return Response::json([ 'mensaje' => 'Parlante no puede ser eliminado, 
          esta siendo utilizado en pedidos de usuarios',
          'elimino' => $elimino]);
      }
      else{
         Parlante::destroy($id);
         $elimino = true;
         return Response::json([ 'mensaje' => 'Parlante ha sido eliminado',
          'elimino' => $elimino]]);
      }
    }
}
