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
  Route::get('/usuarios', 'UserController@users');
  Route::get('/usuarios/listausuarios', 'UserController@getUsers')->name('datatable.users');
  Route::get('/crearcurso', 'CourseController@index');
  Route::get('/cursos', 'CourseController@courses');
  Route::get('/cursos/listacursos', 'CourseController@getCourses')->name('datatable.courses');
  Route::get('/crearpregunta', 'QuestionController@index');
  Route::get('/preguntas', 'QuestionController@questions');
  Route::get('/preguntas/listapreguntas', 'QuestionController@getQuestions')->name('datatable.questions');
  Route::get('/crearrespuesta', 'AnswerController@index');
  Route::get('/respuestas', 'AnswerController@answers');
  Route::get('/preguntas/listarespuestas', 'AnswerController@getAnswers')->name('datatable.answers');

  Route::get('/miscursos', 'CourseController@index');
  Route::get('/tema', 'LessonController@index');

    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
