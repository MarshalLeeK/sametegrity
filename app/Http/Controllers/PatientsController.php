<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiController;
use App\Models\Patients;
use App\Models\TypeDocs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {   

        $searchbox = trim($request->get('searchbox'));

        $patients = DB::table('patients')
                        ->select('id','dni','name','lastname','age','gender','phone','email')
                        ->where( 'name','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'lastname','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'dni','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'age','LIKE','%'.$searchbox.'%')
                        ->orderBy( 'dni','asc')
                        ->paginate(18);      
        return view('patients.Patiens_I',['patients'=>$patients]);





        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        $defaults = ['defCountry' => 'Colombia','defState' => 'Antioquia',];
        $typeDocs = TypeDocs::get();

        return view('patients.Patien_c',['defaults'=>$defaults],['typeDocs'=>$typeDocs]);

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
        $uuid = Str::uuid();
        //Crear usuario
        $patient = new Patients;
        $patient->kp_uuid =  $uuid ;
        $patient->documenttype = $request->input('tdoc');
        $patient->dni = $request->input('dni');
        $patient->name = $request->input('name');
        $patient->lastname = $request->input('lastname');
        $patient->borndate = $request->input('borndate');
        $patient->age = $request->input('age');
        $patient->gender = $request->input('gender');
        $patient->phone = $request->input('phone');
        $patient->email = $request->input('email');
        $patient->save();

        //retonar vista
        return redirect()->route('patientModule')->with('successs','Registro guardado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patients $patients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(Patients $patients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patients $patients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $patients= Patients::findOrFail($id);
        $patients->delete();
        return redirect()->route('patientModule');
    }

    // public function test(){
    //     return dd('hola desde test');
    // }


}
