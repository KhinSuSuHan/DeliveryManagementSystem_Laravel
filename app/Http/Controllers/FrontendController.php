<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Type;
use App\Box;
use App\Express;

class FrontendController extends Controller
{
 public function index()
 {
  
   return view('frontend1.index',compact(''));
 }

 public function order()
 {
   $locations = Location::all();
   $types = Type::all();
   $boxes = Box::all();
   $expresses = Express::all();
   return view('frontend1.schedule_order',compact('locations','types','boxes', 'expresses'));
 }


 public function scheduleorder()   /*NEED fror Order  Button*/
 {

      // validation
   $request->validate([
    "inputUserid" => "required",
    "inputPhoneno" => "required",
    "inputAddress" => "required",
    "inputDate" => "required",
    "inputLocationid" => "required",
    "inputTypeid" => "required",
    "inputWeightid" => "required",
    "inputSizeid" => "required",
  ]);

   $scheduleorder = new Scheduleorder;
   $scheduleorder->name = request() -> inputUserid;
   $scheduleorder->phoneno = request() -> inputPhoneno;
   $scheduleorder->address = request() -> inputAddress;
   $scheduleorder->date = request() -> inputDate;
   $scheduleorder->location_id = request() -> inputLocationid;
   $scheduleorder->type_id = request() -> inputTypeid;
   $scheduleorder->weight_id = request() -> inputWeightid;
   $scheduleorder->size_id = request() -> inputSizeid;
   $scheduleorder->total = request() -> inputTotal;
   $scheduleorder-> save();  
   
   return redirect('frontend1.order');
 }


 public function locations()
 {
   $locations = Location::paginate(5);
   
   return view('frontend1.locations', compact('locations'));
   
 }

  public function pricecalculator()
 {
   $locations = Location::all();
   $types = Type::all();
   $boxes = Box::all();
   $expresses = Express::all();
   return view('frontend1.price_calculator',compact('locations','types','boxes', 'expresses'));
  
   
 }

 
}


