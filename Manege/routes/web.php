<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\klantenController;
use App\Http\Controllers\paardenController;

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

Route::get('/klantenBeheer', [klantenController::class, 'getUserData']);

Route::get('/afsprakenBeheer', [paardenController::class, 'getHorse']);

Route::post('/afsprakenBeheer', [afsprakenController::class, 'createAfspraak']);

Route::get('/paardenBeheer', function () {
    return view('paardenBeheer');
});

Route::post('/paardenBeheer', [paardenController::class, 'addHorse']);


