<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AlbumControllerPatient;
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

    Route::resource('albumn', AlbumControllerPatient::class)->middleware('auth');
  
    /*


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

    Route::get('/admin/inicioadmin', [HomeController::class, 'adminHome'])->name('admin.inicioadmin');

    Route::get('/CrearPersona', array('as' => 'CrearPersona', function() {
        return view('admin.crearPersona');
    }));

    Route::get('/PasoUno', array('as' => 'PasoUno', function() {
        return view('admin.pasoUno');
    }));

    Route::get('/PasoDos', array('as' => 'PasoDos', function() {
        return view('admin.pasoDos');
    }));

    Route::get('/PasoTres', array('as' => 'PasoTres', function() {
        return view('admin.pasoTres');
    }));

    Route::get('/GestionarUsuario', array('as' => 'GestionarUsuario', function() {
        return view('admin.gestionarUsuario');
    }));

    /*Route::get('/view', 'App\Http\Controllers\UserController@view');*/

    Route::post('/registerPerson', 'App\Http\Controllers\PersonController@post');

    Route::post('/registerPatientOne', 'App\Http\Controllers\PatientController@stepOne');

    Route::post('/registerTutor', 'App\Http\Controllers\TutorController@post');

    Route::controller(UserController::class)->group(function () {
        Route::get('GestionarUsuario', 'index')->middleware('auth')->name('GestionarUsuario');
    });

    Route::resource('users', UserController::class);
});

/* Tutor routes */
Route::middleware(['auth', 'user-access:tutor'])->group(function () {
    error_log('message here.3');
    /*Route::get('/home', function () {
        return view('nino.fotonino');
    });*/

    Route::get('/tutor/iniciotutor', [HomeController::class, 'tutorHome'])->name('tutor.iniciotutor')->middleware('auth');

    Route::resource('album', AlbumController::class)->middleware('auth');

    Route::post('album/{album}/upload', [AlbumController::class, 'upload'])->name('album.upload')->middleware('auth');

    Route::get('album/{album}/image/{image}', [AlbumController::class, 'showImage'])->name('album.image.show');

    Route::delete('album/{album}/image/{image}', [AlbumController::class, 'destroyImage'])->name('album.image.destroy');
  

  });


/*
Route::post('people/validate_login', 'App\Http\Controllers\PeopleController@validate_login');


Route::post('/people', 'App\Http\Controllers\PeopleController@post');


Route::get('/IdentifyImage', 'App\Http\Controllers\IdentifyImage@index');
*/

