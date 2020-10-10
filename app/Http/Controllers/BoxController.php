<?php

namespace App\Http\Controllers;

use App\Box;
use Illuminate\Http\Request;
use App\Type;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boxes = Box::all();
        return view('backend.boxes.index',compact('boxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $boxes = Box::all();
         $types = Type::all();
         return view('backend.boxes.create',compact('boxes', 'types'));
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
            "size" => "required",
            "price" => "required"
        ]);

        // data store
        $boxes = new Box;
        $boxes->type_id= $request->type_id;
        $boxes->size= $request->size;
        $boxes->price= $request->price;
        $boxes->save();

        // return redirect
        return redirect()->route('boxes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function show(Box $box)
    {
         return view('backend.boxes.detail',compact("box"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function edit(Box $box)
    {
        $boxes = Box::all(); 
        return view('backend.boxes.edit',compact('boxes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Box $box)
    {
         // validation
        $request->validate([
            "type_id" => "required",
            "size" => "required",
            "price" => "required"
        ]);

        // data store
      /*  $boxes = new Boxes;*/
        $box->type_id= $request->type_id;
        $box->size= $request->size;
        $box->price= $request->price;
        $box->save();

        // return redirect
        return redirect()->route('boxes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function destroy(Box $box)
    {
         $box->delete();
        return redirect()->route('boxes.index');
    }
}
