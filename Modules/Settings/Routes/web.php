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

    // Item numbering
    Route::get('/code-numbers', 'CodeNumbersController@index')->name('code_numbers.index')->permission('read_code_numbers');
    Route::get('/code-numbers/create', 'CodeNumbersController@create')->name('code_numbers.create')->permission('create_code_numbers');
    Route::post('/code-numbers', 'CodeNumbersController@store')->name('code_numbers.store')->permission('create_code_numbers');
    Route::get('/code-numbers/{code_number}', 'CodeNumbersController@show')->name('code_numbers.show')->permission('read_code_numbers');
    Route::get('/code-numbers/{code_number}/edit', 'CodeNumbersController@edit')->name('code_numbers.edit')->permission('update_code_numbers');
    Route::patch('/code-numbers/{code_number}', 'CodeNumbersController@update')->name('code_numbers.update')->permission('update_code_numbers');
    Route::delete('/code-numbers/{code_number}', 'CodeNumbersController@destroy')->name('code_numbers.destroy')->permission('delete_code_numbers');
});
