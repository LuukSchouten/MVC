<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlantenController;
use App\Http\Controllers\paardenController;
use App\Http\Controllers\afsprakenController;

use App\Models\Klanten;
use App\Models\paarden;
use App\Models\afspraken;

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

////////////////////////////////////////////////////////////////////////////////////

Route::get('/klantenBeheer', function (){
    return view('klantenBeheer');
});

Route::get('/klantenOverzicht', [KlantenController::class, 'overview']);

Route::get('/klant/{klant}', function($id){
    $klant = Klanten::findOrFail($id);
    return view('klant')->with('klant', $klant);
});

//make a route to klantaanpassen 
Route::get('/klantAanpassen/{klant}', function($id){
    $klant = Klanten::findOrFail($id);
    return view('/klantAanpassen')->with('klant', $klant);
});

//make a post route to klantaanpassen 
Route::post('/klantAanpassen/{klant}', function($id){
    $klant = Klanten::findOrFail($id);
    $klant->update(request()->all());
    return redirect('/klantenOverzicht');
});

Route::delete('/klant/{klant}', function($id){
    $klant = Klanten::findOrFail($id);
    $klant->delete();
    return redirect('/klantenOverzicht');
});

Route::get('/klantToevoegen', function(){
    return view('/klantToevoegen');
});

//make a route that posts a new user to the database
Route::post('/klantToevoegen', [KlantenController::class, 'createUser']);

////////////////////////////////////////////////////////////////////////////////////

Route::get('/paardenBeheer', function(){
    return view('/paardenBeheer');
});

Route::get('/paardToevoegen', function () {
    return view('paardToevoegen');
});

//make route to paardenoverzicht
Route::get('/paardenOverzicht', [paardenController::class, 'overview']);

Route::get('/paard/{paard}', function($id){
    $paard = Paarden::findOrFail($id);
    return view('paard')->with('paard', $paard);
});

Route::post('/paardToevoegen', [paardenController::class, 'addHorse']);

//make a route to paardAanpassen
Route::get('/paardAanpassen/{paard}', function($id){
    $paard = Paarden::findOrFail($id);
    return view('paardAanpassen')->with('paard', $paard);
});

//make a post route to paardAanpassen
Route::post('/paardAanpassen/{paard}', function($id){
    $paard = Paarden::findOrFail($id);
    $paard->update(request()->all());
    return redirect('/paardenOverzicht');
}); 

//make a delete route to paard.blade.php
Route::delete('/paard/{paard}', function($id){
    $paard = Paarden::findOrFail($id);
    $paard->delete();
    return redirect('/paardenOverzicht');
});


////////////////////////////////////////////////////////////////////////////////////

//make route to afsprakenBeheer
Route::get('/afsprakenBeheer', function(){
    return view('/afsprakenBeheer');
});

//make route to afsprakenoverzicht
Route::get('/afsprakenOverzicht', [afsprakenController::class, 'overview']);

//return afsprakenbeheer and pass horses to view
Route::get('/afspraakToevoegen', function(){
    $paard = Paarden::all();
    $klant = Klanten::all();
    //return view with paarden and klanten 
    return view('afspraakToevoegen')->with('paard', $paard)->with('klant', $klant);
});

//make view for individual afspraak 
Route::get('/afspraak/{afspraak}', function($id){
    $afspraak = Afspraken::findOrFail($id);
    return view('afspraak')->with('afspraak', $afspraak);
});

//make post route to afspraakToevoegen and pass the request to the controller
Route::post('/afspraakToevoegen', [afsprakenController::class, 'addAppointment']);

//make a route to afspraakAanpassen and pass the required data to the view
Route::get('/afspraakAanpassen/{afspraak}', function($id){
    $afspraak = Afspraken::findOrFail($id);
    $paard = Paarden::all();
    $klant = Klanten::all();
    return view('afspraakAanpassen')->with('afspraak', $afspraak)->with('paard', $paard)->with('klant', $klant);
});

//make a post route to afspraakAanpassen and pass the request to the controller
Route::post('/afspraakAanpassen/{afspraak}', [afsprakenController::class, 'updateAppointment']);

//make a delete route to afspraak.blade.php
Route::delete('/afspraak/{afspraak}', function($id){
    $afspraak = Afspraken::findOrFail($id);
    $afspraak->delete();
    return redirect('/afsprakenOverzicht');
});



