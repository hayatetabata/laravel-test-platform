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
Route::get('/greet', 'GreetController@greet');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
  return 'Hello world';
});

Route::get('/foo/{name}','lists\FooController@index');
Route::get('/foo','Lists\FooController@index');

Route::get('/report','ReportController@index');
Route::post('/download', 'ReportController@download');


Route::get('/jspage', 'JsPageController@index');
