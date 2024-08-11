<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about",function(){
    return view("about");
});

Route::get("/product",[\App\Http\Controllers\ProductController::class,'index']);
Route::get("/product/create",[\App\Http\Controllers\ProductController::class,'create']);