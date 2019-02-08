<?php

use Illuminate\Database\Seeder;

class TechcommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Techcomment::class, 50)->create();
    }
}
