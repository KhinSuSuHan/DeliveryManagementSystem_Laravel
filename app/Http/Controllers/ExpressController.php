<?php

namespace App\Http\Controllers;

use App\Express;
use Illuminate\Http\Request;
use App\Type;

class ExpressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expresses = Express::all();
        return view('backend.expresses.index',compact('expresses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $expresses = Express::all();
       $types = Type::all();
       return view('backend.expresses.create',compact('expresses', 'types'));
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
            "type_id" => "required",
            "weight" => "required",
            "price" => "required"
        ]);

        // data store
        $expresses = new Express;
        $expresses->type_id= $request->type_id;
        $expresses->weight= $request->weight;
        $expresses->price= $request->price;
        $expresses->save();

        // return redirect
        return redirect()->route('backend.expresses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Express  $express
     * @return \Illuminate\Http\Response
     */
    public function show(Express $express)
    {
       return view('backend.expresses.detail',compact("express"));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Express  $express
     * @return \Illuminate\Http\Response
     */
    public function edit(Express $express)
    {
        $expresses = Express::all(); 
        return view('backend.expresses.edit',compact('expresses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Express  $express
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Express $express)
    {
        // validation
        $request->validate([
            "type_id" => "required",
            "weight" => "required",
            "price" => "required"
        ]);

        // data store

        $expresses->type_id= $request->type_id;
        $expresses->weight= $request->weight;
        $expresses->price= $request->price;
        $expresses->save();

        // return redirect
        return redirect()->route('backend.expresses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Express  $express
     * @return \Illuminate\Http\Response
     */
    public function destroy(Express $express)
    {
       $express->delete();
       return redirect()->route('backend.expresses.index');
   }
}
