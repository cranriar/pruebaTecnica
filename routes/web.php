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



Route::get('/', 'RestauranteController@index');
Route::get('/crear', 'RestauranteController@crear');
Route::post('/up', 'RestauranteController@crear_restaurante');
Route::get('/delete/{id}', 'RestauranteController@delete');
Route::get  ('/reserva/{id}', 'RestauranteController@reserva');
route::post('/up_reserva/{id}','RestauranteController@up_reserva');