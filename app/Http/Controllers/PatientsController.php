<?php

namespace App\Http\Controllers;
use App\Models\Patients;
use App\Models\TypeDocs;
use App\View\Components\locationsApi;
use Illuminate\Http\Request;
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

        $columns=['Documento','Nombre','Apellidos','Edad','Género','Teléfono','Email'];
        
        $searchbox = trim($request->get('searchbox'));
        $patients = DB::table('patients')
                        ->select('id','dni','name','lastname','age','gender','phone','email')
                        ->where( 'name','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'lastname','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'dni','LIKE','%'.$searchbox.'%')
                        ->orWhere( 'age','LIKE','%'.$searchbox.'%')
                        ->orderBy( 'dni','asc')
                        ->paginate(18);      
        return view('patients.Patiens_I',compact('patients','searchbox','columns'));
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
        return view('patients.Patien_c', compact('defaults','typeDocs'));
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

        //Crear pacientes
        $uuid = Str::uuid();

        $patient = new Patients;
        $patient->kp_uuid =  $uuid ;
        $patient->documenttype = $request->input('tdoc');
        $patient->dni = $request->input('dni');
        $patient->documentplace = $request->input('documentplace');
        $patient->name = $request->input('name');
        $patient->lastname = $request->input('lastname');
        $patient->borndate = $request->input('borndate');
        $patient->fkborncountry = $request->input('borncountry');
        $patient->fkbornstate = $request->input('bornstate');
        $patient->fkborncity = $request->input('borncity');
        $patient->age = $request->input('age');
        $patient->gender = $request->input('gender');
        $patient->phone = $request->input('phone');
        $patient->email = $request->input('mail');
        $patient->academiclevel = $request->input('academiclevel');
        $patient->fklivecountry = $request->input('livecontry');
        $patient->fklivestate = $request->input('livestate');
        $patient->fklivecity = $request->input('livecity');
        $patient->civilsate = $request->input('civilsate');
        $patient->job = $request->input('job');
        $patient->address = $request->input('address');
        $patient->cellphone = $request->input('cellphone');
        $patient->emailfa = $request->input('maileb');
        $patient->capitado = $request->input('capitado');
        $patient->fkeps = $request->input('eps');
        $patient->epstype = $request->input('epstype');
        $patient->contract = $request->input('contract');
        $patient->epslevel = $request->input('epslevel');
        $patient->legaldni = $request->input('legaldni');
        $patient->legaldocumenttype = $request->input('legaldocumenttype');
        $patient->legalname = $request->input('legalname');
        $patient->kindred = $request->input('kindred');
        $patient->legalphone = $request->input('legalphone');
        $patient->legaladress = $request->input('legaladress');
        $patient->observation = $request->input('observation');
        
        if ( $request->hasFile('imageUpload') ){
            $photo = $request->file('imageUpload');
            $filename = Str::slug( $request->input('name')) . Str::slug ($request->input('lastname') ) .".". $photo->guessExtension();
            $path = public_path('img/patients/photos');
            $photo->move($path,$filename);
            $patient->photo = $filename;
        }

        $patient->save();

        // Se debe crear campo para poliza $patient->policy = $request->input('policy');
        // Se debe crear campo para poliza $patient->membertype = $request->input('membertype');
        // Se debe crear campo para poliza $patient->membertype = $request->input('contributor');
        // Se debe crear campo para poliza $patient->membertype = $request->input('Ips');

        //retonar vista
        return redirect()->route('patientModule');
    
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
    public function edit($id)
    {
        //cosulta a pacientes
        $patient = Patients::findOrFail($id);
        //consulta tipos documento
        $typeDocs = TypeDocs::get();

        return view('patients.Patien_m',compact('patient','typeDocs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $patient = Patients::findOrFail($id);
        $patient->documenttype = $request->input('tdoc');
        $patient->dni = $request->input('dni');
        $patient->documentplace = $request->input('documentplace');
        $patient->name = $request->input('name');
        $patient->lastname = $request->input('lastname');
        $patient->borndate = $request->input('borndate');
        $patient->fkborncountry = $request->input('borncountry');
        $patient->fkbornstate = $request->input('bornstate');
        $patient->fkborncity = $request->input('borncity');
        $patient->age = $request->input('age');
        $patient->gender = $request->input('gender');
        $patient->phone = $request->input('phone');
        $patient->email = $request->input('mail');
        $patient->academiclevel = $request->input('academiclevel');
        $patient->fklivecountry = $request->input('livecontry');
        $patient->fklivestate = $request->input('livestate');
        $patient->fklivecity = $request->input('livecity');
        $patient->civilsate = $request->input('civilsate');
        $patient->job = $request->input('job');
        $patient->address = $request->input('address');
        $patient->cellphone = $request->input('cellphone');
        $patient->emailfa = $request->input('maileb');
        $patient->capitado = $request->input('capitado');
        $patient->fkeps = $request->input('eps');
        $patient->epstype = $request->input('epstype');
        $patient->contract = $request->input('contract');
        $patient->epslevel = $request->input('epslevel');
        $patient->legaldni = $request->input('legaldni');
        $patient->legaldocumenttype = $request->input('legaldocumenttype');
        $patient->legalname = $request->input('legalname');
        $patient->kindred = $request->input('kindred');
        $patient->legalphone = $request->input('legalphone');
        $patient->legaladress = $request->input('legaladress');
        $patient->observation = $request->input('observation');
        $patient->save();

        return redirect()->route('patientModule');

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
