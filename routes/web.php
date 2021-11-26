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
    });
    ///Categories
    Route::get('admin/categories', 'App\Http\Controllers\admin\CategoriesController@index');
    Route::post('admin/categories/store', 'App\Http\Controllers\admin\CategoriesController@store');
    Route::get('admin/categories/create', 'App\Http\Controllers\admin\CategoriesController@create');
    Route::post('admin/categories/delete/{id}', 'App\Http\Controllers\admin\CategoriesController@destroy');
    Route::get('admin/categories/edit/{id}', 'App\Http\Controllers\admin\CategoriesController@edit');
    Route::post('admin/categories/update/{id}', 'App\Http\Controllers\admin\CategoriesController@update');

    ///Stores
    Route::get('admin/stores', 'App\Http\Controllers\admin\StoresController@index');
    Route::get('admin/stores/create', 'App\Http\Controllers\admin\StoresController@create');
    Route::post('admin/stores/store', 'App\Http\Controllers\admin\StoresController@store');
    Route::post('admin/stores/delete/{id}', 'App\Http\Controllers\admin\StoresController@destroy');
    Route::get('admin/stores/edit', function () {
        return view('layout.admin.stores.edit');
    });


    Route::get('/', function () {
        return view('welcome');
    });
