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

// frontend location
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/category/{id}', 'HomeController@showCates');



Route::get('admin',function()
{
    # code...
    return view('admin.index');
});


// admin location
Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
    Route::get('/',function()
    {
    # code...
        return view('admin.index');
    });
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoriesController');
});
