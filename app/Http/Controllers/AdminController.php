<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Monitor;
use App\Mouse;
use App\Teclado;
use App\User;
use App\Parlante;
use App\Pedido;
use Redirect;
use DB;

class AdminController extends Controller
{
      public function index(){
        if (Auth::guest())
          return redirect('home');
        else
          if(Auth::user()->isAdmin()){
              $monitores = Monitor::all();
              $teclados = Teclado::all();
              $mouses = Mouse::all();
              $parlantes = Parlante::all();
              //agregar lo de parlantes y eso array($monitores,$parlantes,...)
              $componentes = array($monitores,$teclados,$mouses,$parlantes);
              return view ('componentes.panelAdmin')->with('componentes',$componentes);
            }
          else
            return redirect('home');
      }     
}
