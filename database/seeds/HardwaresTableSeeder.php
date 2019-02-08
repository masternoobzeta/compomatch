<?php

use Illuminate\Database\Seeder;

class HardwaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hardware::class, 50)->create();
    }
}
