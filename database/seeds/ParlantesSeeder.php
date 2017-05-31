<?php

use Illuminate\Database\Seeder;

class ParlantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parlantes')->delete();
        DB::table('parlantes')->insert([
          [
            'marca' => 'Genius',
            'precio' => 500,
            'color' => 'Negro',
            'imagen' => 'src/parlantes0.png'
          ],
          [
            'marca' => 'Genius',
            'precio' => 300,
            'color' => 'Blanco y Verde',
            'imagen' => 'src/parlantes1.png'
          ],
          [
            'marca' => 'Genius',
            'precio' => 700,
            'color' => 'Bamboo',
            'imagen' => 'src/parlantes2.png'
          ],
          [
            'marca' => 'Genius',
            'precio' => 400,
            'color' => 'Negro y Rojo',
            'imagen' => 'src/parlantes3.png'
          ]
        ]);
    }
}
