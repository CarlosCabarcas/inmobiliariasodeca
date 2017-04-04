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

Route::get('/', function () {
    return view('index');
});

Route::get('/nosotros',function ()
{
  return view('nosotros');
});

Route::get('/inicio_admin',function ()
{
  return view('inicio_admin');
});

Route::get('/crear_proyecto',function ()
{
  return view('crear_proyecto');
});
