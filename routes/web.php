
.<?php

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
    return view('home');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/testhome', 'HomeController@test')->name('testhome');
//Route::get('/admin/categories', 'CategoriesController@index')->name('list_categories');
//Route::get('/admin/categories/detail/{id}', 'CategoriesController@detail')->name('detail_category');
Route::resource('/admin/members', 'Admin\MembersController', ['as'=>'admin']);

Route::resource('/admin/products', 'Admin\ProductsController', ['as'=>'admin']);
