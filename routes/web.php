<?php

use App\Place;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  $visited = Place::where('visited', 1)->get();
  $togo = Place::where('visited', 0)->get();

  return view('travel_list', ['visited' => $visited, 'togo' => $togo ] );
});

Route::redirect('/sysvale', 'https://sysvale.com');
