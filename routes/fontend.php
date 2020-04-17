<?php
Route::get('/', function () {return view('fontend.pages.index');});



Route::get('home', 'Fontend\HomeController@home')->name('home');
Route::get('profile', 'Fontend\ProfileController@profile')->name('profile');
Route::get('top-reason', 'Fontend\Top_reasonController@top_reason')->name('top-reason');
Route::get('contact', 'Fontend\Contact_usController@contact')->name('contact');
Route::post('mail', 'Fontend\Contact_usController@mail')->name('mail');

Route::get('organic', 'Fontend\organicController@organic')->name('organic');
Route::get('paper-cons', 'Fontend\paperConsController@paper_cons')->name('paper-cons');
Route::get('briquette', 'Fontend\briquetteController@briquette')->name('briquette');
Route::get('pet-flakes', 'Fontend\petFlakesController@pet_flakes')->name('pet-flakes');
?>

