<?php

namespace App\Http\Controllers;

use App\Models\diagnosis;

use Illuminate\Http\Request;
use App\Http\Requests\StorediagnosisRequest;
use App\Http\Requests\UpdatediagnosisRequest;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {

        $columns = ['Código','Nombre','Descripción','','estado'];
        $searchbox = trim($request->get('searchbox'));
        $diagnosis = DB::table('diagnoses')
                    ->select('id','code','name','description','observation','z_xOne')
                    ->where('code','LIKE','%'. $searchbox .'%')
                    ->orWhere('name','LIKE','%'. $searchbox .'%')
                    ->orWhere('description','LIKE','%'. $searchbox .'%')
                    ->orWhere('observation','LIKE','%'. $searchbox .'%')
                    ->orderBy('code')
                    ->paginate(18);
        return view('diagnosis.diagnosis_l',compact('columns','searchbox','diagnosis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('diagnosis.diagnosis_c');
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

        return redirect()->route('diagnosisModule');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function show(diagnosis $diagnosis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function edit(diagnosis $diagnosis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatediagnosisRequest  $request
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatediagnosisRequest $request, diagnosis $diagnosis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function destroy(diagnosis $diagnosis)
    {
        //
    }
}
