<?php

Route::group(['namespace'=>'Dssoft\Contact\Http\Controllers'], function(){

    Route::get('contact','ContactController@index')->name('contact.index');

    Route::post('contact', 'ContactController@send');

});
