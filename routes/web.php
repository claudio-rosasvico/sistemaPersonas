<?php

use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\AsociadoController;
use App\Http\Controllers\ParametrosController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'App\Http\Controllers\PageController@icons']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'App\Http\Controllers\PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'App\Http\Controllers\PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'App\Http\Controllers\PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'App\Http\Controllers\PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'App\Http\Controllers\PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'App\Http\Controllers\PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	
	Route::resource('personas', PersonaController::class)->except('store');
	Route::post('personas/store', [PersonaController::class, 'store']);
	Route::post('/personas/table', [PersonaController::class, 'table'])->name('personas.table');
	Route::get('/productos/getLocalidades/{id_provincia}', [PersonaController::class, 'getLocalidades']);
	Route::get('personas/getPersona/{id_persona}', [PersonaController::class, 'getPersona']);
	
	Route::resource('registros', RegistroController::class)->except('store');
	Route::post('registros/store', [RegistroController::class, 'store']);
	Route::post('/registros/table', [RegistroController::class, 'table'])->name('registros.table');
	
	Route::post('/asociados/listCreate', [AsociadoController::class, 'listCreate']);

	Route::resource('parametros', ParametrosController::class)->except('store');
	Route::post('parametros/store', [ParametrosController::class, 'store']);
	Route::post('/parametros/vinculos/store', [ParametrosController::class, 'vinculoStore']);
	Route::post('/parametros/cargos/store', [ParametrosController::class, 'cargoStore']);
	Route::get('parametros/vinculos/{id_persona}', [ParametrosController::class, 'getVinculos'])->name('parametros.vinculos');
	Route::get('parametros/cargos/{id_persona}', [ParametrosController::class, 'getcargos'])->name('parametros.cargos');

});

Route::resource('afiliados', AfiliadoController::class)->except('store');
Route::post('/afiliados/table', [AfiliadoController::class, 'table'])->name('afiliados.table');