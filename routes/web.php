<?php

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


Route::get('peliculas', 'PeliculasController@listado');

Route::get('peliculas/{id}', 'PeliculasController@buscarPeliculaId');

Route::get('agregarPelicula', 'PeliculasController@nuevaPelicula');

Route::post('agregarPelicula', 'PeliculasController@agregarPelicula');
