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
Route::get('/testget', 'IndexController@testGet')->name('testget');
Route::get('/testpost', 'IndexController@testPost');
Route::get('/news/{id}', 'NewsController@getNews')
        ->where('id', '[0-9]+');
//Route::get('/news/{slug}', 'NewsController@getNews')->where('slug', '[a-zA-Z0-9-_]+');

Route::post('/testpost', 'IndexController@testPost');


// combine routes


// rest архитектура
// определение типа доступа
//Route::get($uri, $callback); запрашиваем инфу
//Route::post($uri, $callback); добавляем инфу
//Route::put($uri, $callback);
//Route::patch($uri, $callback); изменить инфу
//Route::delete($uri, $callback); удалить инфу
//Route::options($uri, $callback);
