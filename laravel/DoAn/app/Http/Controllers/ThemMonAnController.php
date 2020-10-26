<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\ThemMonAns;
use ThemMonAn;

class ThemMonAnController extends Controller
{
    // // show món ăn
    // function showmonan()
    // {
    //     return view('component.ShowMonAn');
    // }
    // them mon
    function index()
    {
     $data = ThemMonAns::latest()->paginate(5);
     return view('themMonAn', compact('data'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    function insert_image(Request $request)
    {
     $request->validate([
      'name'  => 'required',
      'price'  => 'required',
      'image' => 'required|image|max:2048'
     ]);

     $image_file = $request->user_image;

     $image = Image::make($image_file);

     Response::make($image->encode('jpeg'));

     $form_data = array(
      'name'  => $request->name,
      'price'  => $request->price,
      'image' => $image
     );

     Images::create($form_data);

     return redirect()->back()->with('success', 'Image store in database successfully');
    }

    function fetch_image($image_id)
    {
     $image = Images::findOrFail($image_id);

     $image_file = Image::make($image->image);

     $response = Response::make($image_file->encode('jpeg'));

     $response->header('Content-Type', 'image/jpeg');

     return $response;
    }
}
