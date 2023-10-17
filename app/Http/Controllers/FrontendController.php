<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $products = Product::get();
        return view('frontend.home',compact('products'));
    }


    public  function about()
    {
        return view('frontend.about');
    }


    public function shop()
    {
        // orderBy (Asscending Descending order)
        //$product = Product::orderBy('id','desc')->get();
        
        //Limit
        //$product = Product::limit(2)->get();

        // Latest
        $product = Product::latest()->get();
        return view('frontend.shop',compact('product'));
    }


    public function cart()
    {
        return view('frontend.cart');
    }


    public function checkout($id)
    {
       
        $product = Product::find($id);
        return view ('frontend.checkout',compact('product'));   
    }


    public function contact()
    {
        return view('frontend.contact');
    }
}
