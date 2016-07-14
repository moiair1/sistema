<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','FrontController@index');
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');


Route::resource('centroCosto','CentroCostoController');
Route::resource('descripcion','DescripcionController');
Route::resource('documento','DocumentoController');
Route::resource('funcionario','FuncionarioController');
Route::resource('funcion','FuncionController');
Route::resource('medioPago','MedioPagoController');
Route::resource('naturaleza','NaturalezaController');
Route::resource('origen','OrigenController');
Route::resource('gastos','GastosController');
Route::resource('mail','MailController');

Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');

Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset','Auth\PasswordController@postReset');


Route::resource('log','LogController');
Route::get('logout','LogController@logout');




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    

 Route::auth();
 Route::resource('log', 'LogController');
 Route::get('/', 'FrontController@index');
 Route::resource('usuario', 'UsuarioController');
 Route::resource('genero', 'GeneroController');
 Route::get('/contacto', 'FrontController@contacto');
 Route::get('/reviews', 'FrontController@reviews');
 Route::get('/admin', 'FrontController@admin');
 Route::get('logout', 'LogController@logout');

 Route::resource('centroCosto','CentroCostoController');
Route::resource('descripcion','DescripcionController');
Route::resource('documento','DocumentoController');
Route::resource('funcionario','FuncionarioController');
Route::resource('funcion','FuncionController');
Route::resource('medioPago','MedioPagoController');
Route::resource('naturaleza','NaturalezaController');
Route::resource('origen','OrigenController');
Route::resource('gastos','GastosController');
Route::resource('mail','MailController');


Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');

Route::get('password/reset/{token}','Auth\PasswordController@getReset');
Route::post('password/reset','Auth\PasswordController@postReset');
 

});
