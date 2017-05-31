<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mouse extends Model
{
    public function pedidos(){
		return $this->hasMany(Pedido::class);
	}
}
