<?php

use Illuminate\Database\Seeder;
use App\Teclado;


class TecladosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teclados')->delete();
        DB::table('teclados')->insert([
          [
            'marca' => 'Genius',
            'precio' => 500,
            'color' => 'Negro',
            'imagen' => 'src/teclado0.png'
          ],
          [
            'marca' => 'Lark',
            'precio' => 400,
            'color' => 'Blanco',
            'imagen' => 'src/teclado1.png'
          ]
        ]);
    }
}
