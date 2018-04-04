<?php

use Illuminate\Database\Seeder;
use App\User;
//use App\Globals\GlobalsConst;
class UsersTableSeeder extends Seeder
{
    private $_users;

    public function __construct(User $users){

        $this->_users= $users;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->_users->truncate();

        $users = [
            array(
                'city_id'=> '1',
                'username'=> 'bccollege',
                'email'=> 'bitcollege@gmail.com',
                'password'=> Hash::make('admin123456'),
                'fname'=> 'Bit',
                'lname'=> 'College',
                'full_name'=> 'Bit College',
                'user_type'=> 'Admin',
                'dob'=> '1900-12-01',
                'cnic'=> '35201-2224047-3',
                'gender'=> 'Male',
                'status'=> 'Active',
            ),
            array(
                'city_id'=> '2',
                'username'=> 'bitcollegeStnt',
                'email'=> 'student@gmail.com',
                'password'=> Hash::make('student123456'),
                'fname'=> 'Student',
                'lname'=> 'Khan',
                'full_name'=> 'Student Khan',
                'user_type'=> 'Student',
                'dob'=> '1900-12-01',
                'cnic'=> '35201-555047-3',
                'gender'=> 'Male',
                'status'=> 'Active',
            )
        ];
        $this->_users->insert($users);

    }

}
