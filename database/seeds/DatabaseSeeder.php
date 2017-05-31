<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(MonitoresSeeder::class);
         $this->call(TecladosSeeder::class);
         $this->call(MousesSeeder::class);
         $this->call(AdminSeeder::class);
         $this->call(ParlantesSeeder::class);
    }
}
