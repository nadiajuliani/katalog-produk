<?php

use App\Http\Controllers\JenisController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontController;
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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// frontend
Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('about', [FrontController::class, 'about']);
Route::get('produk', [FrontController::class, 'produk']);
Route::get('show', [FrontController::class, 'show']);

//crud
//role admin
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::resource('jenis', JenisController::class);
    Route::resource('produk', ProdukController::class);

});
