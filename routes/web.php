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

Route::view('/', 'frontend.home');

// Route::get('events','frontend.post');

// Upcoming Services
// Upcoming Birthdays
// Articles
// Sermons
// Prayer of Salvation
// Share Testimony
// Church Activities
// Find a Cell
// Enrol in Foundation School
// Get Baptised
// Give Seed/Partnership
// Gallery
// Contact
                                                

Auth::routes();
Route::group(['prefix'=> 'admin','as'=>'admin.'],function(){
    Route::get('dashboard', 'HomeController@index')->name('home');
    Route::get('events','ProgramController@index')->name('event.list');
    Route::get('posts','PostController@index')->name('post.list');
    Route::get('testimonies','TestimonyController@index')->name('testimony.list');
    Route::get('submissions','SubmissionController@index')->name('submission.list');
    Route::get('subscribers','SubscriberController@index')->name('subscriber.list');
    Route::get('givings','GivingController@index')->name('giving.list');
    Route::get('gallery','MediaController@index')->name('gallery.list');

});
