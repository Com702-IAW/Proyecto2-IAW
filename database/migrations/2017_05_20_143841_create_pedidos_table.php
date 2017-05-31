<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('monitor_id')->unsigned();
            $table->foreign('monitor_id')->references('id')->on('monitors');
            $table->integer('teclado_id')->unsigned();
            $table->foreign('teclado_id')->references('id')->on('teclados');
            $table->integer('mouse_id')->unsigned();
            $table->foreign('mouse_id')->references('id')->on('mice');
            $table->integer('parlante_id')->unsigned();
            $table->foreign('parlante_id')->references('id')->on('parlantes');
            $table->string('token');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
