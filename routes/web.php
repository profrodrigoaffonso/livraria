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

Route::prefix('editoras')->group(function(){
    Route::get('/', 'App\Http\Controllers\EditorasController@index')->name('editoras.index');
    Route::get('/create', 'App\Http\Controllers\EditorasController@create')->name('editoras.create');
    Route::post('/store', 'App\Http\Controllers\EditorasController@store')->name('editoras.store');
    Route::get('/{id}/edit', 'App\Http\Controllers\EditorasController@edit')->name('editoras.edit');
    Route::put('/update', 'App\Http\Controllers\EditorasController@update')->name('editoras.update');
});

Route::prefix('estantes')->group(function(){
    Route::get('/', 'App\Http\Controllers\EstantesController@index')->name('estantes.index');
    Route::get('/create', 'App\Http\Controllers\EstantesController@create')->name('estantes.create');
    Route::post('/store', 'App\Http\Controllers\EstantesController@store')->name('estantes.store');
    Route::get('/{id}/edit', 'App\Http\Controllers\EstantesController@edit')->name('estantes.edit');
    Route::put('/update', 'App\Http\Controllers\EstantesController@update')->name('estantes.update');
});

Route::prefix('autores')->group(function(){
    Route::get('/', 'App\Http\Controllers\AutoresController@index')->name('autores.index');
    Route::get('/create', 'App\Http\Controllers\AutoresController@create')->name('autores.create');
    Route::post('/store', 'App\Http\Controllers\AutoresController@store')->name('autores.store');
    Route::get('/{id}/edit', 'App\Http\Controllers\AutoresController@edit')->name('autores.edit');
    Route::put('/update', 'App\Http\Controllers\AutoresController@update')->name('autores.update');
});

Route::prefix('livros')->group(function(){
    Route::get('/', 'App\Http\Controllers\LivrosController@index')->name('livros.index');
    Route::get('/create', 'App\Http\Controllers\LivrosController@create')->name('livros.create');
    Route::post('/store', 'App\Http\Controllers\LivrosController@store')->name('livros.store');
    Route::get('/{id}/edit', 'App\Http\Controllers\LivrosController@edit')->name('livros.edit');
    Route::put('/update', 'App\Http\Controllers\LivrosController@update')->name('livros.update');
});
