<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
    // return "string";
});

Route::get('/test', function(){
    return view('layout.template');
});
Route::get('/admin', function(){
    return view('admin.index');
});
Route::resource('produk', ProdukController::class);
