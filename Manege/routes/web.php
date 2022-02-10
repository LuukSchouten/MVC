<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\manegeController;

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

Route::get('/klantenBeheer', function () {
    return view('klantenBeheer');
});

Route::get('/afsprakenBeheer', function () {
    return view('afsprakenBeheer');
});

Route::get('/paardenBeheer', function () {
    return view('paardenBeheer');
});

Route::post('/klantenBeheer', [manegeController::class, 'insertCustomerData']);


