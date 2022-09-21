<?php

namespace App\Http\Controllers;
use App\Http\Requests\loginrequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
        return view('login');
    }

    public function login( loginrequest $request ){

        $credentiales = $request->getCredentials();

        if( Auth::validate($credentiales) ){
            return redirect()->to('/')->withErrors('auth.failed');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentiales);

        Auth::login($user);

        return $this->authenticated($request,$user);
    }

    public function authenticated (Request $request,$user){
        return view('index');
    }
}
