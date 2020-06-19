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

Route::get('/', function () {
    return view('admin.index');
});
// category
Route::resource('/category', 'CategoryController');
Route::view('/category-list', 'admin.category')->name('category.list');
Route::get('/category-trash', 'CategoryController@trash');
Route::get('/category-restore/{id}', 'CategoryController@restore');
Route::delete('/category-delete/{id}', 'CategoryController@hardDelete');
