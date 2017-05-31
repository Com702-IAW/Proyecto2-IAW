<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;
use App\Pedido;
use Response;

class MonitorController extends Controller
{
    public function delete(Request $r){

      $id = $r->componente_id;
      $elimino = false;
      $pedidos = Pedido::where('monitor_id',$id)->get()->first();
      if ($pedidos){
        return Response::json([ 'mensaje' => 'Monitor no puede ser eliminado, 
          esta siendo utilizado en pedidos de usuarios',
          'elimino' => $elimino]);
      }
      else{
         Monitor::destroy($id);
          $elimino = true;
         return Response::json([ 'mensaje' => 'Monitor ha sido eliminado',
                                'elimino' => $elimino]);
      }
    }
}
