<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/search','SearchController@getIndex');
Route::get('/welcome', 'IndexController@index')->name('welcome');
Route::get('/works_haircolor', 'HaircolorController@index')->name('works_haircolor');
Route::get('/feedback', 'FeedbackController@index')->name('testimonial');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/works_nails', 'NailsController@index')->name('works_nails');
Route::get('/works_lash', 'LashController@index')->name('works_lash');
Route::get('/works_brow', 'BrowController@index')->name('works_brow');
Route::get('/works_makeup', 'MakeupController@index')->name('works_makeup');
Route::post('/book','BaseController@postIndex');
Route::get('/{id}','BaseController@getIndex'); //послденийй роут
