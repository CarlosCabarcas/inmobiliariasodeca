<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ProyectosController@mostrar');

Route::get('/nosotros',function ()
{
  return view('nosotros');
});

Route::get('/inicio_admin',function ()
{
  return view('inicio_admin');
});

Route::get('/proyectos', 'ProyectosController@mostrar');

Route::get('/ver_proyecto/{nombre}/{idproyecto}', 'ImagenController@index');

Route::get('/contacto',['as' => 'contact', function ()
{
  return view('contacto');
}]);

Route::post('send', ['as' => 'enviar', 'uses' => 'MailController@send']);

//**********************************
Route::get('/crear_proyecto', ['as' => 'create_proyecto', 'uses' => 'ProyectosController@index']);

Route::post('/guardar_proyecto', ['as' => 'save_proyecto', 'uses' => 'ProyectosController@store']);

Route::get('/listar_proyectos', ['as' => 'listar_proyecto', 'uses' => 'ProyectosController@listarProyectos']);

Route::get('/eliminar_proyecto/{id}', ['as' => 'delete', 'uses' => 'ProyectosController@destroy']);

Route::get('/editar_proyecto/{id}', ['as' => 'editar_proyecto', 'uses' => 'ProyectosController@mostrarProyectosEdit']);

Route::post('/guardar_edicion/{id}', ['as' => 'guardar_edicion', 'uses' => 'ProyectosController@update']);
