<?php

use Illuminate\Database\Seeder;

class TecharticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Techarticle::class, 50)->create();
    }
}
