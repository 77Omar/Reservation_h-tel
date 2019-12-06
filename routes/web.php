<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
/*
/
Route::get('/', function () {
    return view('welcome');
});


Route::get('/produits',"categoriescontroller@index");

Route::get('/categories',"categoriescontroller@index");

Route::get("/categories/{id}","categoriescontroller@show");
*/

Route::get('/',"HomeController@index");

Route::get("/Reservation/{id}","HomeController@show");

Route::resource('/Chambre',"ChambresController");
Route::get("/Chambre/edit/{id}", "ChambresController@edit")->name('editer_Chambre');

Route::resource('/chambre',"ChambresController");
Route::resource('/chambre',"ChambresController");
Route::resource('/Hôtel',"HotelController");

Route::resource('/typechambre',"TypechambreController");
Route::patch("/Chambre/edit/{id}", "ChambresController@update")->name('update_chambre');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
