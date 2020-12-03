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

Route::prefix('user')->group(function() {
    Route::get('/', 'UserController@index');
});


Route::group(['middleware' => ['auth']], function () {
    // Roles
    Route::get('/users', 'UserController@index')->name('user.index')->permission('read_users');
    Route::get('/users/create', 'UserController@create')->name('user.create')->permission('create_users');
    Route::post('/users', 'UserController@store')->name('user.store')->permission('create_users');
    Route::get('/users/{user}/edit', 'UserController@edit')->name('user.edit')->permission('update_users');
    Route::patch('/users/{user}', 'UserController@update')->name('user.update')->permission('update_users');
    Route::delete('/users/{user}', 'UserController@destroy')->name('user.destroy')->permission('delete_users');
});