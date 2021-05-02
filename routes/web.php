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

Route::get('/', 'HomeController@frontend');

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
Route::get('services/{program}','ProgramController@show')->name('services.show');
Route::get('birthdays','ProgramController@birthdays')->name('birthdays');

Route::get('sermons','PostController@index')->name('sermons');
Route::get('sermons/{post}','PostController@show')->name('article');

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
include('admin.php');

