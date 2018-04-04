<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Models\User;
use App\Providers\Repositories\UserRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Services;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $_user_service;

    public function __construct(Services\UserService $service) //this is dependency injector
    {
        $this->_user_service = $service;
    }


    public function index()
    {
        dd('Profile Show View Will Be Extablish Here');
    }

//    private function fetchCustomer(){
//        $records = $this->_user->customerData();
//        return $records;
//    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
//    public function filterCustomerAndOperWithSearchKey(Request $request){
//
//        $params = $request->get('searchkey',null);
//        $records = $this->_user->searchCustomerAndOperSearchKey($params);
//        return view('ip.admin.partials._userList',compact("records"));
//
//    }

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
            return response()->json([
                'error' => $validator->errors()->all()]);
        }

        $responce = $this->_user_service->saveUser($request);
        if($responce){
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->intended('/');
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
}
