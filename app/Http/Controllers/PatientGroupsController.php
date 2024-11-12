<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientGroupRequest;
use App\Models\PatientGroups;
use Illuminate\Http\Request;



use App\Models\TypeDocs;
use App\Models\gender;


use App\Http\Requests\PatientsRequest;
use App\Models\Group;
use App\Models\headquarter;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PatientGroupsController extends Controller
{

    private  $module = 'patientgroups';

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $module = $this->module;
        $view = 'patientgroups_l';
        $columns = ['Tipo','Documento','Fecha', 'Nombres', 'Apellidos', 'Eps', 'Visitante', 'Teléfono', 'Email','Grupo'];

        $searchbox = trim($request->get('searchbox'));
        $patientgroups = DB::table('patient_groups')
            ->select('id','typeDoc', 'dni','borndate', 'name', 'lastname', 'eps', 'visitorType', 'phone', 'email','group')
            ->where('name', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('lastname', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('dni', 'LIKE', '%' . $searchbox . '%')
            ->orWhere('visitorType', 'LIKE', '%' . $searchbox . '%')
            ->orderBy('dni', 'asc')
            ->paginate(18);

        return view('groupspatients.patientgroups_l', compact('patientgroups', 'searchbox', 'columns', 'module', 'view'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $module = $this->module;
        $view = 'C';
        $typeDocs = TypeDocs::get();
        // $groups=Group::get();
        $groups = Group::whereDate('date', Carbon::today())->get();
        return view('groupspatients.patientgroups_c', compact('groups','typeDocs', 'module', 'view'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientGroupRequest $request)
    {

        // $uuid = Str::uuid();
        $patientgroups = new PatientGroups();
        // $patient->kp_uuid =  $uuid;
        $patientgroups->typeDoc = $request->input('tdoc');
        $patientgroups->dni = $request->input('dni');
        $patientgroups->borndate = $request->input('borndate');
        $patientgroups->name = $request->input('name');
        $patientgroups->lastname = $request->input('lastname');
        $patientgroups->eps = $request->input('eps');
        $patientgroups->visitorType = $request->input('visitorType');
        $patientgroups->phone = $request->input('phone');
        $patientgroups->email = $request->input('email');
        $patientgroups->group = $request->input('group');
       


      

        $patientgroups->save();



        return $this->saveRecord($patientgroups);
        
      
    }

    /**
     * Display the specified resource.
     */
    public function show(PatientGroups $register)
    {

        $module = $this->module;
        $view = '_';
        return view('groupspatients.patientgroup_', compact('campus', 'module', 'view'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PatientGroups $register)
    {
        $module = $this->module;
        $view = 'M';
        return view('groupspatients.patientgroup_m', compact('campus', 'module', 'view'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PatientGroups $patientGroups)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $group = PatientGroups::findOrFail($id);
        $group->delete();
        return redirect()->route($this->module);
    }

    public function saveRecord()
    {
        return redirect()->route('patientgroups');
    }
}
