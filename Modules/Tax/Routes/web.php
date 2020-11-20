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

Route::prefix('tax')->group(function() {
    Route::get('/', 'TaxController@index');
});

Route::group(['middleware' => ['auth']], function () {
    // Stock group
    Route::get('/taxes', 'TaxController@index')->name('taxes.index')->permission('read_taxes');
    Route::get('/taxes/create', 'TaxController@create')->name('taxes.create')->permission('create_taxes');
    Route::post('/taxes', 'TaxController@store')->name('taxes.store')->permission('create_taxes');
    Route::get('/taxes/{tax}', 'TaxController@show')->name('taxes.show')->permission('read_taxes');
    Route::get('/taxes/{tax}/edit', 'TaxController@edit')->name('taxes.edit')->permission('update_taxes');
    Route::patch('/taxes/{tax}', 'TaxController@update')->name('taxes.update')->permission('update_taxes');
    Route::delete('/taxes/{tax}', 'TaxController@destroy')->name('taxes.destroy')->permission('delete_taxes');
});
