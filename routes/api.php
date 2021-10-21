<?php

use App\Place;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/places', 'PlaceController@index');
Route::post('/places', 'PlaceController@store');
Route::put('/places/{id}', 'PlaceController@update');
Route::patch('/places/{id}', 'PlaceController@patchUpdate');
Route::delete('/places/{id}', 'PlaceController@destroy');

// Route::resource('places-resource', 'PlaceResourceController');

// Route::get('/places/search', 'API\PlaceResourceController@search');
// Route::apiResource('places-resource', 'API\PlaceResourceController');
// Route::apiResource('users', 'API\UsersController');

// Route::apiResource([
//     'places-resource' => 'API\PlaceResourceController',
//     'users' => 'API\UsersController',
// ]);

// Route::apiResource('places-resource', 'API\PlaceResourceController')->except([
//     'store'
// ])->parameters(['places-resource' => 'id']);
