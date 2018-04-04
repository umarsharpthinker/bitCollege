<?php

namespace App;

use App\Globals\GlobalsConst;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Finder\Glob;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public static $rules = [
        'password' => 'required|min:6|confirmed',
        'email' => 'required|unique:users',
        'fname' => 'required|max:40',
        'lname' => 'required|max:40',
        'username' => 'required|unique:users'
    ];

    protected $hidden = array('password', 'remember_token');

    // Add your validation rules here
    protected $fillable = ['company_id',
        'business_unit_id',
        'verifyToken',
        'city_id',
        'user_type',
        'fname',
        'lname',
        'username',
        'full_name',
        'password',
        'email',
        'gender',
        'address',
        'dob',
        'photo',
        'cnic',
        'phone',
        'cnic',
        'additional_info',
        'status',];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function saveUser($data,$dataProcessType = GlobalsConst::DATA_SAVE)
    {
//                dd($data);
        $response = null;
        $comeFrom = isset($data['comeFrom']) ? $data['comeFrom'] : 'User';
        $vRules = User::$rules;
        $userType = $data['user_type'];

        if ($dataProcessType == GlobalsConst::DATA_SAVE) {
            $user = new User();
            $user->password = Hash::make($data['password']);
        } elseif ($dataProcessType == GlobalsConst::DATA_UPDATE) {
            $id = isset($data['userId']) ? $data['userId'] : '';
            $vRules['username'] = $vRules['username'] . ',id,' . $id;
            $vRules['email'] = $vRules['email'] . ',id,' . $id;
            $vRules['password'] = '';
            if ($id != '') {
                $user = User::find($id);
            } else {
                return $response = ['success' => false, 'error' => true, 'message' => $comeFrom . ' record did not find for updation! '];
            }
        }

        //*****End Rules Validators

        $cityId = isset($data['city_id']) ? $data['city_id'] : null;
        $dob = isset($data['dob']) ? date('Y-m-d', strtotime($data['dob'])) : null;
        $cnic = isset($data['cnic']) ? $data['cnic'] : null;
        $gender = isset($data['gender']) ? $data['gender'] : null;
        $address = isset($data['address']) ? $data['address'] : null;
        $phone = isset($data['phone']) ? $data['phone'] : null;
        $additional_info = isset($data['additional_info']) ? $data['additional_info'] : null;
        $photo = isset($data['photo']) ? $data['photo'] : null;
        $username = isset($data['username']) ? $data['username'] : "problem";


        $user->city_id = $cityId;
        $user->fname = $data['fname'];
        $user->lname = $data['lname'];
        $user->full_name = $data['fname'] . ' ' . $data['lname'];
        $user->username = $username;
        $user->email = $data['email'];
        $user->photo = $photo;
        $user->user_type = $userType;
        $user->dob = $dob;
        $user->cnic = $cnic;
        $user->gender = $gender;
        $user->address = $address;
        $user->phone = $phone;
        $user->status = GlobalsConst::STATUS_ON;
        if ($user->save())
            $response = "Successfully Saved";
        else
            $response = "Error During Save";
        return $response;

    }
        public function getUsers(){

        $queryBuilder = $this->all();
        return $queryBuilder;
        }


}
