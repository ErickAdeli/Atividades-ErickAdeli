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

Route::get('/', function(){
	return view('layout.principal');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/usuario', function () {
    return view('usuario.index');
});

Route::get('/operador', function () {
    return view('operador.index');
});

Route::get('/administrador', function () {
    return view('administrador.index');
});

Route::get('/sobre', function(){

	return 'Olá, mundo!';

});

Route::resource('/procedure', 'ProcedureController');
Route::resource('/test', 'TestController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
