<?php

use Illuminate\Database\Seeder;

class MousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mice')->delete();
        DB::table('mice')->insert([
          [
            'marca' => 'Genius',
            'precio' => 200,
            'color' => 'Negro',
            'imagen' => 'src/mouse0.png'
          ],
          [
            'marca' => 'Microsoft',
            'precio' => 300,
            'color' => 'Gris',
            'imagen' => 'src/mouse1.png'
          ],
          [
            'marca' => 'Spider',
            'precio' => 700,
            'color' => 'Metalico',
            'imagen' => 'src/mouse2.png'
          ],
          [
            'marca' => 'C+',
            'precio' => 400,
            'color' => 'Negro',
            'imagen' => 'src/mouse3.png'
          ]
        ]);
    }
}
