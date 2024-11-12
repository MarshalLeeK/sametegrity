<?php

namespace App\Http\Controllers;

use App\Http\Requests\CampusRequest;
use App\Http\Requests\HeadquarterRequest;
use App\Models\headquarter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeadquarterController extends Controller
{
    //
    private  $module = 'headquarters';

    public function index(Request $request){
        $view = 'headquarter_l';
        $columns = [ 'nit', 'Sede', 'Departamento', 'Ciudad', 'Barrio','Direccion','Fecha','Telefono','Correo'];
        $module = $this->module;
        $searchbox = trim($request->get('searchbox'));
        $headquarters = DB::table('headquarters')
            ->select('id','nit', 'campusName', 'department', 'city', 'neighborhood','addres','date','phoneHeadquarter','emailHeadquarter')
            ->where('campusName', 'LIKE', '%' . $searchbox . '%')
            ->orderBy('campusName')
            ->paginate(18);

        return view('headquarters.headquarter_l', compact('columns', 'searchbox', 'headquarters', 'module', 'view'));
        
    }

    public function create(Request $request){
        $module = $this->module;
        $view = 'headquarters_C';
        return view('headquarters.headquarters_C', compact( 'module', 'view'));
        
    }



    public function store(HeadquarterRequest $request)
    {
        $headquarter = new headquarter();
        $headquarter->nit = $request->input('nit');
        $headquarter->campusName = $request->input('campusName');
        $headquarter->department = $request->input('department');
        $headquarter->city = $request->input('city');
        $headquarter->neighborhood = $request->input('neighborhood');
        $headquarter->addres = $request->input('addres');
        $headquarter->date = $request->input('date');
        $headquarter->phoneHeadquarter = $request->input('phoneHeadquarter');
        $headquarter->emailHeadquarter = $request->input('emailHeadquarter');
        $headquarter->save();

        return $this->saveRecord($headquarter);
        
    }


    public function show(headquarter $campus){
        $module = $this->module;
        $view = '_';
        return view('headquarters.headquarter_', compact('campus', 'module', 'view'));
        
    }



    public function edit(headquarter $campus)
    {
        $module = $this->module;
        $view = 'M';
        return view('headquarters.headquarter_m', compact('campus', 'module', 'view'));
    }


    public function destroy($id)
    {
        //
        $group = headquarter::findOrFail($id);
        $group->delete();
        return redirect()->route($this->module);
    }


    public function update(HeadquarterRequest $request, $id)
    {
        //

        $campus = headquarter::findOrFail($id);
        $campus->nit = $request->input('nit');
        $campus->campusName = $request->input('campusName');
        $campus->department = $request->input('department');
        $campus->city = $request->input('city');
        $campus->neighborhood = $request->input('neighborhood');
        $campus->addres = $request->input('addres');
        $campus->date = $request->input('date');
        $campus->phoneHeadquarter = $request->input('phoneHeadquarter');
        $campus->emailHeadquarter = $request->input('emailHeadquarter');
        $campus->save();

        return $this->saveRecord($campus);
    }



    public function saveRecord()
    {
        return redirect()->route('headquarters');
    }
}
