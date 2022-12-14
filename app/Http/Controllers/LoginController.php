<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginrequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

    public function login(loginrequest $request)
    {
        $credentials = $request->getCredentials();
        // dd($credentials);

        if (Auth::validate($credentials)) {
            return $this->goLoginHome();
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        if (!$user) {
            return $this->goLoginHome();
        }

        Auth::login($user);
        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user)
    {

        return redirect()->route('menu');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return $this->goLoginHome();
        // return redirect()->route('login');
    }

    public function goLoginHome()
    {

        return redirect()->back();
    }
}
