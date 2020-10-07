<?php

Route::group(['middleware' => ['nova'], 'prefix' => '/nova-vendor/ajax-multiselect-nova-field/ajax'], function () {
    Route::get('/', 'Stealthpro\AjaxMultiselectNovaField\Http\Controllers\AjaxMultiselectController@getOptionsByQuery');
    Route::get('/options', 'Stealthpro\AjaxMultiselectNovaField\Http\Controllers\AjaxMultiselectController@getOptions');
});
