<?php

use App\Http\Controllers\JenisController;
use App\Http\Controllers\ProdukController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//crud
//role admin
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::resource('jenis', JenisController::class);
    Route::resource('produk', ProdukController::class);

});
