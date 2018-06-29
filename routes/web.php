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
Auth::routes();



Route::group(['middleware' => 'auth'], function () {

  Route::get('/micuenta', 'UserController@acount');
  Route::get('/crearusuario', 'UserController@index');
  Route::get('/crearcurso', 'CourseController@index');
  Route::get('/crearpregunta', 'AnswerController@index');
  Route::get('/crearrespuesta', 'QuestionController@index');

  Route::get('/miscursos', 'CourseController@index');
  Route::get('/tema', 'LessonController@index');

    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
