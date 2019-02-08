<?php

use Illuminate\Database\Seeder;

class CpusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cpu::class, 50)->create();
    }
}
