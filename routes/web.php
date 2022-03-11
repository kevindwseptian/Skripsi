<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;

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
Route::resource('user', DashBoardController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
