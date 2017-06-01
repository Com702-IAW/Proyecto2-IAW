<?php

use Illuminate\Database\Seeder;
use App\Monitor;

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
          ]
        ]);
    }
}
