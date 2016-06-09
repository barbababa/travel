<?php

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@store');

Route::group(['prefix'=> 'option'], function() {
	Route::get('/{id}', 'OptionController@index')->where('id',  '[0-9]+');
});
