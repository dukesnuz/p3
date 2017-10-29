<?php
Route::get('/env', function () {
    dump(config('app.name'));
    dump(config('app.env'));
    dump(config('app.debug'));
    dump(config('app.url'));
    dump(config('mail'));

});

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
// Create route for form display
Route::get('/', 'UtilitiesController@index');

// Create a route for an about view
Route::get('/about', 'UtilitiesController@about');

// Create route for found dish/es
Route::get('/find-dish/{name}', 'MenuController@findDish');

// Create a route for search form to search for dish/es
Route::get('/create/', 'MenuController@create');

// Create a search route
Route::get('/search/', 'MenuController@search');

// Show all dishes route
Route::get('/show/', 'MenuController@show');
