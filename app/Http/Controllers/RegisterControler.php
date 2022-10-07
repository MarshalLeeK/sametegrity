<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\TypeDocs;

class RegisterControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        
        $columns=['Documento','Nombre','Apellidos','Email','Nombre Usuario'];
        $searchbox = trim($request->get('userseach'));
        $accounts = DB::table('users')
                        ->select('id','name','lastname','email','username','dni')
                        ->where( 'name','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'lastname','LIKE','%'.$searchbox.'%')
                        ->orderBy( 'dni','asc')
                        ->paginate(10);                        ;

        return view('accountModule.accounts_l', compact('accounts','searchbox','columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeDocs = TypeDocs::get();
        return view('accountModule.account_c',compact('typeDocs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Crear usuario
        $user = new User;
        //establecer campos con el contenido del request
        $user->dni = $request->input('dni');
        $user->name = $request->input('name');
        $user->documenttype = $request->input('tdoc');
        $user->gender = $request->input('gender');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        //comando de guardado.
        $user->save();
        //retonar vista
        return redirect()->route('accountModule')->with('successs','Registro guardado satisfactoriamente');
    }

    /**
     *
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('login');
    }


    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('accountModule.account_m',compact('user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user= User::findOrFail($id);
        $user->dni = $request->input('dni');
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->save();
        return redirect()->route('accountModule');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $user= User::findOrFail($id);
        $user->delete();
        return redirect()->route('accountModule');
    }

}
