<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::createuser');
    }

    public function users()
    {
        return view('adminlte::listusers');
    }

    public function getUsers()
    {
        $users = User::select(['id','lastname','name','cc','role']);

        return Datatables::of($users)

            ->make(true);

    }

    public function acount()
    {
        return view('adminlte::myacount');
    }

    public function saveAcount()
    {
        $input = Input::all();
        if($input['id'] != NULL) {
            $user = User::where('id','=',$input['id'])->firstorFail();
            $user->cc = $input['cc'];
            $user->lastname = $input['lastname'];
            $user->name = $input['name'];
            $user->gender = $input['gender'];
            $user->birthday = $input['birthday'];
            $user->role = $input['role'];
            $user->localname = $input['localname'];
            $user->address = $input['address'];
            $user->phone = $input['phone'];
            $user->email = $input['email'];
            $user->password = $input['password'];
            $user->save(); // Guarda el objeto en la BD
            return view('adminlte::listusers');
        }
        else{

        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUser()
    {
      $input = Input::all();

      if($input!= NULL){

        $user = User::where('cc','=',$input['cc'])->orWhere('email','=',$input['email'])->get();

        if (!$user->count()){
          $user = new User;
          $user->role =  $input['role'];
          $user->cc = $input['cc'];
          $user->lastname = $input['lastname'];
          $user->name = $input['name'];
          $user->gender = $input['gender'];
          $user->birthday = $input['birthday'];
          $user->localname = $input['localname'];
          $user->address = $input['address'];
          $user->phone = $input['phone'];
          $user->email = $input['email'];
          $user->password = bcrypt($input['password']);
          $user->status = $input['status'];
          $user->save();
          $msj = "El usuario ha sido registrado Exitosamente.";
          return view('adminlte::listusers');
          //return view ('users.users',['msj'=>$msj]);
        }
        else{
          $msj = "El usuario ya se encuentra Registrado. Favor Validar e intentar de Nuevo.";
        }
        //return view ('users.users',['msj'=>$msj]);
      }
    }

    public function delUser() {
        $input = Input::all();

        $student = Course::where('id','=',$input['idcourse'])->firstorFail();
            if($student == null){
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
