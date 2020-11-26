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

    // Inventory (same as stk_item)
    Route::get('/inventories', 'InventoryController@index')->name('inventories.index')->permission('read_inventories');
    Route::get('/inventories/create', 'InventoryController@create')->name('inventories.create')->permission('create_inventories');
    Route::post('/inventories', 'InventoryController@store')->name('inventories.store')->permission('create_inventories');
    Route::get('/inventories/{inventory}', 'InventoryController@show')->name('inventories.show')->permission('read_inventories');
    Route::get('/inventories/{inventory}/edit', 'InventoryController@edit')->name('inventories.edit')->permission('update_inventories');
    Route::patch('/inventories/{inventory}', 'InventoryController@update')->name('inventories.update')->permission('update_inventories');
    Route::delete('/inventories/{inventory}', 'InventoryController@destroy')->name('inventories.destroy')->permission('delete_inventories');
    Route::post('/inventories/upload-csv', 'InventoryController@importCsv')->name('inventories.import-csv')->permission('create_inventories');
 
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
