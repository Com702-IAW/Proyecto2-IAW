<?php

use Illuminate\Database\Seeder;

class MonitoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('monitors')->delete();
        DB::table('monitors')->insert([
          [
            'marca' => 'Samsung',
            'precio' => 1000,
            'color' => 'Negro',
            'imagen'=> 'src/monitor0.png'
          ],
          [
            'marca' => 'Benq',
            'precio' => 2000,
            'color' => 'Blanco',
            'imagen' => 'src/monitor1.png'
          ],
          [
            'marca' => 'Acer',
            'precio' => 3000,
            'color' => 'Negro',
            'imagen' => 'src/monitor2.png'
          ],
          [
            'marca' => 'Mac',
            'precio' => 5000,
            'color' => 'Blanco',
            'imagen' => 'src/monitor3.png'
          ]
        ]);
    }
}
