<?php

use App\Mail\mailingreso;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('dashboard')->middleware('auth');;

Route::get('/email', function (){
    Mail::to('crjuanporta@gmail.com')->send(new mailingreso());
});


Route::get('/estadodeorden', 'OtController@estadodeorden')->name('estadodeorden');
Route::get('/consultaorden', 'OtController@consultaorden')->name('consultaorden');
Route::get('/confirmapresupuesto', 'AnnotationController@confirmapresupuesto')->name('confirmapresupuesto')->middleware('auth');


//Ruta para obtener la lista de clientes en la creacion de ordenes de trabajo (para busqueda y autocompletar)
Route::post('/clientes/getClientes/','ClientesController@getClientes')->name('clientes.getClientes')->middleware('auth');

//Ruta para para obtener el detalle de la orden de trabajo en base a $ot_id en vez de $id como sale por defecto en resource
Route::get('/orden/{ot_id}','OtController@anotaciones')->name('ordenes.anotaciones')->middleware('auth');

Route::get('/pdf/{ot_id}','OtController@showpdf')->name('ordenes.showpdf')->middleware('auth');


//Ruta para panel de usuario
Route::get('/panel/{user_id}','OtController@panel')->name('ordenes.panelusuario')->middleware('auth');

Route::resource('ordenes', 'OtController')->middleware('auth');
Route::resource('clientes', 'ClientesController')->middleware('auth');
Route::resource('equipos', 'EquiposController')->middleware('auth');
Route::resource('annotations', 'AnnotationController')->middleware('auth');






