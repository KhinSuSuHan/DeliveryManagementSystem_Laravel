<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Express extends Model
{
     protected $fillable = [
		'type_id', 'weight', 'price',
	];
}
