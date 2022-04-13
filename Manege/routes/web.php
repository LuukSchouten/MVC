<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlantenController;
use App\Http\Controllers\paardenController;
use App\Http\Controllers\afsprakenController;

use App\Models\Klanten;
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

Route::get('/afsprakenBeheer', [paardenController::class, 'getHorse']);

Route::post('/afsprakenBeheer', [afsprakenController::class, 'createAfspraak']);

Route::get('/paardenBeheer', function () {
    return view('paardenBeheer');
});

//

Route::post('/paardenBeheer', [paardenController::class, 'addHorse']);


