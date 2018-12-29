<?php

Route::namespace('AymanElmalah\Contact\Http\Controllers')->group(function () {
  Route::get('contact', 'ContactController@index');

  Route::post('contact', 'ContactController@submit')->name('contact');
});
