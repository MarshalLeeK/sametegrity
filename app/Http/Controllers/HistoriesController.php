<?php

namespace App\Http\Controllers;

use App\Models\histories;
use App\Models\Patients;
use App\Models\TypeDocs;
use App\Http\Requests\StorehistoriesRequest;
use App\Http\Requests\UpdatehistoriesRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class HistoriesController extends Controller
{

    private  $module='histories';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request)
    {
        //
        // $patients = Patients::all();
        $module = $this->module;
        $view = 'L';
        $columns=['Documento','Paciente','Proxima Cita','Programa Actual','Acompañante','Teléfono','Estado'];
        
        $searchbox = trim($request->get('searchbox'));
        $patients = DB::table('patients')
                        ->select('id','dni','name','created_at','age','lastname','phone','z_xOne')
                        ->where( 'name','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'lastname','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'dni','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'age','LIKE','%'.$searchbox.'%')
                        ->orderBy( 'dni','asc')
                        ->paginate(18);      

        return view('Medichalhistory.histories_l',compact('patients','searchbox','columns','module','view'));



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
        $patients = DB::table('patients')
                        ->select('id','created_at','z_xOne')
                        ->orderBy( 'created_at')
                        ->paginate(18);      
        $columns=['Fecha','Especialidad'];
        return view('Medichalhistory.histories_c',compact('module','view','typeDocs','patients','columns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorehistoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorehistoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function show(histories $histories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function edit(histories $histories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatehistoriesRequest  $request
     * @param  \App\Models\histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatehistoriesRequest $request, histories $histories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\histories  $histories
     * @return \Illuminate\Http\Response
     */
    public function destroy(histories $histories)
    {
        //
    }
}
