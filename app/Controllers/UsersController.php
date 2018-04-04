<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $_user;

    public function __construct(User $user) //this is dependency injector
    {
        $this->_user = $user;
    }


    public function index()
    {

        $userProfileData = $this->_user->getUsers();
        return view('index',compact('userProfileData'));
//        return view('layouts.master',compact('userProfileData'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function doSignUp(Request $request)
    {
        $vRules = User::$rules;
        $validator = Validator::make($request->all(),$vRules);

        if ($validator->fails()) {

            return redirect('registeration')
                ->withErrors($validator)
                ->withInput($request->except('password'));
        }

        $responce = $this->_user->saveUser($request);
        if($responce){
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect('home');
            }
        }
        else
            return redirect('error')->with('message','Problelm With Register User!');
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

    public function videoChat()
    {

        $userProfileData = $this->_user->getUsers();
        return view('webRTC.videoChat',compact('userProfileData'));
//        return view('layouts.master',compact('userProfileData'));
    }
}
