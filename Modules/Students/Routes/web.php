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

Route::prefix('students')->group(function() {
    Route::get('/', 'StudentsController@index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/students', 'StudentsController@index')->name('students.index')->permission('read_students');
    Route::get('/students/create', 'StudentsController@create')->name('students.create')->permission('create_students');
    Route::post('/students', 'StudentsController@store')->name('students.store')->permission('create_students');
    Route::get('/students/{student}/edit', 'StudentsController@edit')->name('students.edit')->permission('update_students');
    Route::patch('/students/{student}', 'StudentsController@update')->name('students.update')->permission('update_students');
    Route::delete('/students/{student}', 'StudentsController@destroy')->name('students.destroy')->permission('delete_students');
    Route::get('/students-import/create', 'StudentsController@createImport')->name('students.create_import')->permission('create_students');
    Route::post('/students-import', 'StudentsController@import')->name('students.import')->permission('create_students');
});
