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
    // Stock group
    Route::get('/stk_group', 'StockGroupController@index')->name('stk_group.index')->permission('read_stock_group');
    Route::get('/stk_group/create', 'StockGroupController@create')->name('stk_group.create')->permission('create_stock_group');
    Route::post('/stk_group', 'StockGroupController@store')->name('stk_group.store')->permission('create_stock_group');
    Route::get('/stk_group/{stk_group}', 'StockGroupController@show')->name('stk_group.show')->permission('read_stock_group');
    Route::get('/stk_group/{stk_group}/edit', 'StockGroupController@edit')->name('stk_group.edit')->permission('update_stock_group');
    Route::patch('/stk_group/{stk_group}', 'StockGroupController@update')->name('stk_group.update')->permission('update_stock_group');
    Route::delete('/stk_group/{stk_group}', 'StockGroupController@destroy')->name('stk_group.destroy')->permission('delete_stock_group');
});
