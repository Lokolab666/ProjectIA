<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'login'])->name('home');



/* Routes for patients */

Route::middleware(['auth', 'user-access:patient'])->group(function () {
    error_log('message here.1');
    Route::get('/nino/inicionino', [HomeController::class, 'patientHome'])->name('nino.inicionino');
  
    /*Route::get('/home', function () {
        return view('nino.inicionino');
    });


    Route::get('/nino/inicionino', [HomeController::class, 'patientHome'])->name('nino.inicionino');
*/
    
    Route::get('/FotoNueva', array('as' => 'FotoNueva', function() {
        return view('nino.fotonino');
    }));
    
    Route::get('/Tarjetas', array('as' => 'Tarjetas', function() {
        return view('nino.tarjetanino');
    }));
    
    Route::get('/Tarjeta-Alimento', array('as' => 'Tarjeta-Alimento', function() {
        return view('nino.tarjetaAlimento');
    }));
    
    Route::get('/Tarjeta-Familia', array('as' => 'Tarjeta-Familia', function() {
        return view('nino.tarjetaFamilia');
    }));

    Route::post('/image', 'App\Http\Controllers\ImageController@post');
    
});


/* Admin routes */
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    error_log('message here.2');
    /*Route::get('/home', function () {
        return view('nino.tarjetaFamilia');
    });*/

    Route::get('/nino/fotonino', [HomeController::class, 'adminHome'])->name('nino.fotonino');

  /*
    Route::get('/Inicio_Admin', function () {
        return view('admin.inicioadmin');
    });
*/
});

/* Tutor routes */
Route::middleware(['auth', 'user-access:tutor'])->group(function () {
    error_log('message here.3');
    /*Route::get('/home', function () {
        return view('nino.fotonino');
    });*/

    Route::get('/nino/tarjetaAlimento', [HomeController::class, 'tutorHome'])->name('nino.tarjetaAlimento');
    /*
      Route::get('/Inicio_Tutor', function () {
          return view('tutor.Iniciotutor');
      });
  */
  });


/*
Route::post('people/validate_login', 'App\Http\Controllers\PeopleController@validate_login');


Route::post('/people', 'App\Http\Controllers\PeopleController@post');


Route::get('/IdentifyImage', 'App\Http\Controllers\IdentifyImage@index');
*/

