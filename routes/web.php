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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'IndexController@index');
Route::get('/about', 'IndexController@about');
Route::get('/testget', 'IndexController@testGet');
Route::post('/testpost', 'IndexController@testPost');

// rest архитектура
// определение типа доступа
//Route::get($uri, $callback); запрашиваем инфу
//Route::post($uri, $callback); добавляем инфу
//Route::put($uri, $callback);
//Route::patch($uri, $callback); изменить инфу
//Route::delete($uri, $callback); удалить инфу
//Route::options($uri, $callback);
