<?php

use Illuminate\Database\Seeder;

class VideocardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Videocard::class, 50)->create();
    }
}
