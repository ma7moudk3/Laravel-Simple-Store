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
    Route::post('admin/categories/store','App\Http\Controllers\admin\CategoriesController@store');
    Route::get('admin/categories/create','App\Http\Controllers\admin\CategoriesController@create');
    Route::post('admin/categories/delete/{id}','App\Http\Controllers\admin\CategoriesController@destroy');
    Route::get('admin/categories/edit', function () {
        return view('layout.admin.categories.edit');
    });

    ///Stores
    Route::get('admin/stores/create', function () {
        return view('layout.admin.stores.create');
    });
    Route::get('admin/stores/edit', function () {
        return view('layout.admin.stores.edit');
    });
    Route::get('admin/stores', function () {
        return view('layout.admin.stores.index');
    });


    Route::get('/', function () {
        return view('welcome');
    });
