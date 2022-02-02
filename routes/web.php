<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
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
    return view('welcome',['categories'=>Category::all()]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])
    ->name('category.')
    ->prefix('/category')
    ->group(function (){
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('//{categoryId}/delete', 'CategoryController@delete')->name('delete');
        Route::post('/register', 'CategoryController@register')->name('register');
        Route::post('/{categoryId}/update', 'CategoryController@update')->name('update');
    Route::name('product.')
        ->prefix('/{categoryId}/product')
        ->group(function (){
            Route::get('/', 'ProductController@index')->name('index');
            Route::get('/{productId}/delete', 'ProductController@delete')->name('delete');
            Route::post('/register', 'ProductController@register')->name('register');
            Route::post('/{productId}/update', 'ProductController@update')->name('update');
        });
    });

Route::middleware(['auth:sanctum', 'verified'])
    ->name('order.')
    ->prefix('/order')
    ->group(function (){
        Route::get('/', 'OrderController@index')->name('index');
});    