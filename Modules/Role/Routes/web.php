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

// Roles
Route::get('/role', 'RoleController@index')->name('role.index');
Route::get('/role/create', 'RoleController@create')->name('role.create');
Route::post('/role', 'RoleController@store')->name('role.store');
Route::get('/role/{role}/edit', 'RoleController@edit')->name('role.edit');
Route::patch('/role/{role}', 'RoleController@update')->name('role.update');
Route::delete('/role/{role}', 'RoleController@destroy')->name('role.destroy');

// Permissions
Route::get('/', 'PermissionController@index')->name('permissions.index');



