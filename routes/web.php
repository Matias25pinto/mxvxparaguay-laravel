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

Auth::routes();

Route::get('/', 'CategoriasController@index')->name('categorias');

Route::get('/formulario-inscripcion','InscripcionController@create')->name('formulario-inscripcion');
Route::post('/formulario-inscripcion','InscripcionController@store')->name('enviar-formulario-inscripcion');

Route::get('/formulario-pagos', 'PagosController@create')->name('formulario-pagos');
Route::post('/enviar-comprobante', 'PagosController@store')->name('enviar-comprobante');

Route::get('formulario-registro', 'RegistroController@create')->name('formulario-registro');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
