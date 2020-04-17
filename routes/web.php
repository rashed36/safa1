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

require 'fontend.php';
Route::post('sendemail', 'SendEmailController@send')->name('sendemail');



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function(){
	Route::get('/dashboard', function () {
    return view('admin.dashboard');
 });
require 'admin_route.php';

});
