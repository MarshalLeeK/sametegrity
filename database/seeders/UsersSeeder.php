<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();
        $user->id = '11';
        $user->dni = '000000000';
        $user->name = 'root';
        $user->documenttype = '13';
        $user->gender = 1 ;
        $user->lastname = 'samein';
        $user->email = 'julianrodriguez19961@gmail.com';
        $user->username = 'sroot';
        $user->password = 'Toors';
        $user->save();

    }
}


    