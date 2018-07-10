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
  Route::post('/modmicuenta', 'UserController@saveAcount');
  Route::get('/usuario', 'UserController@index');
  Route::get('/usuarios', 'UserController@users');
  Route::get('/usuarios/listausuarios', 'UserController@getUsers')->name('datatable.users');
  Route::post('/crearusuario', 'UserController@createUser');
  Route::get('/editarusuario/{id}', 'UserController@showUser');
  Route::post('/modusuario', 'UserController@saveAcount');
  Route::post('/eliminarusuario', 'UserController@delUser');
  Route::get('/curso', 'CourseController@index');
  Route::get('/cursos', 'CourseController@courses');
  Route::get('/cursos/listacursos', 'CourseController@getCourses')->name('datatable.courses');
  Route::post('/crearcurso', 'CourseController@createCourse');
  Route::get('/editarcurso/{id}', 'CourseController@showCourse');
  Route::post('/modcurso', 'CourseController@saveCourse');
  Route::post('/eliminarcurso', 'CourseController@delCourse');
  Route::get('/tema', 'LessonController@index')->name('tema');
  Route::get('/editartema/{id}', 'LessonController@showLesson');
  Route::post('/modtema', 'LessonController@saveLesson');

  Route::post('/buscarcursotemas', 'LessonController@searchLessons');
  Route::post('/creartema', 'LessonController@createLesson');
  Route::get('/pregunta', 'QuestionController@index');
  Route::get('/preguntas', 'QuestionController@questions');
  Route::get('/preguntas/listapreguntas', 'QuestionController@getQuestions')->name('datatable.questions');
  Route::get('/respuesta', 'AnswerController@index');
  Route::get('/respuestas', 'AnswerController@answers');
  Route::get('/respuestas/listarespuestas', 'AnswerController@getAnswers')->name('datatable.answers');

  Route::get('/miscursos', 'LessonController@mylesson');

    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
