<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('dashboard');

//prueba2

//Ruta para obtener la lista de clientes en la creacion de ordenes de trabajo (para busqueda y autocompletar)
Route::post('/clientes/getClientes/','ClientesController@getClientes')->name('clientes.getClientes');

//Ruta para para obtener el detalle de la orden de trabajo en base a $ot_id en vez de $id como sale por defecto en resource
Route::get('/orden/{ot_id}','OtController@anotaciones')->name('ordenes.anotaciones');

//Ruta para la creacion de nuevas anotaciones en base al $ot_id y no al $id
//Route::get('/agregaranotacion/{ot_id}','OtController@cargaranotacion')->name('ordenes.cargaranotacion');


Route::resource('ordenes', 'OtController');
Route::resource('clientes', 'ClientesController');
Route::resource('annotations', 'AnnotationController');






