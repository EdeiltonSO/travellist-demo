<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlacesPost;
use App\Place;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function index() {
        return Place::get();
    }

    public function update(Request $request, $id){
        $place = Place::find($id);
        $place->name = $request->name ? $request->name : $place->name;
        $place->visited = $request->visited ? $request->visited : $place->visited;
        $place->save();

        return $place;
    }



    public function store(PlacesPost $request) {
        $place = new Place();
        $place->name = $request->name;
        $place->visited = $request->visited;

        $place->save();

        return $place;
    }


    public function destroy($id){
        $place = Place::find($id);

        if ($place) {
            $place->delete();
            return response('');
        }

        return response('Recurso não existe', 404);
    }

    public function patchUpdate(Request $request, $id) {
        $place = Place::find($id);

        if ($place->name !== $request->name) {
            $place->name = $request->name;
        }

        if ($place->visited !== $request->visited) {
            $place->visited = $request->visited;
        }

        $place->save();

        return $place;
    }
}
//


