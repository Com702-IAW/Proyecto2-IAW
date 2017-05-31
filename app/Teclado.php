<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teclado extends Model
{
     public function pedidos(){
		return $this->hasMany(Pedido::class);
	}
}
