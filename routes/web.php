<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('home', function(){
        return view('dashboard.home');
    })->name('home');
    // ->middleware('can:dashboard');
});

Route::get('category', 'App\Http\Controllers\CategoryController@index')->name('category');
Route::get('category.create', 'App\Http\Controllers\CategoryController@create')->name('category.create');
Route::post('category.simpan', 'App\Http\Controllers\CategoryController@store')->name('category.simpan');
Route::get('category.edit/{id}', 'App\Http\Controllers\CategoryController@edit')->name('category.edit');
Route::put('category.update/{id}', 'App\Http\Controllers\CategoryController@update')->name('category.update');
Route::get('category.destroy/{id}', 'App\Http\Controllers\CategoryController@destroy')->name('category.destroy');


Route::get('product', 'App\Http\Controllers\ProductController@index')->name('product');
Route::get('product.create', 'App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('product.simpan', 'App\Http\Controllers\ProductController@store')->name('product.simpan');
Route::get('product.edit/{id}', 'App\Http\Controllers\ProductController@edit')->name('product.edit');
Route::put('product.update/{id}', 'App\Http\Controllers\ProductController@update')->name('product.update');
Route::get('product.destroy/{id}', 'App\Http\Controllers\ProductController@destroy')->name('product.destroy');


// Route::get('/product', function () {
//     return view('data.product.index');
// })->name('product');

Route::get('/masuk', function () {
    return view('kelola-barang.barang-masuk.index');
})->name('masuk');

Route::get('/keluar', function () {
    return view('kelola-barang.barang-keluar.index');
})->name('keluar');

Route::get('/bekas', function () {
    return view('kelola-barang.barang-bekas.index');
})->name('bekas');

Route::get('/rusak', function () {
    return view('kelola-barang.barang-rusak.index');
})->name('rusak');

Route::get('/history', function () {
    return view('dashboard.history');
})->name('history');

Route::get('/stok', function () {
    return view('dashboard.stok');
})->name('stok');




// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::get('/forgot', function () {
//     return view('auth.forgot');
// })->name('forgot');

// Route::get('/reset', function () {
//     return view('auth.reset');
// })->name('reset');
