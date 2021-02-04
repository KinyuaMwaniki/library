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
    Route::get('/books/{book}', 'BooksController@show')->name('books.show')->permission('read_books');
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

/**
 * Book issuance routes
 */
Route::group(['middleware' => ['auth']], function () {
    Route::get('/issuances', 'IssuancesController@index')->name('issuances.index')->permission('read_issuances');
    Route::get('/issuances/create', 'IssuancesController@create')->name('issuances.create')->permission('create_issuances');
    Route::post('/issuances', 'IssuancesController@store')->name('issuances.store')->permission('create_issuances');
    Route::get('/issuances/{issuance}', 'IssuancesController@show')->name('issuances.show')->permission('read_issuances');
    Route::get('/issuances/{issuance}/edit', 'IssuancesController@edit')->name('issuances.edit')->permission('update_issuances');
    Route::patch('/issuances/{issuance}', 'IssuancesController@update')->name('issuances.update')->permission('update_issuances');
    Route::delete('/issuances/{issuance}', 'IssuancesController@destroy')->name('issuances.destroy')->permission('delete_issuances');
    Route::get('/issuances-overdue', 'IssuancesController@issuancesOverdue')->name('issuances.overdue')->permission('read_issuances');
});
