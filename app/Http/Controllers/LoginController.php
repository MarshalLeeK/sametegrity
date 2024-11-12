<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginrequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Novelty;

class LoginController extends Controller
{

    public function index()
    {
        //$novelties=Novelty::all();
        $novelties=Novelty::OrderBy('id','desc')->paginate();
        return view('login',['novelties' => $novelties]);
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

         // Obtenemos los datos del usuarios desde el metodo Auth y los asignamos en una variabe $user
          $user = Auth::user();

         // Almacenamos la información en la sesión del usuario 
          session(['user_info' => [
        'dni' => $user->dni,
        'name' => $user->name,
        'lastname' => $user->lastname,
        'slug' => $user->slug,
        'documenttype' => $user->tdoc,
        'privilegeSet' => $user->privilegeSet,
        'gender' => $user->gender,
        'email' => $user->email,
        'username' => $user->username,
        'password' => $user->password,

         ]]);
        
        return $this->authenticated($request, $user);
    }

    // public function authenticated(Request $request, $user)
    // {
    //     $novelties=Novelty::OrderBy('id','desc')->paginate();
    //         return redirect()->route('index',['novelties' => $novelties]);
    // }

    // ...

public function authenticated(Request $request, $user)
{
    $novelties = Novelty::orderBy('id', 'desc')->paginate();
    return view('index', ['novelties' => $novelties]);
}

// ...


    public function logout(Request $request)
    {
       // Eliminar la información del usuario de la sesión
       $request->session()->forget('user_info');

        Auth::logout();
        return $this->goLoginHome();
        // return redirect()->route('login');
    }

    public function goLoginHome()
    {
        return redirect()->back();
    }
}
