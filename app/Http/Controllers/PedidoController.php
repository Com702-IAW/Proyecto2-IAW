<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Auth;
use App\Pedido;
use App\Monitor;
use App\Teclado;
use App\Mouse;
use App\Parlante;
use Webpatser\Uuid\Uuid;

class PedidoController extends Controller
{
	public function index(){
        if (Auth::guest())
          return redirect('home');
        else
            return view('componentes.panelPedidos');
   }

   public function json(){
    if(!Auth::guest()){
      $pedidos = Pedido::where("user_id",Auth::user()->getId())->get();
      $resultado = array();
      $index = 0;
      foreach ($pedidos as $pedido) {
          $id = $pedido->id;
          $monitor = Monitor::where('id',$pedido->monitor_id)->get()->first()->marca;
          $teclado = Teclado::where('id',$pedido->teclado_id)->get()->first()->marca;
          $mouse = Teclado::where('id',$pedido->mouse_id)->get()->first()->marca;
          $parlante = Teclado::where('id',$pedido->parlante_id)->get()->first()->marca;
          $url = 'localhost/token/' . $pedido->token;
          $p = compact(['id','monitor','teclado','mouse','parlante','url']);
          $resultado[$index] = $p;
          ++$index;
      }
      return $resultado;
    }
    else
      return redirect("home");
   }

	public function store(Request $r){

    if (!Auth::guest()){
      $p = new Pedido;
      $p->user_id = Auth::user()->getId();
      $p->monitor_id = $r->monitor_id;
      $p->teclado_id  = $r->teclado_id;
      $p->mouse_id = $r->mouse_id;
      $p->parlante_id = $r->parlante_id;
      $p->token = Uuid::generate();
      $p->save();

      $ruta = 'localhost/token/' . $p->token;

      return Response::json([ 'mensaje' => 'El pedido se guardo correctamente',
                              'enlace' => $ruta]);
	}
  else
    return redirect("home");
}

  public function pedidoId($id){

    if (!Auth::guest()){
      $p = Pedido::where('id',$id)->get();
      $pedido = $p[0];
      if (Auth::user()->getId() == $pedido->user_id){
         $monitor = Monitor::find($pedido->monitor_id);
          $teclado = Teclado::find($pedido->teclado_id);
          $mouse = Mouse::find($pedido->mouse_id);
          $parlante = Parlante::find($pedido->parlante_id);
          $p = array($monitor,$teclado,$mouse,$parlante);
        return $p;
      }
       else
          return redirect("home");
    }
    else
      return redirect("home");


  }

  public function compartido($id) { 
    $pedido = Pedido::where("token",$id)->get()->first();

    if($pedido){
      $monitor = Monitor::where('id',$pedido->monitor_id)->get()->first()->imagen;
      $teclado = Teclado::where('id',$pedido->teclado_id)->get()->first()->imagen;
      $mouse = Mouse::where('id',$pedido->mouse_id)->get()->first()->imagen;
      $parlante = Parlante::where('id',$pedido->parlante_id)->get()->first()->imagen;
      $p = new Pedido;
      $p->urlMonitor = asset($monitor);
      $p->urlTeclado = asset($teclado);
      $p->urlMouse = asset($mouse);
      $p->urlParlante = asset($parlante);

      return view ('componentes.panelCompartido')->with("p",$p);
    }
    else
      return redirect('home');
    }

}
