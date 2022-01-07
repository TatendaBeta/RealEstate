<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function try()
    {
        $property = Property::all();
       return view('property.try', compact('property'));
        // return view('Property.index');
    }
    public function index()
    {
        
        $property = Property::all();
        return view('Property.index', compact('property'));
        // return view('Property.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.create', ['property_types' => PropertyType::all(), ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $property = new Property;
        $property->description=$request->input('Description');
        $property->location=$request->input('location');
        $property->type_id=$request->input('type_id');
        $property->agency_id=$request->input('agency_id');
        $property->price=$request->input('price');

        if($request->hasFile('images')){
            $file =$request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads/property/', $filename);
            $property->images=$filename;
        }
        $property ->save();
        return redirect()->back()->with('status', 'student image added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
