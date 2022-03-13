<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/test', function(){
//     return view('layout.template');
// });
Route::get('/admin', function(){
    return view('admin.index');
});

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-all');


// Route::get('/asd', function(){
//     return "asd";
// });
Route::resource('produk', ProdukController::class);
// Route::resource('user', DashBoardController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/user/beranda', function(){
//     return view('user.dashboard');
// })->name('dashboard-user');



Route::prefix('user')->group(function(){
    Route::get('/', [DashboardController::class, 'indexUser'])->name('dashboard-user');
});
