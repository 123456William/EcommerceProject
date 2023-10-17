<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Quantity' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'Image' => 'required',

        ]); 

        $product = new Product();
        if ($request->hasFile('Image')) {
            $file = $request->Image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Image', $filename);
            $product->Image = $filename;
        }
            

        $product->Name = $request->Name;
        $product->Quantity = $request->Quantity;
        $product->Price = $request->Price;
        $product->Description = $request->Description;
        // $product->Description = "ram.jgp";
        // $product->Image = $request->Image;
        $product->save();
        //    return view ('product.index');
        return redirect()->back()->with('success',"Successfully stored");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {   
        // return 1;
        
        return view ('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'Name' => 'required',
            'Quantity' => 'required',
            'Price' => 'required',
            'Description' => 'required',
            'Image' => 'required',

        ]); 

        if ($request->hasFile('Image')) {
            $file = $request->Image;
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Image', $filename);
            $product->Image = $filename;
        }

        $product->Name = $request->Name;
        $product->Quantity = $request->Quantity;
        $product->Price = $request->Price;
        $product->Description = $request->Description;
        // $product->Image = $request->Image;
        $product->save();
        return redirect('product')->with('update',"Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        
        $product->delete();
        // return redirect()->back();
       return redirect()->back()->with('delete',"Deleted Successfully");
    }
}
