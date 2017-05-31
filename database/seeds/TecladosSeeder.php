<?php

use Illuminate\Database\Seeder;

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
          ],
          [
            'marca' => 'Spider',
            'precio' => 1000,
            'color' => 'Negro y Verde',
            'imagen' => 'src/teclado2.png'
          ],
          [
            'marca' => 'Active',
            'precio' => 1200,
            'color' => 'Negro y Azul',
            'imagen' => 'src/teclado3.png'
          ]
        ]);
    }
}
