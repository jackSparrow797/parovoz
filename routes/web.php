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

//mail routes
Route::post('/email/offer', 'Mail\MailOfferController@send')->name('send.offer');
Route::post('/email/payne', 'Mail\MailPayneController@send')->name('send.payne');
Route::post('/email/question', 'Mail\MailQuestionController@send')->name('send.question');
Route::post('/email/work', 'Mail\MailWorkController@send')->name('send.work');

//ajax routes
Route::post('/news/{news}', 'Landing\NewsController@show')->name('news.show');
Route::post('/work/{work}', 'Landing\WorkController@show')->name('work.show');

Route::get('/cache/uploads/works/{filename}', 'Landing\CacheImagesController@getImage')->name('cache.image');


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
    Route::resource('tag', 'TagController')->except([
        'show'
    ]);
    Route::resource('work', 'WorkController')->except([
        'show'
    ]);
    Route::resource('news', 'NewsController')->except([
        'show'
    ]);
    Route::resource('review', 'ReviewController')->except([
        'show'
    ]);
});
