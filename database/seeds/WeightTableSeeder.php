<?php

use Illuminate\Database\Seeder;
use App\Weight;

class WeightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $weights = ['1kg','2kg', '3kg' ,'4kg' ,'5kg'];

      foreach ($weights as $row) {
        Weight::create(['weight(kg)' => $row]); 
    }
}
}