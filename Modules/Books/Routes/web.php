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

Route::prefix('books')->group(function() {
    Route::get('/', 'BooksController@index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/books', 'BooksController@index')->name('books.index')->permission('read_books');
    Route::get('/books/create', 'BooksController@create')->name('books.create')->permission('create_books');
    Route::post('/books', 'BooksController@store')->name('books.store')->permission('create_books');
    Route::get('/books/{student}/edit', 'BooksController@edit')->name('books.edit')->permission('update_books');
    Route::patch('/books/{student}', 'BooksController@update')->name('books.update')->permission('update_books');
    Route::delete('/books/{student}', 'BooksController@destroy')->name('books.destroy')->permission('delete_books');
});
