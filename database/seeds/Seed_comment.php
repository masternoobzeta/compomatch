<?php

use Illuminate\Database\Seeder;

class Seed_comment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Comment::class, 50)->create();
    }
}
