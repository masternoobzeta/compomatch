<?php

use Illuminate\Database\Seeder;

class MemoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Memory::class, 50)->create();
    }
}
