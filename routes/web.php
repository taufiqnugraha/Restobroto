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



Route::get('/', function () {
    return Redirect::to('http://localhost:8000/login');
});

//register
Route::get('/signup', 'UsersController@index');
Route::post('/signup', 'UsersController@store');

//authentication
Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('/koki', 'KokiDaftarPesananController@index');
Route::get('/kasir', 'KasirDaftarPesananController@index');
Route::get('/pantry', 'PantryRempahController@index');
Route::get('/pelayan', 'PelayanCekKesediaanMejaController@index');
Route::get('/got', [
  'middleware' => ['auth'],
  'uses' => function () {
   echo "You are allowed to view this page!";
}]);
//koki
Route::get('/bahanbaku', 'KokiBahanBakuController@bahanbaku');  
Route::get('/tambahpesanan', 'KokiTambahPesanan@tambahpesanan');  

//pelayan
Route::get('/tambahpesanan/{nomor_meja}/{id_pesanan}', 'PelayanTambahPesananController@show');
Route::get('/pesanansiap', 'PelayanPesananSiapController@index');
Route::post('/meja/editmeja', 'PelayanCekKesediaanMejaController@editItem'); 
Route::get('/ajax', 'PelayanCekKesediaanMejaController@ajax');
Route::post('/pesanan/editpesanan', 'PelayanTambahPesananController@editPesanan'); 
Route::post('/pesanan/storepesanan', 'PelayanTambahPesananController@store'); 

//pantry
Route::get('/sayuran', 'PantrySayuranController@index');
Route::get('/bumbu', 'PantryBumbuController@index');
Route::get('/buah', 'PantryBuahController@index');
Route::get('/daging', 'PantryDagingController@index');
Route::get('/bahanpokok', 'PantryBahanPokokController@index');