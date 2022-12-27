<?php

namespace App\Http\Controllers;

use App\Models\replies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepliesController extends Controller
{
    private  $module = 'replies';

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
        $columns = ['Respuesta', 'Observación', 'Abierta', 'Estado'];
        $searchbox = trim($request->get('searchbox'));
        $rows = DB::table('replies')
            ->select('id', 'name', 'observation', 'open', 'z_xOne')
            ->where('name', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('observation', 'LIKE', '%' . $searchbox . '%')
            ->orderBy('created_at', 'asc')
            ->paginate(14);

        return view($module . "." . $module . '_' . $view, compact('rows', 'searchbox', 'columns', 'module', 'view'));

        // return $module;
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
        return view($module . "." . $module . '_' . $view, compact('module', 'view'));
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
            'name' => 'required|unique:replies|max:120',
            'open' => 'required',
        ]);

        $replies = new replies;
        $replies->name = $request->input('name');
        $replies->open = $request->input('open');
        $replies->z_xOne = $request->input('status');
        $replies->observation = $request->input('observation');
        $replies->save();


        return $this->userRedirect(0, $replies);
        // return redirect()->route($this->module);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function show(replies $replies)
    {
        //
        $module = $this->module;
        $view = '_';
        return view($module . '.' . $module . '_', compact('replies', 'module', 'view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function edit(replies $replies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, replies $replies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\replies  $replies
     * @return \Illuminate\Http\Response
     */
    public function destroy(replies $replies)
    {
        //
        $replies->delete();
        return $this->userRedirect();
    }

    public function userRedirect($list = 1, $replies = '')
    {

        if ($list == 1) {
            return redirect()->route($this->module);
        }
        return redirect()->route($this->module . 'Show', compact('replies'));
    }
}
