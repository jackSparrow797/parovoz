<?php

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

Route::get('/home', 'HomeController@index')->name('home');


$data = [
    'prefix' => 'admin/landing',
    'namespace' => 'Admin',
    'middleware' => 'auth'
];
Route::group($data, function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.home');;
    Route::resource('/slider','SliderController')->except([
        'show'
    ]);
});
