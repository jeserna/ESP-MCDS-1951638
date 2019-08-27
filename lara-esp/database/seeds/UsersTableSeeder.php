<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = new User;
        $user->username = 'HomeroJSimpson10';
        $user->fullname = 'Homero J Simpson';
        $user->email = 'homerojs@gmail.com';
        $user->password = bcrypt('admin');
        $user->birthdate = '1975-12-24';
        $user->gender = 'Male';
        $user->role = 'Admin';
        $user->save();
        
        User::create(array(
            'username' => 'JeremiasSpringfield12',
            'fullname' => 'Jeremias Springfield',
            'email' => 'jeremiass@gmail.com',
            'password' => bcrypt('1234'),
            'birthdate' => '1890-08-20',
            'gender' => 'Male'
        ));

        // factory(User::class, 10)->create();
    }
}
