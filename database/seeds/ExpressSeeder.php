<?php

use Illuminate\Database\Seeder;
use App\Express;

class ExpressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$express = Express::create([
        	'type_id'		=> '1',
        	'weight'	=> '1kg',
        	'price'		=>	'0'
        ]);
        $express = Express::create([
        	'type_id'		=> '1',
        	'weight'	=> '2kg',
        	'price'		=>	'1500'
        ]);
        $express = Express::create([
        	'type_id'		=> '1',
        	'weight'	=> '3kg',
        	'price'		=>	'1500'
        ]);
}
}




   