<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scheduleorder extends Model
{
    protected $fillable = [
		'name', 'phoneno', 'address', 'date', 'location_id', 'type_id', 'weight_id', 'size_id','total'
	];
}
