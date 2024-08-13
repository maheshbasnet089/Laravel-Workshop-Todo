<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.pages.home');
});

Route::get("/about",function(){
    return view("backend.pages.about");
});

Route::get("/contact",function(){
    return view('backend.pages.contact');
});


Route::get("/category",[\App\Http\Controllers\CategoryController::class,'index']);
Route::get("/category/delete/{id}",[\App\Http\Controllers\CategoryController::class,'destroy']);
Route::get("/category/create",[\App\Http\Controllers\CategoryController::class,'create']);
Route::post("/category/create",[\App\Http\Controllers\CategoryController::class,'store']);
Route::get("/category/edit/{id}",[\App\Http\Controllers\CategoryController::class,'edit']);
Route::put("/category/edit/{id}",[\App\Http\Controllers\CategoryController::class,'update']);

// Brand routes 
Route::get("/brand",[\App\Http\Controllers\BrandController::class,'index']);
Route::get("/brand/delete/{id}",[\App\Http\Controllers\BrandController::class,'destroy']);
Route::get("/brand/create",[\App\Http\Controllers\BrandController::class,'create']);
Route::post("/brand/create",[\App\Http\Controllers\BrandController::class,'store']);
Route::get("/brand/edit/{id}",[\App\Http\Controllers\BrandController::class,'edit']);
Route::put("/brand/edit/{id}",[\App\Http\Controllers\BrandController::class,'update']);


// Product Routes 
Route::get("/product",[\App\Http\Controllers\ProductController::class,'index']);
Route::get("/product/create",[\App\Http\Controllers\ProductController::class,'create']);
Route::post("/product/create",[\App\Http\Controllers\ProductController::class,'store']);



