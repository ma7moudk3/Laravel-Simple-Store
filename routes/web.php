<?php

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

    Route::get('admin', function () {
        return view('layout.admin.admin');
    })->middleware('auth');
    ///Categories
    Route::get('admin/categories', 'App\Http\Controllers\admin\CategoriesController@index')->middleware('auth');
    Route::post('admin/categories/store', 'App\Http\Controllers\admin\CategoriesController@store')->middleware('auth');
    Route::get('admin/categories/create', 'App\Http\Controllers\admin\CategoriesController@create')->middleware('auth');
    Route::post('admin/categories/delete/{id}', 'App\Http\Controllers\admin\CategoriesController@destroy')->middleware('auth');
    Route::get('admin/categories/edit/{id}', 'App\Http\Controllers\admin\CategoriesController@edit')->middleware('auth');
    Route::post('admin/categories/update/{id}', 'App\Http\Controllers\admin\CategoriesController@update')->middleware('auth');

    ///Stores
    Route::get('admin/stores', 'App\Http\Controllers\admin\StoresController@index');
    Route::get('admin/stores/create', 'App\Http\Controllers\admin\StoresController@create');
    Route::post('admin/stores/store', 'App\Http\Controllers\admin\StoresController@store');
    Route::post('admin/stores/delete/{id}', 'App\Http\Controllers\admin\StoresController@destroy');
    Route::get('admin/stores/edit/{id}','App\Http\Controllers\admin\StoresController@edit' );
    Route::post('admin/stores/update/{id}','App\Http\Controllers\admin\StoresController@update');

////////////////
Route::get('/', 'App\Http\Controllers\website\HomeController@create');
Route::get('category/products/{id}', 'App\Http\Controllers\website\HomeController@storesIndex');
Route::get('product/{id}', 'App\Http\Controllers\website\HomeController@productDetails');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'layout.admin.admin'])->name('home');
Route::get('product/details', function () {
    return view('layout.website.product-detail');
});
