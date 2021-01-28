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

/**
 * Books routes
 */
Route::group(['middleware' => ['auth']], function () {
    Route::get('/books', 'BooksController@index')->name('books.index')->permission('read_books');
    Route::get('/books/create', 'BooksController@create')->name('books.create')->permission('create_books');
    Route::post('/books', 'BooksController@store')->name('books.store')->permission('create_books');
    Route::get('/books/{book}/edit', 'BooksController@edit')->name('books.edit')->permission('update_books');
    Route::patch('/books/{book}', 'BooksController@update')->name('books.update')->permission('update_books');
    Route::delete('/books/{book}', 'BooksController@destroy')->name('books.destroy')->permission('delete_books');
});

/**
 * Genre routes
 */
Route::group(['middleware' => ['auth']], function () {
    Route::get('/genres', 'GenresController@index')->name('genres.index')->permission('read_books');
    Route::get('/genres/create', 'GenresController@create')->name('genres.create')->permission('create_books');
    Route::post('/genres', 'GenresController@store')->name('genres.store')->permission('create_books');
    Route::get('/genres/{genre}/edit', 'GenresController@edit')->name('genres.edit')->permission('update_books');
    Route::patch('/genres/{genre}', 'GenresController@update')->name('genres.update')->permission('update_books');
    Route::delete('/genres/{genre}', 'GenresController@destroy')->name('genres.destroy')->permission('delete_books');
});