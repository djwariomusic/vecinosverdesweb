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
             return view('adminlte::home',['alerts'=>$alerts]);
           }
           else{
             $lessons = DB::table('courses')->join('lessons','courses.id','=','lessons.idcourse')->where('courses.id','=',$namecourse)->get();
             $lessons2 = DB::table('lessons')->where('lessons.idcourse','=',$namecourse)->count();
             $courses = Course::all();
             return view('adminlte::createlesson',['courses'=>$courses,'lessons'=>$lessons,'lessons2'=>$lessons2,'namecourse'=>$namecourse]);
           }
       }

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
