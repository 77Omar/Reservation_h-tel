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
  
   return view('home1');
});
//->middleware ('auth');

/*
/
Route::get('/produits',"categoriescontroller@index");

Route::get('/categories',"categoriescontroller@index");

Route::get("/categories/{id}","categoriescontroller@show");
*/

//Route::get('/',"HomeController@index");

Route::get("/Reservation/{id}","HomeController@show")->where(['id'=>'[0-9]{10}']);



Route::get("/chambre/edit/{id}", "ChambresController@edit")->name('editer_Chambre'); 
Route::get("/chambre/create", "ChambresController@create")->name('Ajouter_Chambre'); 
Route::patch("/chambre/edit/{id}", "ChambresController@update")->name('update_chambre');
Route::get("/Chambre/chambre", "ChambreController@Chambre")->name('chambre');
Route::get('/chambre/create', 'ChambresController@create')->name('create_chambre')->middleware('auth');

//Route::get("/chambre/ajouter", "ChambresController@create")->name('Ajouter_Chambre'); 

Route::get("/Hôtel/edit/{id}", "HotelController@edit")->name('editer_Hôtel');
Route::get("/Hôtel/create", "HotelController@create")->name('Ajouter_Hôtel');
Route::patch("/Hôtel/edit/{id}", "HotelController@update")->name('update_Hôtel');
Route::patch("/Hôtel/create/{id}", "HotelController@update")->name('update_Hôtel');
Route::get('/Hôtel/create', 'HotelController@create')->name('create_Hôtel')->middleware('auth');



Route::get("/employer/edit/{id}", "EmployerController@edit")->name('editer_employer');
Route::get("/employer/create/", "EmployerController@create")->name('Ajouter_employer');
Route::patch("/employer/edit/{id}", "EmployerController@update")->name('update_employer');
Route::patch("/employer/create/{id}", "EmployerController@update")->name('update_employer');



Route::get("/personne/edit/{id}", "PersonneController@edit")->name('editer_personne');
Route::get("/personne/create/", "PersonneController@create")->name('Ajouter_personne');
Route::patch("/personne/edit/{id}", "PersonneController@update")->name('update_personne');
Route::patch("/personne/create/{id}", "PersonneController@update")->name('update_personne');


Route::get("/reservation/edit/{id}", "ReservationController@edit")->name('editer_reservation');
Route::get("/reservation/create/", "ReservationController@create")->name('Ajouter_reservation');
Route::patch("/reservation/edit/{id}", "ReservationController@update")->name('update_reservation');
Route::patch("/reservation/create/{id}", "ReservationController@update")->name('update_reservation');
Route::get("/Reservation/reservation", "ReservationController@reservation")->name('reservation')->middleware('auth');
Route::post("/Reservation/reservation", "ReservationController@store")->name('reservation-store');
Route::get('/reservation/create', 'ReservationController@create')->name('create_reservation')->middleware('auth');



Route::get("/typechambre/edit/{id}", "TypechambreController@edit")->name('editer_typechambre');
Route::get("/typechambre/create/", "TypechambreController@create")->name('Ajouter_typechambre');
Route::patch("/typechambre/edit/{id}", "TypechambreController@update")->name('update_typechambre');
Route::patch("/typechambre/create/{id}", "TypechambreController@update")->name('update_typechambre');



Route::post("/Contact/contact", "ContactController@store")->name('contact-store');
Route::get("/contact/edit/{id}", "ContactsController@edit")->name('editer_contact');
Route::get("/contact/create/{id}", "ContactsController@create")->name('Ajouter_contact');
Route::get("/Contact/contact", "ContactController@contact")->name('contact');


Route::resource('/chambre',"ChambresController");
Route::resource('/Hôtel',"HotelController");
Route::resource('/employer', 'EmployerController');
Route::resource('/personne', 'PersonneController');
Route::resource('/reservation', 'ReservationController');
Route::resource('/typechambre', 'TypechambreController'); 
Route::resource('contact', 'ContactsController');






Route::get("/Portefeuille/portefeuille", "PortefeuilleController@Portefeuille")->name('portefeuille');
Route::get("/A_Propos/a_propos", "A_ProposController@A_Propos")->name('a_propos');
Route::get("/Service/service", "ServiceController@Service")->name('service');
Route::get("/Notre_Equipe/notre_equipe", "Notre_EquipeController@Notre_Equipe")->name('notre_equipe');
Route::get("/PageAdmin/pageadmin", "PageAdminController@PageAdmin")->name('pageadmin');



















Auth::routes();



Route::view('/login','auth.login')->name('login');

Route::get('/abonnement/expired', "AbonnementController@expired");

Auth::routes(['verify'=>true]);
Route::get('/welcome', 'HomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', function () {
    //Only verified users may enter...
})->middleware('verified');

