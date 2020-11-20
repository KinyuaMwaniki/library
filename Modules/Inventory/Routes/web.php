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

    // Stock costing
    Route::get('/stk_costing', 'StockCostingController@index')->name('stk_costing.index')->permission('read_stock_costing');
    Route::get('/stk_costing/create', 'StockCostingController@create')->name('stk_costing.create')->permission('create_stock_costing');
    Route::post('/stk_costing', 'StockCostingController@store')->name('stk_costing.store')->permission('create_stock_costing');
    Route::get('/stk_costing/{stk_costing}', 'StockCostingController@show')->name('stk_costing.show')->permission('read_stock_costing');
    Route::get('/stk_costing/{stk_costing}/edit', 'StockCostingController@edit')->name('stk_costing.edit')->permission('update_stock_costing');
    Route::patch('/stk_costing/{stk_costing}', 'StockCostingController@update')->name('stk_costing.update')->permission('update_stock_costing');
    Route::delete('/stk_costing/{stk_costing}', 'StockCostingController@destroy')->name('stk_costing.destroy')->permission('delete_stock_costing');
});
