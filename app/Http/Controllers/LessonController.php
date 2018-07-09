<?php

namespace App\Http\Controllers;

use App\Course;
use App\Lesson;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Input;
use DB;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $courses = Course::all();
         return view('adminlte::createlesson',['courses'=>$courses]);
     }


     public function mylesson()
     {
         return view('adminlte::mylesson');
     }

     public function searchLessons()
     {
       $input = Input::all();
       $namecourse = $input['namecourse'];

       if($input['namecourse'] != NULL) {
           $lessons = DB::table('courses')->join('lessons','idcourse','=','lessons.idcourse')->where('courses.id','=',$input['namecourse'])->get();


           if($lessons == null){
             $alerts="null";
             return view('adminlte::createlesson',['alerts'=>$alerts]);
           }
           else{
             $lessons = DB::table('courses')->join('lessons','courses.id','=','lessons.idcourse')->where('courses.id','=',$namecourse)->get();
             $lessons2 = DB::table('lessons')->where('lessons.idcourse','=',$namecourse)->first();
             $courses = Course::all();
             $courses2 = DB::table('courses')->where('courses.id','=',$namecourse)->first();
             return view('adminlte::createlesson',['courses'=>$courses,'courses2'=>$courses2,'lessons'=>$lessons,'lessons2'=>$lessons2,'namecourse'=>$namecourse]);
           }
       }

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createLesson()
    {
      $input = Input::all();

      if($input!= NULL){

          $lesson = new Lesson;
          $lesson->idcourse =  $input['idcourse2'];
          $lesson->titlelesson = $input['titlelesson'];
          $lesson->objetive = $input['objetive'];
          $lesson->description = $input['description'];
          $lesson->content = $input['content'];
          $lesson->image = $input['image'];
          $lesson->url = $input['url'];
          $lesson->status = $input['status'];
          $lesson->save();
          $msj = "El usuario ha sido registrado Exitosamente.";
          return redirect()->to('/tema');
          //return view ('users.users',['msj'=>$msj]);
      }
      else{
          $msj = "El usuario ya se encuentra Registrado. Favor Validar e intentar de Nuevo.";
      }
        //return view ('users.users',['msj'=>$msj]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
