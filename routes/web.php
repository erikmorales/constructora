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
Route::post('/login', 'LoginController@login')->name('login');
Route::post('/logout', 'LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/proyects', 'ProyectoController@index')->name('listar.proyectos');

Route::get('/tickets/{id}', 'TicketController@index')->name('listar.tickets');

Route::get('/ticket/{id}','TicketController@create')->name('crear.ticket');
