<?php
Route::group(['prefix'=> 'admin','as'=>'admin.','middleware'=> 'auth'],function(){
    Route::get('dashboard', 'HomeController@backend')->name('home');

    Route::get('events/services','ProgramController@list')->name('event.list');
    Route::get('events/create','ProgramController@create')->name('event.create');
    Route::post('events/save','ProgramController@store')->name('event.save');
    Route::get('events/edit/{program}','ProgramController@edit')->name('event.edit');
    Route::post('events/update/{program}','ProgramController@update')->name('event.update');
    Route::post('events/duplicate/{program}','ProgramController@duplicate')->name('event.duplicate');
    Route::post('events/delete/{program}','ProgramController@destroy')->name('event.delete');

    Route::get('posts','PostController@list')->name('post.list');
    Route::get('posts/create','PostController@create')->name('post.create');
    Route::post('posts/save','PostController@store')->name('post.save');
    Route::get('posts/edit/{post}','PostController@edit')->name('post.edit');
    Route::post('posts/update/{post}','PostController@update')->name('post.update');
    Route::post('posts/duplicate/{post}','PostController@duplicate')->name('post.duplicate');
    Route::post('posts/delete/{post}','PostController@destroy')->name('post.delete');

    Route::get('testimonies','TestimonyController@list')->name('testimony.list');
    Route::post('testimonies/status/{testimony}','TestimonyController@status')->name('testimony.status');
    Route::post('testimonies/update/{testimony}','TestimonyController@update')->name('testimony.update');
    Route::post('testimonies/delete/{testimony}','TestimonyController@destroy')->name('testimony.delete');

    Route::get('submissions','SubmissionController@list')->name('submission.list');
    Route::post('submissions/seen/{submission}','SubmissionController@seen')->name('submission.seen');
    Route::post('submissions/delete/{submission}','SubmissionController@destroy')->name('submission.delete');

    Route::get('givings','GivingController@list')->name('giving.list');
    Route::post('giving/seen/{giving}','GivingController@seen')->name('giving.seen');
    Route::post('giving/delete/{giving}','GivingController@destroy')->name('giving.delete');

    Route::get('gallery','MediaController@list')->name('gallery.list');
    Route::get('gallery/add-photo','MediaController@create')->name('gallery.create');
    Route::post('gallery/save','MediaController@store')->name('gallery.save');
    Route::post('gallery/delete','MediaController@destroy')->name('gallery.delete');

    Route::get('broadcast','MessagingController@list')->name('messaging.list');
});