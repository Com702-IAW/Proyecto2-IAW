<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Monitor;
use App\Mouse;
use App\Teclado;
use Auth;
use App\User;
use App\Parlante;
use App\Pedido;
use Redirect;
use App\AdminController;
use DB;

class ComponenteController extends Controller
{
    public function index(){
      return view('componentes.producto');
    }

    public function json(){
      $monitores = Monitor::all();
      $teclados = Teclado::all();
      $mouses = Mouse::all();
      $parlantes = Parlante::all();
      //agregar lo de parlantes y eso array($monitores,$parlantes,...)
      $componentes = array($monitores,$teclados,$mouses,$parlantes);
      return $componentes;
    }

   public function store(Request $request){

       if($request->isMethod('post')){

        $tipo = "";
        $tipo2 = $request->input('tipo');

        switch ($tipo2) {
          case "0":
             $tipo = "monitors";
            break;
           case "1":
             $tipo = "teclados";
            break;
          case "2":
            $tipo = "mice";
            break;
          case "3":
            $tipo = "parlantes";
            break;
        }
    
        /*no utilizamos el modelo ya que con esta manera reducimos codigo, por lo tanto, segun el indice
          determinamos a que tabla hay que insertar el elemento*/ 
      
        $file = $request->file('imagen');
 
        //obtenemos el nombre del archivo
        $nombre =  $file->getClientOriginalName();

        DB::table($tipo)->insert([
          [
            'marca' => $request->input('marca'),
            'precio' => $request->input('precio'),
            'color' => $request->input('color'),
            'imagen' => "src/" . $nombre
          ]]);   
       }

      $file->move(
        base_path() . '/public/src/', $nombre
      );

       return redirect('home');
      } 
  
    
}
