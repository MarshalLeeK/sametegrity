<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use App\Models\TypeDocs;

use Illuminate\Http\Request;
use App\Http\Requests\PatientsRequest;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{

    private  $module = 'patient';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $module = $this->module;
        $view = 'L';
        $columns = ['Documento', 'Nombre', 'Apellidos', 'Edad', 'Género', 'Teléfono', 'Email'];

        $searchbox = trim($request->get('searchbox'));
        $patients = DB::table('patients')
            ->select('id', 'dni', 'name', 'lastname', 'age', 'gender', 'phone', 'email')
            ->where('name', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('lastname', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('dni', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('age', 'LIKE', '%' . $searchbox . '%')
            ->orderBy('dni', 'asc')
            ->paginate(18);
        return view('patients.Patiens_I', compact('patients', 'searchbox', 'columns', 'module', 'view'));
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
        $defaults = ['defCountry' => 'Colombia', 'defState' => 'Antioquia',];
        $typeDocs = TypeDocs::get();
        return view('patients.Patien_c', compact('defaults', 'typeDocs', 'module', 'view'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PatientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientsRequest $request)
    {

        $uuid = Str::uuid();
        $patient = new Patients;
        $patient->kp_uuid =  $uuid;
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
        $patient->civilstate = $request->input('civilstate');
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
        $patient->violence = $request->input('violence');
        $patient->abused = $request->input('abused');
        $patient->fromwork = $request->input('fromwork');
        $patient->guardianship = $request->input('guardianship');
        $patient->gaoler = $request->input('gaoler');
        $patient->icbf = $request->input('icbf');
        $patient->pregnant = $request->input('pregnant');
        $patient->suicide = $request->input('suicide');
        $patient->virtualadvice = $request->input('virtualadvice');
        $patient->hospitalitation = $request->input('hospitalitation');
        $patient->external = $request->input('external');
        $patient->cenpi = $request->input('cenpi');
        $patient->srpa = $request->input('srpa');
        $patient->activeselection = $request->input('activeselection');
        $patient->through = $request->input('through');
        $patient->pyramid = $request->input('pyramid');
        $patient->particular = $request->input('particular');
        $patient->z_xOne = $request->input('z_xOne');

        if ($request->hasFile('imageUpload')) {
            $photo = $request->file('imageUpload');
            $filename = Str::slug($request->input('name')) . Str::slug($request->input('lastname')) . "." . $photo->guessExtension();
            $path = public_path('img/patients/photos');
            $photo->move($path, $filename);
            $patient->photo = $filename;
        }

        $patient->save();



        //retonar vista
        return $this->saveRecord($patient);
        // return redirect()->route('patientModule');
        // Se debe crear campo para poliza $patient->policy = $request->input('policy');
        // Se debe crear campo para poliza $patient->membertype = $request->input('membertype');
        // Se debe crear campo para poliza $patient->membertype = $request->input('contributor');
        // Se debe crear campo para poliza $patient->membertype = $request->input('Ips');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function show(Patients $patient)
    {
        //cosulta a paciente [Metodo anterior]
        // $patient = Patients::findOrFail($id);
        //consulta tipos documento
        $typeDocs = TypeDocs::get();
        $module = $this->module;
        $view = '_';
        return view('patients.Patient_', compact('patient', 'typeDocs', 'module', 'view'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patients  $patients
     * @return \Illuminate\Http\Response
     */
    public function edit(Patients $patient)
    {
        //cosulta a paciente [Metodo anterior]
        // $patient = Patients::findOrFail($id);
        //consulta tipos documento
        $module = $this->module;
        $view = 'M';
        $typeDocs = TypeDocs::get();

        return view('patients.Patien_m', compact('patient', 'typeDocs', 'module', 'view'));
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
        $patient->civilstate = $request->input('civilstate');
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
        $patient->violence = $request->input('violence');
        $patient->abused = $request->input('abused');
        $patient->fromwork = $request->input('fromwork');
        $patient->guardianship = $request->input('guardianship');
        $patient->gaoler = $request->input('gaoler');
        $patient->icbf = $request->input('icbf');
        $patient->pregnant = $request->input('pregnant');
        $patient->suicide = $request->input('suicide');
        $patient->virtualadvice = $request->input('virtualadvice');
        $patient->hospitalitation = $request->input('hospitalitation');
        $patient->external = $request->input('external');
        $patient->cenpi = $request->input('cenpi');
        $patient->srpa = $request->input('srpa');
        $patient->activeselection = $request->input('activeselection');
        $patient->through = $request->input('through');
        $patient->pyramid = $request->input('pyramid');
        $patient->particular = $request->input('particular');
        $patient->z_xOne = $request->input('z_xOne');
        $patient->save();

        return $this->saveRecord($patient);

        // return redirect()->route('patientModule');

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
        $patients = Patients::findOrFail($id);
        $patients->delete();
        return redirect()->route($this->module);
    }

    public function saveRecord($patient)
    {
        return redirect()->route($this->module . 'Show', compact('patient'));
    }
}
