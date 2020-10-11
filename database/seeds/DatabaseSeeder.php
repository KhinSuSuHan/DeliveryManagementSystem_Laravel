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
        $this->call(TypeTableSeeder::class);
        $this->call(WeightTableSeeder::class);
        $this->call(ExpressSeeder::class);
    }
}
