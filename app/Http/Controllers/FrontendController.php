<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class FrontendController extends Controller
{
     public function index()
    {
        
       return view('frontend1.index',compact(''));
    }

     public function order()
    {
        
       return view('frontend1.schedule_order');
    }

     public function orderform()
    {
        
       return view('frontend1.order');
    }

     public function schedule()
    {
        
       return view('frontend1.order');
    }


     public function locations()
    {
       $locations = Location::paginate(5);
        
       return view('frontend1.locations', compact('locations'));
      
    }
}
