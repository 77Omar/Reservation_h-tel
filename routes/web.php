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
*/
Route::get('/', function () {
    return view('home');
});

/*
/
Route::get('/produits',"categoriescontroller@index");

Route::get('/categories',"categoriescontroller@index");

Route::get("/categories/{id}","categoriescontroller@show");
*/

Route::get('/',"HomeController@index");

Route::get("/Reservation/{id}","HomeController@show")->where(['id'=>'[0-9]{10}']);

Route::resource('/chambre',"ChambresController");
Route::get("/chambre/edit/{id}", "ChambresController@edit")->name('editer_Chambre'); 
Route::get("/chambre/create/{id}", "ChambresController@create")->name('Ajouter_Chambre'); 



Route::get("/Hôtel/edit/{id}", "HotelController@edit")->name('editer_Hôtel');
Route::get("/Hôtel/create/{id}", "HotelController@create")->name('Ajouter_Hôtel');


Route::get("/employer/edit/{id}", "EmployerController@edit")->name('editer_employer');
Route::get("/employer/create/{id}", "EmployerController@create")->name('Ajouter_employer');


Route::get("/personne/edit/{id}", "PersonneController@edit")->name('editer_personne');
Route::get("/personne/create/{id}", "PersonneController@create")->name('Ajouter_personne');

Route::get("/reservation/edit/{id}", "ReservationController@edit")->name('editer_reservation');
Route::get("/reservation/create/{id}", "ReservationController@create")->name('Ajouter_reservation');


Route::get("/typechambre/edit/{id}", "TypechambreController@edit")->name('editer_typechambre');
Route::get("/typechambre/create/{id}", "TypechambreController@create")->name('Ajouter_typechambre');


Route::resource('contact', 'ContactsController');
Route::get("/contact/edit/{id}", "ContactsController@edit")->name('editer_contact');
Route::get("/contact/create/{id}", "ContactsController@create")->name('Ajouter_contact');



//Route::resource('/chambre',"ChambresController");
Route::resource('/chambre',"ChambresController");
Route::resource('/Hôtel',"HotelController");
Route::resource('/employer', 'EmployerController');
Route::resource('/personne', 'PersonneController');
Route::resource('/reservation', 'ReservationController');
Route::resource('/typechambre', 'TypechambreController'); 

Route::resource('contact', 'ContactsController');




Route::resource('/typechambre',"TypechambreController");
Route::patch("/chambre/edit/{id}", "ChambresController@update")->name('update_chambre');


Route::get("/Chambre/chambre", "ChambreController@Chambre")->name('chambre');
Route::get("/Contact/contact", "ContactController@Contact")->name('contact');
Route::post("/Contact/contact", "ContactController@store")->name('contact-store');
Route::get("/Portefeuille/portefeuille", "PortefeuilleController@Portefeuille")->name('portefeuille');
Route::get("/A_Propos/a_propos", "A_ProposController@A_Propos")->name('a_propos');
Route::get("/Service/service", "ServiceController@Service")->name('service');
Route::get("/Notre_Equipe/notre_equipe", "Notre_EquipeController@Notre_Equipe")->name('notre_equipe');

Route::get("/Reservation/reservation", "ReservationController@reservation")->name('reservation');




Route::patch("/employer/edit/{id}", "EmployerController@update")->name('update_employer');
Route::patch("/employer/create/{id}", "EmployerController@update")->name('update_employer');

Route::patch("/reservation/edit/{id}", "ReservationController@update")->name('update_reservation');
Route::patch("/Hôtel/edit/{id}", "HotelController@update")->name('update_Hôtel');
Route::patch("/Hôtel/create/{id}", "HotelController@update")->name('update_Hôtel');

Route::patch("/personne/edit/{id}", "PersonneController@update")->name('update_Hôtel');
Route::patch("/personne/create/{id}", "PersonneController@update")->name('update_Hôtel');


Route::patch("/typechambre/edit/{id}", "TypechambreController@update")->name('update_typechambre');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
