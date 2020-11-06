<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;

use App\Image;

class ImageController extends Controller
{
    public function index()
    {
        return view('component.image');
    }
 
    public function save(Request $request)
    {
    
       request()->validate([
            'fileUpload' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('fileUpload')) {
           $destinationPath = 'img/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
           $insert['name'] = $request->input('name');
           $insert['price'] =$request->input('price');
        }
        $check = Image::insertGetId($insert);
        return redirect()->route('trangChinh');

 
    }
}
