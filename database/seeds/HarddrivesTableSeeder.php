<?php

use Illuminate\Database\Seeder;

class HarddrivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Harddrive::class, 50)->create();
    }
}
