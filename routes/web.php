<?php

use Illuminate\Support\Facades\DB;
use App\Place;

Route::get('/', function () {
  $visited = Place::where('visited', 1)->get(); 
  $togo = Place::where('visited', 0)->get();

  return view('travel_list', ['visited' => $visited, 'togo' => $togo ] );
});
