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


Route::view('/', 'welcome');

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

Route::get('/logout', function () {
  Auth::logout();
  return redirect('/');
});

Auth::routes();
// Nos indica que las rutas que est�n dentro de �l s�lo ser�n mostradas si antes el usuario se ha autenticado.
Route::group(array('before' => 'auth'), function(){
  Route::get('/config', 'ConfigController@index')->name('config');
  Route::get('/usuarios', 'UserController@index')->name('user');
  Route::get('/home', 'HomeController@index')->name('home');  //Route::Controller / debe ir al final
});
