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
Route::get('/', 'LoginController@Showloginform')->name('showloginform');
Route::post('login', 'LoginController@login')->name('login');
Route::post('logout', 'LoginController@logout')->name('logout');

Route::get('home', 'HomeController@index')->name('home');
Route::get('proyects', 'ProyectoController@index')->name('listar.proyectos');

Route::get('tickets/{id}', 'TicketController@index')->name('listar.tickets');

Route::get('new/{id}/ticket','TicketController@create')->name('crear.ticket');
Route::post('get_materiales/{id}', 'TicketController@get_materiales')->name('get_materiales');
Route::post('get_class_workers', 'TicketController@get_class_workers')->name('get_class_workers');

Route::get('materiales', 'MaterialesController@index')->name('listar.materiales');
Route::get('create', 'MaterialesController@create')->name('materiales.create');
Route::get('editmateriales', 'MaterialesController@edit')->name('editmateriales');

Route::get('clientes', 'ClientesController@index')->name('clientes');
Route::get('crear','ClientesController@create')->name('crear');

//Route::get('razon', 'RazontrabajoController@index')->name('razon');
Route::resource('Razontrabajo', 'RazontrabajoController');
Route::get('razon', 'RazontrabajoController@index')->name('listar.razon');
Route::get('razoncrear', 'RazontrabajoController@create')->name('razoncrear');
Route::get('editrazon', 'RazontrabajoController@edit')->name('editrazon');
Route::get('delete', 'RazontrabajoController@destroy')->name('delete');

Route::get('usuarios', 'UsuariosController@index')->name('usuarios');
Route::get('alltickets', 'UsuariosController@alltickets')->name('alltickets');Route::get('allprojects', 'UsuariosController@allprojects')->name('allprojects');


Route::resource('Tipo', 'Tipo');
Route::get('tipo_trabajo', 'Tipo@index')->name('listar.tipo_trabajo');
Route::get('tipo_crear', 'Tipo@create')->name('tipo_crear');
