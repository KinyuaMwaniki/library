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

Route::group(['middleware' => ['auth']], function () {

    // System Settings
    Route::get('/settings', 'SettingsController@index')->name('settings.index')->permission('read_settings');
    Route::get('/settings/create', 'SettingsController@create')->name('settings.create')->permission('create_settings');
    Route::post('/settings', 'SettingsController@store')->name('settings.store')->permission('create_settings');
    Route::get('/settings/{setting}', 'SettingsController@show')->name('settings.show')->permission('read_settings');
    Route::get('/settings/{setting}/edit', 'SettingsController@edit')->name('settings.edit')->permission('update_settings');
    Route::patch('/settings/{setting}', 'SettingsController@update')->name('settings.update')->permission('update_settings');
    Route::delete('/settings/{setting}', 'SettingsController@destroy')->name('settings.destroy')->permission('delete_settings');

});
