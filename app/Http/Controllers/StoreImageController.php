<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Property;



class StoreImageController extends Controller
{
    function index()
    {
     $data = Property::latest()->paginate(5);
     return view('property', compact('data'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    function insert_image(Request $request)
    {
     $request->validate([
      'type_id'  => 'required',
      'location'  => 'required',
      'agency_id'  => 'required',
      'Description'  => 'required',
      'price'  => 'required',
      'images' => 'required|image|max:2048'
     ]);

     $image_file = $request->images;

     $image = Property::make($image_file);

     Response::make($image->encode('jpeg'));

     $form_data = array(
      'type_id'  => $request->type_id,
      'location'  => $request->location,
      'agency_id'  => $request->agency_id,
      'Description'  => $request->Description,
      'price'  => $request->price,
      'images' => $image
     );

     Property::create($form_data);

     return redirect()->back()->with('success', 'Image store in database successfully');
    }

    function fetch_image($image_id)
    {
     $image = Property::findOrFail($image_id);

     $image_file = Property::make($image->images);

     $response = Response::make($image_file->encode('jpeg'));

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }
}
