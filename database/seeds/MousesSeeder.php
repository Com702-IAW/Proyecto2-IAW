<?php

use Illuminate\Database\Seeder;
use App\Mouse;


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
          ]
        ]);
    }
}
