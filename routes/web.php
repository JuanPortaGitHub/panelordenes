<?php

use App\Mail\mailingreso;
use App\Ot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\DataTables;


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

Route::view('/', 'index');
Route::get('/panelot', 'HomeController@index')->name('dashboard')->middleware('auth');

Route::get('/email', function (){
    Mail::to('crjuanporta@gmail.com')->send(new mailingreso());
});


Route::get('/orden/consulta', 'OtController@estadodeorden')->name('estadodeorden');
Route::get('/orden/estado', 'OtController@consultaorden')->name('consultaorden');
Route::get('/confirmapresupuesto', 'AnnotationController@confirmapresupuesto')->name('confirmapresupuesto');
Route::get('/anotacioncliente', 'AnnotationController@storecliente')->name('storecliente');


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





Route::get('/searchredirect', function(Request $request){

    $otbuscada = $request->get('search');
    $route = "orden/$otbuscada";
    return redirect($route);


});



Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


Route::get('/cleareverything', function () {
    $clearcache = Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = Artisan::call('config:cache');
    echo "Config cleared<br>";

    $cleardebugbar = Artisan::call('debugbar:clear');
    echo "Debug Bar cleared<br>";
});




