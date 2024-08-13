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

Route::get("/category/create",[\App\Http\Controllers\CategoryController::class,'create']);
Route::post("/category/create",[\App\Http\Controllers\CategoryController::class,'store']);
Route::get("/category/edit/{id}",[\App\Http\Controllers\CategoryController::class,'edit']);
Route::put("/category/edit/{id}",[\App\Http\Controllers\CategoryController::class,'update']);

Route::get("/product",[\App\Http\Controllers\ProductController::class,'index']);
Route::get("/product/create",[\App\Http\Controllers\ProductController::class,'create']);

