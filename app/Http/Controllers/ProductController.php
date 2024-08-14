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
        $products = Product::all(); 

        return view('backend.product.list', compact('products'));
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
        $product = Product::find($id);
    

        return view('backend.product.single',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id); 
        $categories = Category::all();
        $brand = Brand::all();
        $data['product'] = $product;
        $data['categories'] = $categories; 
        $data['brands'] = $brand;
        $data['sizes'] = ['L','XL','M','S'];
        return view('backend.product.edit',$data); 
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id); 
        $p_image='images/'.$product->image;
        dump($p_image);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            if (file_exists(public_path($name =  $p_image))) 
            {
                unlink(public_path($name));
            };
            $image->move(public_path('images'),$imageName);
            $product->image = $imageName;
        }
        $product->name = $request->name; 
        $product->description = $request->description; 
        $product->price = $request->price; 
        $product->stock = $request->stock; 
        $product->color = $request->color;
        $product->size = $request->size; 
        $product->category_id = $request->category_id; 
        $product->brand_id = $request->brand_id; 

        $product->save();
        // return redirect()->route('product',['id'=>$id])->with('success','Edit successfull');
        // return redirect()->route('product',['id'=>$id]); 
        // return redirect()->route('product.show',['id'=>$id]); 
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Product::where('id',$id)->delete();
        if(!$data){
            echo('Error deleting product');
        }else{
            return redirect('product')->with('success','Delete successfully');
        }

    }
}
