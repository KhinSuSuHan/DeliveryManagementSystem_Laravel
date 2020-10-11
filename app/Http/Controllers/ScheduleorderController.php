<?php

namespace App\Http\Controllers;

use App\Scheduleorder;
use Illuminate\Http\Request;

class ScheduleorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // validation
   $request->validate([
    "inputUserid" => "required",
    "inputPhoneno" => "required",
    "inputAddress" => "required",
    "inputDate" => "required",
    "inputLocationid" => "required",
    "inputTypeid" => "required",
   
  ]);

   $scheduleorder = new Scheduleorder;
   $scheduleorder->name = $request -> inputUserid;
   $scheduleorder->phoneno =$request -> inputPhoneno;
   $scheduleorder->address = $request -> inputAddress;
   $scheduleorder->date = $request-> inputDate;
   $scheduleorder->location_id = $request -> inputLocationid;
   $scheduleorder->type_id = $request-> inputTypeid;
   $scheduleorder->weight_id = $request -> inputWeightid;
   $scheduleorder->size_id = $request -> inputSizeid;
   $scheduleorder->total = $request -> inputTotal;
   $scheduleorder-> save();  
   
   return redirect('frontend1.schedule_order');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scheduleorder  $scheduleorder
     * @return \Illuminate\Http\Response
     */
    public function show(Scheduleorder $scheduleorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scheduleorder  $scheduleorder
     * @return \Illuminate\Http\Response
     */
    public function edit(Scheduleorder $scheduleorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scheduleorder  $scheduleorder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scheduleorder $scheduleorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scheduleorder  $scheduleorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scheduleorder $scheduleorder)
    {
        //
    }
}
