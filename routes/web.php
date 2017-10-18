<?php
Route::get('/env', function () {
    dump(config('app.name'));
    dump(config('app.env'));
    dump(config('app.debug'));
    dump(config('app.url'));
    dump(config('mail'));

});

/**
* PracticeController
*/
Route::any('/practice/{n?}', 'PracticeController@index');

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

// Create a route for an about view
Route::get('about', function () {
    return view('about');
});

// Create route for form display
Route::get('/', 'MenuController@index');

// Create route for found dish/es
Route::get('/find-dish/{dish}/', 'MenuController@findDish');
