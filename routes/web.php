<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

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

/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('nino.inicionino');
});
*/


Route::get("/",[PhotoController::class,"getIndex"])->name('index');
Route::get("/get-photo",[PhotoController::class,"getPhoto"])->name('get-photo');

/*
Route::get('/FotoNueva', array('as' => 'FotoNueva', function() {
    return view('nino.fotonino');
}));
*/