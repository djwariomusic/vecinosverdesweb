<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Input;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         return view('adminlte::createcourse');
     }

     public function courses()
     {
         return view('adminlte::listcourses');
     }

     public function getCourses()
     {
         $courses = Course::select(['id','namecourse','status']);

         return Datatables::of($courses)

             ->make(true);

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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

    public function createCourse()
    {
        $input = Input::all();

        $course = new Course();
        $course->namecourse = $input['namecourse'];
        $course->descriptioncourse = $input['descriptioncourse'];
        $course->status = $input['status'];
        $course->save();
        $alerts="ok";
        return view('adminlte::listcourses',['alerts'=>$alerts]);

    }


    public function saveCourse() {
        $input = Input::all();
        if($input['idcourse'] != NULL) {
            $course = Course::where('id','=',$input['idcourse'])->firstorFail();

            if($course == null){
              $alerts="null";
              return view('adminlte::home',['alerts'=>$alerts]);
            }
            else{

              $course->id = $input['idcourse'];
              $course->namecourse = $input['namecourse'];
              $course->descriptioncourse = $input['descriptioncourse'];
              $course->status = $input['status'];
              $course->save(); // Guarda el objeto en la BD
              $alerts="mod";
              return view('adminlte::listcourses');
            }
        }
    }


    public function delCourse() {
        $input = Input::all();

        $course = Course::where('id','=',$input['idcourse'])->firstorFail();
            if($course == null){
                $alerts="null";
                return view('adminlte::home',['alerts'=>$alerts]);
              }
            else{
                $course = Course::where('id','=',$input['idcourse'])->delete();
                $alerts="del";
                return view('adminlte::listcourses');
            }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showCourse($id  = null, Request $request)
    {
      $alerts=NULL;

      if ($id == null){
          $alerts="null";
          return view('adminlte::home',['alerts'=>$alerts]);
      }
      else{
        $data = Course::where('id','=',$id)->firstorFail();
            if($data == null){
                $alerts="null";
                return view('adminlte::home',['alerts'=>$alerts]);
            }
            else{
                return view('adminlte::createcourse',['course'=>$data]);
            }
      }
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
