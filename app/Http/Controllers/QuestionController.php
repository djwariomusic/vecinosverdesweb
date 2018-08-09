<?php

namespace App\Http\Controllers;

use App\Question;
use App\Lesson;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Input;
use DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();
        return view('adminlte::createquestion',['lessons'=>$lessons]);
    }

    public function questions()
    {
        return view('adminlte::listquestions');
    }

    public function getQuestions()
    {
        $questions = Question::select(['idquestion','status']);

        return Datatables::of($questions)

            ->make(true);

    }


    public function searchQuestions()
    {
      $input = Input::all();
      $namelesson = $input['namelesson'];

      if($input['namelesson'] != NULL) {
          $questions = DB::table('questions')->join('lessons','lessons.idlesson','=','questions.idlesson')->where('questions.idlesson','=',$input['namelesson'])->first();

          if($questions == null){
            $lessons = Lesson::all();
            $lessons2 = Lesson::where('idlesson','=',$input['namelesson'])->first();
            $questions = "null";
            $questions2 = "null";
            //dd($lessons);
            $alerts="null";
            return view('adminlte::createquestion',['alerts'=>$alerts,'questions2'=>$questions2,'questions'=>$questions,'lessons'=>$lessons,'lessons2'=>$lessons2]);
          }
          else{
            $questions = DB::table('questions')->join('lessons','lessons.idlesson','=','questions.idlesson')->where('questions.idlesson','=',$input['namelesson'])->get();
            $questions2 = DB::table('questions')->where('questions.idlesson','=',$namelesson)->first();
            //dd($questions2);
            $lessons = Lesson::all();
            $lessons2 = DB::table('lessons')->where('lessons.idlesson','=',$namelesson)->first();
            return view('adminlte::createquestion',['lessons'=>$lessons,'lessons2'=>$lessons2,'questions'=>$questions,'questions2'=>$questions2]);
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
