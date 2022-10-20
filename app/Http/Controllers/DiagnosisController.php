<?php

namespace App\Http\Controllers;

use App\Models\diagnosis;

use App\Http\Requests\StorediagnosisRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DiagnosisController extends Controller

{

     private  $module='diagnosis';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index( Request $request )
    {

        $module = $this->module;
        $view = 'L';
        $columns = ['Código','Nombre','Descripción','Observación','estado'];

        $searchbox = trim($request->get('searchbox'));
        $diagnosis = DB::table('diagnoses')
                    ->select('id','code','name','description','observation','z_xOne')
                    ->where('code','LIKE','%'. $searchbox .'%')
                    ->orWhere('name','LIKE','%'. $searchbox .'%')
                    ->orWhere('description','LIKE','%'. $searchbox .'%')
                    ->orderBy('code')
                    ->paginate(18);

        return view('diagnosis.diagnosis_l',compact('columns','searchbox','diagnosis','module','view'));
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
        return view('diagnosis.diagnosis_c',compact('module','view'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorediagnosisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorediagnosisRequest $request)
    {
        $uuid = Str::uuid();
        $diagnosis = new diagnosis();
        $diagnosis->kp_uuid = $uuid;
        $diagnosis->code = $request->input('code');
        $diagnosis->name = $request->input('name');
        $diagnosis->description = $request->input('description');
        $diagnosis->observation = $request->input('observation');
        $diagnosis->save();
        return $this->saveRecord($diagnosis);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function show(diagnosis $diagnosis)
    {
        $module = $this->module;
        $view = '_';
        return view('diagnosis.diagnosis_',compact('diagnosis','module','view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function edit( diagnosis $diagnosis )
    {
        $module = $this->module;
        $view = 'M';
        return view('diagnosis.diagnosis_m',compact('diagnosis','module','view'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $diagnosis = diagnosis::findOrFail($id);
        $diagnosis->code = $request->input('code');
        $diagnosis->name = $request->input('name');
        $diagnosis->description = $request->input('description');
        $diagnosis->observation = $request->input('observation');
        $diagnosis->save();
        return $this->saveRecord($diagnosis);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patients= diagnosis::findOrFail($id);
        $patients->delete();
        return redirect()->route( $this->module );
    }


    public function saveRecord ($diagnosis){
        return redirect()->route('diagnosisShow',compact('diagnosis'));
    }
    
}
