<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\PemesananController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/db', [DashboardController::class, 'indexUser'])->name('db');


// Route::get('/admin', function(){
//     return view('admin.index');
// });

// Route::get('/admin/index', [DashboardController::class, 'indexUser'])->name('dashboard-admin');

Route::get('/admin', [DashboardController::class, 'indexAdmin'])->name('dashboard-admin');
Route::resource('customer', CustomerController::class);
Route::redirect('orders',pemesanan.store::class);

Route::resource('produk', ProdukController::class);

Route::get('/customer/index', [CustomerController::class, 'index'])->name('customers.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::prefix('user')->group(function(){
    Route::get('/', [DashboardController::class, 'indexUser'])->name('dashboard-user');
    Route::get('/customer/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::post('/customer/update', [CustomerController::class, 'update'])->name('customers.update');
    Route::resource('/pemesanan', PemesananController::class);

});


