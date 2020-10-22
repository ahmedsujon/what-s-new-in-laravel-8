<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',  'WelcomeController@index');
Route::get('/',  'ProductionController@index');
