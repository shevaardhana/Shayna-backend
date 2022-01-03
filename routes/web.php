<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', [App\Http\Controllers\DashBoardController::class, 'index'])->middleware('auth')->name('DashBoard');

Auth::routes();

Route::get('products/{id}/gallery', 'ProductController@gallery')
            ->name('products.gallery');
Route::resource('Products', 'ProductController');

Route::resource('Product-Galleries', 'ProductGalleryController');

Route::get('transaction/{id}/set-status', 'TransactionController@setStatus')
            ->name('transaction.status');
Route::resource('transaction', 'TransactionController');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/cetak_pdf', 'CetakController@cetak_pdf')->name('cetak');




