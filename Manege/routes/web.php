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

Route::get('/afsprakenBeheer', [paardenController::class, 'getHorse']);

Route::post('/afsprakenBeheer', [afsprakenController::class, 'createAfspraak']);

Route::get('/paardenBeheer', function () {
    return view('paardenBeheer');
});

Route::post('/paardenBeheer', [paardenController::class, 'addHorse']);


