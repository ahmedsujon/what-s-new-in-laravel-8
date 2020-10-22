<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',  'DashboardController@index');
Route::get('/',  'WelcomeController@index');
