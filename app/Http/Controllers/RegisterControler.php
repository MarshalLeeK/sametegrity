<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\TypeDocs;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateUserRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RegisterControler extends Controller
{

    private  $module = 'user';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $module = $this->module;
        $view = 'L';
        $columns = ['Documento', 'Nombre', 'Apellidos', 'Email', 'Nombre Usuario'];

        $searchbox = trim($request->get('searchbox'));
        $accounts = DB::table('users')
            ->select('id', 'dni', 'name', 'lastname', 'email', 'username')
            ->where('name', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('lastname', 'LIKE', '%' . $searchbox . '%')
            ->orderBy('dni', 'asc')
            ->paginate(18);

        return view('accountModule.accounts_l', compact('accounts', 'searchbox', 'columns', 'module', 'view'));
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
        return view('accountModule.account_c', compact('typeDocs', 'module', 'view'));
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
        $user->lastname = $request->input('lastname');
        $user->slug = Str::slug($user->name . ' ' . $user->lastname);
        $user->documenttype = $request->input('tdoc');
        $user->privilegeSet = $request->input('privilegeSet');
        $user->gender = $request->input('gender');
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
        $typeDocs = TypeDocs::get();
        $module = $this->module;
        $view = '_';
        return view('accountModule.account_', compact('user', 'module', 'view', 'typeDocs'));
    }


    public function edit(User $user)
    {
        $module = $this->module;
        $typeDocs = TypeDocs::get();
        $view = 'M';
        return view('accountModule.account_m', compact('user', 'module', 'view', 'typeDocs'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->dni = $request->input('dni');
        $user->name = $request->input('name');
        $user->lastname = $request->input('lastname');
        $user->slug = Str::slug($user->name . ' ' . $user->lastname);
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->password = $request->input('password');
        $user->save();
        return $this->saveRecord($user);
        // return redirect()->route('accountModule');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($user)
    {
        User::destroy($user);
        return redirect()->route($this->module);
    }

    public function saveRecord($user)
    {
        return redirect()->route($this->module, compact('user'));
    }
}
