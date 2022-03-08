<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantenController;
use App\Http\Controllers\paardenController;
use App\Http\Controllers\afsprakenController;

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

Route::get('/klantenBeheer', function() {
    return view('klantenBeheer');
});

Route::get('/klantenOverzicht', [klantenController::class, 'showUsers']);

Route::get('klantToevoegen', function () {
    return view('klantToevoegen');
});

Route::post('klantToevoegen', [klantenController::class, 'createUser']);

Route::get('klant/{klant}', [klantenController::class, 'getUserData']);

Route::get('/afsprakenBeheer', [paardenController::class, 'getHorse']);

Route::post('/afsprakenBeheer', [afsprakenController::class, 'createAfspraak']);

Route::get('/paardenBeheer', function () {
    return view('paardenBeheer');
});

Route::post('/paardenBeheer', [paardenController::class, 'addHorse']);


