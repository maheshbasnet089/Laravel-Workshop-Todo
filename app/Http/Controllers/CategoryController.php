<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
    
        return view('backend.category.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
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
        $category = new Category(); 
        $category->title = $request->title; 
        $category->description = $request->description; 
        $category->save();
        // return redirect()->route('/category')->with('message','Data saved');
        return redirect('category')->with('message','Data saved');
        
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
        $category = Category::find($id);
        if (!$category) {
            // Handle the case where the category is not found
            return redirect()->route('/category/create')->with('error', 'Category not found.');
        }
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id); 
        $category->title = $request->title; 
        $category->description = $request->description; 
        $category->save();
        return redirect('category')->with('success','Edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Category::where('id',$id)->delete();
    
        if($data){
            return redirect('/category')->with('success','Deleted successfully');
        }else{
            echo('Error Deleting Category');
        }

    }
}
