<?php

use Illuminate\Database\Seeder;

class HardwarecommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hardwarecomment::class, 50)->create();
    }
}
