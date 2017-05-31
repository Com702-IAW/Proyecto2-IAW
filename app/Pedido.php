<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

	protected $fillable = ['user_id', 'monitor_id', 'teclado_id','mouse_id','parlante_id'];

	protected $guarded = ['id'];

	public function user(){
        return $this->belongsTo(User::class);
    }

    public function monitor(){
        return $this->belongsTo(Monitor::class);
    }

    public function teclado(){
        return $this->belongsTo(Teclado::class);
    }

    public function mouse(){
        return $this->belongsTo(Mouse::class);
    }

    public function parlante(){
        return $this->belongsTo(Parlante::class);
    }

}
