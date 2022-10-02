<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/Inicio_Nino', function () {
    return view('nino.inicionino');
});

Route::get('/FotoNueva', array('as' => 'FotoNueva', function() {
    return view('nino.fotonino');
}));
