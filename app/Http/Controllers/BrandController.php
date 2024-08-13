<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
    
        return view('backend.brand.list',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required', 
            'description'=>'required'
        ]);
        $brand = new Brand(); 
        $brand->title = $request->title; 
        $brand->description = $request->description; 
        $brand->save();
        // return redirect()->route('/brand')->with('message','Data saved');
        return redirect('brand')->with('message','Data saved');
        
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
        $brand = Brand::find($id);
        if (!$brand) {
            // Handle the case where the brand is not found
            return redirect()->route('/brand/create')->with('error', 'brand not found.');
        }
        return view('backend.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $brand = Brand::find($id); 
        $brand->title = $request->title; 
        $brand->description = $request->description; 
        $brand->save();
        return redirect('brand')->with('success','Edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Brand::where('id',$id)->delete();
    
        if($data){
            return redirect('/brand')->with('success','Deleted successfully');
        }else{
            echo('Error Deleting brand');
        }
    }
}
