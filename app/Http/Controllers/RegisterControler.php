<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\TypeDocs;
use App\Http\Requests\RegisterRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterControler extends Controller
{

    private  $module='account';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
     
        $module = $this->module;
        $view = 'L';
        $columns=['Documento','Nombre','Apellidos','Email','Nombre Usuario'];
        
        $searchbox = trim($request->get('userseach'));
        $accounts = DB::table('users')
                        ->select('id','dni','name','lastname','email','username')
                        ->where( 'name','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'lastname','LIKE','%'.$searchbox.'%')
                        ->orderBy( 'dni','asc')
                        ->paginate(18);                        ;

        return view('accountModule.accounts_l', compact('accounts','searchbox','columns','module','view'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module = $this->module;
        $view = 'C';
        $typeDocs = TypeDocs::get();
        return view('accountModule.account_c',compact('typeDocs','module','view'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {

        $user = new User;
        $user->dni = $request->input('dni');
        $user->name = $request->input('name');
        $user->privilegeSet = $request->input('privilegeSet');
        $user->documenttype = $request->input('tdoc');
        $user->gender = $request->input('gender');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->save();

        return $this->saveRecord($user);
    }

    /**
     *
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // $user=User::findOrFail($id);
        $typeDocs = TypeDocs::get();
        $module = $this->module;
        $view = '_';
        return view('accountModule.account_',compact('user','module','view','typeDocs'));
    }


    public function edit(User $user)
    {
        $module = $this->module;
        $view = 'M';
        return view('accountModule.account_m',compact('user','module','view'));
        // $user=User::findOrFail($id);
        // return view('accountModule.account_m',compact('user'));
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
        return redirect()->route( $this->module);
    }

    public function saveRecord ($user){
        return redirect()->route('accountShow',compact('user'));
    }

}
