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

Route::get('/places', function() {
    return Place::get();
});

Route::post('/places', function(Request $request) {
    $place = new Place();
    $place->name = $request->name;
    $place->visited = $request->visited;

    $place->save();

    return $place;
});

//Edwildson
Route::put('/places/{id}', function(Request $request, $id) {
    $place = Place::find($id);
    $place->name = $request->name ? $request->name : $place->name;
    $place->visited = $request->visited ? $request->visited : $place->visited;
    $place->save();

    return $place;
});


//Roxo
Route::patch('/places/{id}', function(Request $request, $id) {

    $place = Place::find($id);

    if ($place->name !== $request->name) {
        $place->name = $request->name;
    }

    if ($place->visited !== $request->visited) {
        $place->visited = $request->visited;
    }

    $place->save();

    return $place;
});

//Pink vulgo Adson
Route::delete('/places/{id}', function($id) {

    $place = Place::find($id);

    if ($place) {
        $place->delete();
        return response('');
    }

    return response('Recurso não existe', 404);
});
