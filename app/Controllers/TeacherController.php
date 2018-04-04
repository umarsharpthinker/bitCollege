<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;
use App\Providers\Repositories\TeacherRepo;
use App\Providers\Repositories\UserRepo;
use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Services;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $_service;
    private $_repo;

    public function __construct(Services\TeacherService $service, UserRepo $repo) //this is dependency injector
    {
        $this->_service = $service;
        $this->_repo = $repo;
    }
//    private $_user;
//    private $_teacherRepo;
//    public function __construct(User $user)
//    {
//        $this->_user = $user;
////        $this->_teacherRepo = $teacher;
//    }

    public function doSignUp(Request $request){
        $vRules = User::$rules;
        $validator = Validator::make($request->all(),$vRules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)->
                withInput($request->except('password'));
        }
        $responce = $this->_teacher_service->saveInTeacherTable($request);
        dd("All is Well! Haza jadeedun");
    }


    public function index()
    {
        //
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
        dd('welcome');
        $operatorData = $request->all();
        if($request->hasFile("photo")){
            $operatorData["photo"] = $this->uploadPicture($request);
        }
        $message = $this->_user->saveData($operatorData);
        return redirect()->back()->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = UserRepo::fetchTeacherProfile($id);
        dd($profile);
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
