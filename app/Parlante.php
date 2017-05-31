<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parlante extends Model
{
  public function pedidos(){
		return $this->hasMany(Pedido::class);
	}
}
