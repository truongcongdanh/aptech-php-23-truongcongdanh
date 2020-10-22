<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Images;
use Image;

class StoreImageController extends Controller
{
    function index()
    {
     $data = Images::latest()->paginate(5);
     return view('store_image', compact('data'))
       ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    function indexABC()
    {
     $data = Images::latest();
     return view('store_image', compact('data'));
    }

    function insert_image(Request $request)
    {
     $request->validate([
      'user_name'  => 'required',
      'user_image' => 'required|image|max:2048'
     ]);

     $image_file = $request->user_image;

     $image = Image::make($image_file);

     Response::make($image->encode('jpg'));

     $form_data = array(
      'user_name'  => $request->user_name,
      'user_image' => $image
     );

     Images::create($form_data);

     return redirect()->back()->with('success', 'Image store in database successfully');
    }

    function fetch_image($image_id)
    {
     $image = Images::findOrFail($image_id);

     $image_file = Image::make($image->user_image);

     $response = Response::make($image_file->encode('jpg'));

     $response->header('Content-Type', 'image/jpg');

     return $response;
    }
}


