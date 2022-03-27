<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\PemesananController;

Route::get('/', function () {
    return view('dashboard');
});


// Route::get('/admin', function(){
//     return view('admin.index');
// });

// Route::get('/admin/index', [DashboardController::class, 'indexUser'])->name('dashboard-admin');

Route::get('/admin', [DashboardController::class, 'indexAdmin'])->name('dashboard-admin');

Route::resource('produk', ProdukController::class);

Route::get('/customer/index', [CustomerController::class, 'index'])->name('customer.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::prefix('user')->group(function(){
    Route::get('/', [DashboardController::class, 'indexUser'])->name('dashboard-user');

    Route::get('/pemesanan/create',[App\Http\Controllers\PemesananController::class,'create'])->name('pemesanan.create');
    Route::post('/pemesanan/store',[App\Http\Controllers\PemesananController::class,'store'])->name('pemesanan.store');
    Route::get('/pemesanan/index',[App\Http\Controllers\PemesananController::class,'index'])->name('pemesanan.index');

});


