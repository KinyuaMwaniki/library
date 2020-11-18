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
    // Roles
    Route::get('/roles', 'RoleController@index')->name('role.index')->permission('read_roles');
    Route::get('/role/create', 'RoleController@create')->name('role.create')->permission('create_roles');
    Route::post('/role', 'RoleController@store')->name('role.store')->permission('create_roles');
    Route::get('/role/{role}/edit', 'RoleController@edit')->name('role.edit')->permission('update_roles');
    Route::patch('/role/{role}', 'RoleController@update')->name('role.update')->permission('update_roles');
    Route::delete('/role/{role}', 'RoleController@destroy')->name('role.destroy')->permission('delete_roles');


    // Permissions
    Route::get('/permissions', 'PermissionController@index')->name('permissions.index');
});





