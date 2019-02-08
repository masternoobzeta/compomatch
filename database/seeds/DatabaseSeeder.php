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
        $this->call(UsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(HarddrivesTableSeeder::class);
        $this->call(CpusTableSeeder::class);
        $this->call(MemoriesTableSeeder::class);
        $this->call(MotherboardsTableSeeder::class);
        $this->call(PowersuppliesTableSeeder::class);
        $this->call(TowersTableSeeder::class);
        $this->call(VideocardsTableSeeder::class);
        $this->call(HardwaresTableSeeder::class);
        $this->call(TecharticlesTableSeeder::class);
    }
}
