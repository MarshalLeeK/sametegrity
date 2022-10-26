<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    

     public function run()
    {
    
        $name='root';
        $lastname='samein';

        $user = new User();
        $user->id = '11';
        $user->dni = '000000000';
        $user->name = $name;
        $user->lastname = $lastname;
        $user->slug = Str::slug($name.' '.$lastname);
        $user->privilegeSet = '22';
        $user->documenttype = '13';
        $user->gender = 1 ;
        $user->email = 'julianrodriguez19961@gmail.com';
        $user->username = 'sroot';
        $user->password = 'Toors';
        $user->save();

    }
}