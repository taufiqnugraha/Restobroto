<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return Redirect::to('http://localhost:8000/login');
});

Route::get('/home', 'HomeController@index');

Route::get('/koki', 'KokiDaftarPesananController@index');

Route::get('/pantry', 'PantryDaftarBahanBakuController@index');

Route::get('/got', [
  'middleware' => ['auth'],
  'uses' => function () {
   echo "You are allowed to view this page!";
}]);
