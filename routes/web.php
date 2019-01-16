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

Route::get('/', 'Landing\GeneralController@index')->name('landing.home');

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
    })->name('admin.home');
    Route::resource('/slider', 'SliderController')->except([
        'show'
    ]);
    Route::resource('section', 'SectionController')->except([
        'show'
    ]);
    Route::resource('offer', 'OfferController')->except([
        'show'
    ]);



//    Route::group(['prefix'=>'offers'], function () {
//        Route::resource('/section', 'SectionsController')->except([
//            'show'
//        ]);
//        Route::resource('section.list', 'OffersController')->except([
//            'show'
//        ]);
//    });
});
