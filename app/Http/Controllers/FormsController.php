<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\forms;
use App\Models\questions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FormsController extends Controller
{
    //
    private  $module = 'forms';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $module = $this->module;
        $view = 'L';
        $columns = ['Prefijo', 'Nombre',  'Ultimo Código', 'Versión', 'Descripcion', 'Notas', 'Estado'];
        $searchbox = trim($request->get('searchbox'));
        $rows = DB::table('forms')
            ->select('id', 'prefix', 'name',  'lastCode', 'version', 'description', 'notes', 'z_xOne')
            ->where('name', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('prefix', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('version', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('description', 'LIKE', '%' . $searchbox . '%')
            ->orderBy('created_at', 'asc')
            ->paginate(14);

        return view($module . "." . $module . '_' . $view, compact('rows', 'searchbox', 'columns', 'module', 'view'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $module = $this->module;
        $view = 'C';
        $uuid = Str::uuid();
        $questionList = questions::all()->where('z_xOne', 1);
        return view($module . "." . $module . '_' . $view, compact('module', 'view', 'uuid','questionList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|unique:forms|max:120',
            'open' => 'required',
        ]);

        $forms = new forms;
        $forms->name = $request->input('name');
        $forms->open = $request->input('open');
        $forms->z_xOne = $request->input('status');
        $forms->observation = $request->input('observation');
        $forms->save();


        return $this->userRedirect(0, $forms);
        // return redirect()->route($this->module);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function show(forms $forms)
    {
        //
        $module = $this->module;
        $view = '_';
        return view($module . '.' . $module . '_', compact('forms', 'module', 'view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function edit(forms $forms)
    {
        $module = $this->module;
        $view = 'M';
        return view($module . '.' . $module . '_' . $view, compact('forms', 'module', 'view'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, forms $forms)
    {
        //
        $validated = $request->validate([
            'name' => 'required|unique:forms,name,' . $forms->id . ',id|max:120',
            'open' => 'required',
        ]);


        $forms->name = $request->input('name');
        $forms->open = $request->input('open');
        $forms->observation = $request->input('observation');
        $forms->z_xOne = $request->input('status');
        $forms->save();

        return $this->userRedirect(0, $forms);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\forms  $forms
     * @return \Illuminate\Http\Response
     */
    public function destroy(forms $forms)
    {
        //
        $forms->delete();
        return $this->userRedirect();
    }

    public function userRedirect($list = 1, $forms = '')
    {

        if ($list == 1) {
            return redirect()->route($this->module);
        }
        return redirect()->route($this->module . 'Show', compact('forms'));
    }
}
