<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [TransaksiController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

//Routing Product
Route::group(['prefix' => 'product', 'middleware' => ['auth'] ], function(){
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('add', [ProductController::class, 'create'])->name('product.create');
    Route::post('store', [ProductController::class, 'store'])->name('product.store');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::get("soft/{id}", [ProductController::class, 'soft'])->name("product.soft");
    Route::get("restore", [ProductController::class, 'restore'])->name("product.restore");
});

//Routing Penjual
Route::group(['prefix' => 'penjual', 'middleware' => ['auth']], function(){
    Route::get('/', [PenjualController::class, 'index'])->name('penjual.index');
    Route::get('add', [PenjualController::class, 'create'])->name('penjual.create');
    Route::post('store', [PenjualController::class, 'store'])->name('penjual.store');
    Route::get('edit/{id}', [PenjualController::class, 'edit'])->name('penjual.edit');
    Route::post('update/{id}', [PenjualController::class, 'update'])->name('penjual.update');
    Route::get('delete/{id}', [PenjualController::class, 'delete'])->name('penjual.delete');
    Route::get("soft/{id}", [PenjualController::class, 'soft'])->name("penjual.soft");
    Route::get("restore", [PenjualController::class, 'restore'])->name("penjual.restore");
});

//Routing Pembeli
Route::group(['prefix' => 'pembeli', 'middleware' => ['auth']], function(){
    Route::get('/', [PembeliController::class, 'index'])->name('pembeli.index');
    Route::get('add', [PembeliController::class, 'create'])->name('pembeli.create');
    Route::post('store', [PembeliController::class, 'store'])->name('pembeli.store');
    Route::get('edit/{id}', [PembeliController::class, 'edit'])->name('pembeli.edit');
    Route::post('update/{id}', [PembeliController::class, 'update'])->name('pembeli.update');
    Route::get('delete/{id}', [PembeliController::class, 'delete'])->name('pembeli.delete');
    Route::get("soft/{id}", [PembeliController::class, 'soft'])->name("pembeli.soft");
    Route::get("restore", [PembeliController::class, 'restore'])->name("pembeli.restore");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
