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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/buscarCiudad','FormularioRegistroController@buscarCiudad');

Route::prefix('/')->group(function () {
    Route::resource('/formulario','FormularioRegistroController');
    Route::get('formulario', 'FormularioRegistroController@store')->name('home');
    Route::get('crearformulario', 'FormularioRegistroController@create')->name('home');
    Route::post('enviarformulario', 'FormularioRegistroController@store')->name('home');
    Route::get('editarformulario/{id}', 'FormularioRegistroController@edit')->name('home');
    Route::put('editarformulario/{id}', 'FormularioRegistroController@update')->name('home');
});