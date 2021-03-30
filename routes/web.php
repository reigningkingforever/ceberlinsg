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
                                                
Route::get('services','ProgramController@services')->name('services');
Route::get('birthdays','ProgramController@birthdays')->name('birthdays');
Route::get('sermons','PostController@sermons')->name('sermons');
Route::get('sermons/{post}','PostController@article')->name('article');
Route::get('testimonies','TestimonyController@index')->name('testimonies');
Route::get('testimonies/{testimony}','TestimonyController@show')->name('testimonies.show');
Route::post('testimonies/save','TestimonyController@store')->name('testimonies.save');
Route::get('baptism','SubmissionController@baptism')->name('baptism');
Route::get('foundation-school','SubmissionController@foundationSchool')->name('foundation.school');
Route::post('enrol','SubmissionController@store')->name('enrol.save');
Route::post('subscribe','SubscriberController@store')->name('subscriber.save');
Route::get('givings','GivingController@index')->name('givings');
Route::get('gallery','MediaController@index')->name('gallery');
Route::post('givings','GivingController@store')->name('giving.save');
Route::view('prayer-of-salvation','frontend.salvation')->name('salvation');
Route::view('locate-a-cell','frontend.findcell')->name('cell');
Route::view('contact','frontend.contact')->name('contact');
Route::view('live-service','frontend.live')->name('live');
Auth::routes();

Route::group(['prefix'=> 'admin','as'=>'admin.'],function(){
    Route::get('dashboard', 'HomeController@index')->name('home');
    Route::get('events','ProgramController@list')->name('event.list');
    Route::get('posts','PostController@list')->name('post.list');
    Route::get('testimonies','TestimonyController@list')->name('testimony.list');
    Route::get('submissions','SubmissionController@list')->name('submission.list');
    Route::get('subscribers','SubscriberController@list')->name('subscriber.list');
    Route::get('givings','GivingController@list')->name('giving.list');
    Route::get('gallery','MediaController@list')->name('gallery.list');

});
