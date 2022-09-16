<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterControler extends Controller
{
    //
    public function show(){
        return view('accountModule.register');
    }

    public function register(RegisterRequest $request){
        $user = User::created($request->validated());
    }
}
