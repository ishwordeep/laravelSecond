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
route::get('/about','AboutController@index');
route::get('/contact','ContactController@index');

route::get('/services','ServiceController@index');

route::get('/news','NewsController@index');

route::get('/random','RandomController@randomView');
route::post('/random','RandomController@random');
