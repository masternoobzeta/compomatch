<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Seed_user::class);
        $this->call(Seed_comment::class);
        $this->call(HarddrivesTableSeeder::class);
        $this->call(CpuTableSeeder::class);
        $this->call(MemoriesTableSeeder::class);
        $this->call(MotherboardsTableSeeder::class);
        $this->call(PowersuppliesTableSeeder::class);
        $this->call(TowersTableSeeder::class);
        $this->call(VideocardsTableSeeder::class);
    }
}
