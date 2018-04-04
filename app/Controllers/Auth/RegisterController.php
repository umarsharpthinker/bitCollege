<?php

namespace App\Http\Controllers\Auth;

use App\Mail\verifyUserByEmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Mail;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'regEmail' => 'required|string|email|max:255|unique:users',
            'regPassword' => 'required|string|min:6|confirmed',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */

    protected function create(array $data)
    {
        dd($data);
        $user = User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
//            'verifyToken' => str_random(25),
        ]);
//        Mail::to($user->email)->send(new verifyUserByEmail($user));
//        return $user;
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
            Auth::logout();
//        $this->guard()->login($user);

        return redirect('login')->with('message','Change in Register Time Middle ware logoout');
    }

    protected function registered(Request $request, $user)
    {
        //
    }

        public function verifyUser($email, $token){
            $user = User::where(['email'=>$email,'verifyToken'=>$token])->first();
            if($user){
                $user->status = "Active";
                $user->verifyToken = '';
                $user->save();
                return redirect('/login')->with('message','Account Verified');
            }
            else{
                return redirect('login')->with('message','Invalid Token');
            }
        }

    protected function verifyEmail($email, $token){
        $user = User::where(['email'=>$email,'verifyToken'=>$token])->first();
        if($user){
            $user->status = "Active";
            $user->verifyToken = '';
            $user->save();
            return redirect('/login')->with('message','Account Verified');
        }
        else{
            return redirect('login')->with('message','Invalid Token or Email');
        }
    }
}
