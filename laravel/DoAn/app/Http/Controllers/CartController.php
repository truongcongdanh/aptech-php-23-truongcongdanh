<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;
use Session;

class CartController extends Controller
{
    public function showMonAn ()
    {
        $products = DB::table('products')->get(); 

        return view('component.ShowMonAn',compact('products'));
    }

    public function addCart(Request $req, $id){
        $product = DB::table('products')->where('id',$id)->first(); 
        if($product != null){
            $oldCart = Session('Cart') ? Session('Cart') : null;
            $newCart = new Cart($oldCart);
            $newCart->addCart($product, $id);

            $req->session()->put('Cart', $newCart);            
        }
        return view('component.cart',compact('newCart'));
    }

    public function DeleteItemCart(Request $req, $id){
        $oldCart = Session('Cart') ? Session('Cart') : null;
        $newCart = new Cart($oldCart);
        $newCart->DeleteItemCart($id);
        if(Count( $newCart->products ) > 0 ){
            $req->session()->put('Cart', $newCart);
        }
        else{
            $req->session()->forget('Cart');
        }
        return view('component.cart',compact('newCart'));
    }
}
