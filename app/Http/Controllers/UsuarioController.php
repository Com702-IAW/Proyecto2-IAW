<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsuarioController extends Controller{
	
   public function index(){
        if (Auth::guest())
          return redirect('home');
        else
            return view ('componentes.panelPedidos');
   }

}
