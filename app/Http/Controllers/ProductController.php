<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $data["categories"] = $categories; 
        $data["brands"] = $brands;
        $data["sizes"] = ['XL','L','M','S'];
        return view('backend.product.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        // $imageName = time().'.'.$request->image->extension();
        $imageName =time().'.'.$request->image->getClientOriginalExtension();
        error_log($imageName);

        $request->image->move(public_path('images'), $imageName);
        $product->name = $request->name; 
        $product->price = $request->price; 
        $product->description = $request->description; 
        $product->stock = $request->stock; 
        $product->size = $request->size; 
        $product->color = $request->color; 
        $product->brand_id = $request->brand_id; 
        $product->category_id = $request->category_id;
        $product->image = 'images/'.$imageName;
        $product->save();
        return redirect('products')->with('success','product created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
