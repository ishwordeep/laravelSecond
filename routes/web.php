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

route::get('/incDecNumber','IncDecController@myNumberDefault');
route::get('/incDecNumber/{num}','IncDecController@myNumber');
route::post('/incDecNumber/{num}','IncDecController@myNumberAdjust');

route::get('/student-form/create','StudentController@create');
route::post('/student-form/create','StudentController@store');
route::get('/student-list','StudentController@index');

route::get('/department-form/create','DepartmentController@create');
route::post('/department-form/create','DepartmentController@store');
route::get('/department-list','DepartmentController@index');

route::get('/faculty-form/create','FacultyController@create');
route::post('/faculty-form/create','FacultyController@store');
route::get('/faculty-list','FacultyController@index');
