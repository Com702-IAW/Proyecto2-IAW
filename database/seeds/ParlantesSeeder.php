<?php

use Illuminate\Database\Seeder;
use App\Parlante;


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
          ]
        ]);
    }
}
