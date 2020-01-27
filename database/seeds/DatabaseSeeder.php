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
        $this->call(PortfolioTableSeeder::class);
        $this->call(FerramentasTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(AplicativosTableSeeder::class);
        $this->call(BlogTableSeeder::class);
    }
}
