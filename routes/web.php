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

Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
Route::get('/ingreso/error', 'Auth\GoogleController@error')->name('login.error');

Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin');
Route::get('/admin/home', 'HomeController@index')->name('dashboard');
Route::get('/admin/administradores', 'AdministradoresController@index')->name('administradores.listado');
Route::get('/admin/administradores/nuevo', 'AdministradoresController@create')->name('administrador.nuevo');
Route::post('/admin/administradores/guardar', 'AdministradoresController@store')->name('administrador.store');
Route::get('/admin/administradores/{id}/edit', 'AdministradoresController@edit')->name('administrador.edit');
Route::put('/admin/administradores/{id}', 'AdministradoresController@update')->name('administrador.update');
Route::delete('/admin/administradores/{id}', 'AdministradoresController@destroy')->name('administrador.delete');
Route::get('/trivia/entrada', 'HomeController@entrada')->name('trivia.entrada');
Route::get('/trivia/finalizada', 'HomeController@finalizada')->name('trivia.salida');
Route::get('/trivia', 'HomeController@show')->name('trivia.front');
Route::post('/trivia/valida', 'HomeController@validaPregunta')->name('trivia.validar');
Route::get('/trivia/ranking1', 'HomeController@ranking1')->name('trivia.ranking1');
Route::get('/trivia/ranking2', 'HomeController@ranking2')->name('trivia.ranking2');
Route::get('/trivia/ranking3', 'HomeController@ranking3')->name('trivia.ranking3');
Route::get('/trivia/ranking/acumulativo', 'HomeController@acumulativo')->name('trivia.ranking.acumulativo');
Route::get('/trivia/ranking/areas', 'HomeController@area2')->name('trivia.ranking.areas');
