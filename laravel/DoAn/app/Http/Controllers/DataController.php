<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use DB;
use App\Image;

class DataController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('component.create');
    }
    // 
    public function trangChu()
    {
        $arr = [
            'listImage' => Image::get(),
        ];

        return view('component.trangChu', $arr);
    }

    public function monAn()
    {   
        $products = DB::table('products')->get(); 

        return view('component.monAn',compact('products'));
    }
 
    public function thucUong()
    {
        $products = DB::table('products')->get(); 
        return view('component.thucUong',compact('products'));
    }

    public function compo()
    {
        $products = DB::table('products')->get();
        return view('component.compo',compact('products'));
    }

    public function giamGia()
    {
        $products = DB::table('products')->get();
        return view('component.giamGia',compact('products'));
    }

    public function lienHe()
    {
        return view('component.lienHe');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $product = new Product();
        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->image = $request->image;
        // $product->save();
        // return redirect()->route('component.monAn');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
    }
    // search
    public function search(Request $request)
    {
        //  $user = User::where('name', 'like', '%' . $request . '%')->get();
        
        $search = $request->get('search');
        // dd($search);
        $products = DB::table('products')->where('name', 'like','%' .$search.'%')->get();
        return view('component.monAn',compact('products'));
    }
}
