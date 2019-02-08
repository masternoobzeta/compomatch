<?php

use Illuminate\Database\Seeder;

class PowersuppliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Powersupply::class, 50)->create();
    }
}
