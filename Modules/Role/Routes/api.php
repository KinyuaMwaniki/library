<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/role', function (Request $request) {
    return $request->user();
});

Route::group(
    ['middleware' => 'auth', 'prefix' => '/v1', 'namespace' => 'Api\v1'], function () {
        Route::get('get-roles', 'PermissionsApiController@getRoles')->name('roles.api.get-roles');
        Route::get('get-permissions', 'PermissionsApiController@getPermissions')->name('roles.api.get-permissions');
        Route::get('get-all-permissions', 'PermissionsApiController@getAllPermissions')->name('roles.api.get-all-permissions');
        Route::post('save-permissions', 'PermissionsApiController@savePermissions')->name('roles.api.save-permissions');
        // Route::get('get-menu-permissions', 'PermissionsApiController@getMenuPermissions')->name('roles.api.get-menu-permissions');
    }
);



