<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
	public function pedidos(){
		return $this->hasMany(Pedido::class);
	}
}
