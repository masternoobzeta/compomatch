<?php

use Illuminate\Database\Seeder;

class MotherboardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Motherboard::class, 50)->create();
    }
}
