<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupsRequest;
use App\Models\Group;
use App\Models\headquarter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupController extends Controller
{

    private  $module = 'groups';
       
    public function index(Request $request){
        $view = 'group_l';
        $columns = [ 'Cedula', 'Medico', 'Grupo', 'Grupo Ambulatorio', 'Sede','Auditorio','Fecha','Hora'];
        $module = $this->module;
        $searchbox = trim($request->get('searchbox'));
        $groups = DB::table('groups')
            ->select('id','idProfessional', 'nameProfessional', 'outcome', 'outpatientGroup', 'campus','lounge','date','time')
            ->where('outcome', 'LIKE', '%' . $searchbox . '%')
            ->orderBy('outcome')
            ->paginate(18);

        return view('groups.group_l', compact('columns', 'searchbox', 'groups', 'module', 'view'));
        
    }


    public function create(Request $request){
        $module = $this->module;
        $view = 'groups_C';
        $headquarters= headquarter::get();
        return view('groups.groups_C', compact( 'headquarters','module', 'view'));
        
    }


    public function store(GroupsRequest $request)
    {
        $group = new Group();
        $group->idProfessional = $request->input('idProfessional');
        $group->nameProfessional = $request->input('nameProfessional');
        $group->outcome = $request->input('outcome');
        $group->outpatientGroup = $request->input('outpatientGroup');
        $group->campus = $request->input('campus');
        $group->lounge = $request->input('lounge');
        $group->date = $request->input('date');
        $group->time = $request->input('time');
        $group->description = $request->input('description');
        $group->save();

        return $this->saveRecord($group);
        
    }



    public function show(Group $group){
        $module = $this->module;
        $view = '_';
        return view('groups.group_', compact('group', 'module', 'view'));
        
    }

    public function edit(Group $group)
    {
        $module = $this->module;
        $view = 'M';
        return view('groups.group_m', compact('group', 'module', 'view'));
    }

    public function update(Request $request, $id)
    {
        //

        $group = Group::findOrFail($id);
        $group->idProfessional = $request->input('idProfessional');
        $group->nameProfessional = $request->input('nameProfessional');
        $group->outcome = $request->input('outcome');
        $group->outpatientGroup = $request->input('outpatientGroup');
        $group->campus = $request->input('campus');
        $group->lounge = $request->input('lounge');
        $group->date = $request->input('date');
        $group->time = $request->input('time');
        $group->description = $request->input('description');
        $group->save();

        return $this->saveRecord($group);
    }



    public function destroy($id)
    {
        //
        $group = Group::findOrFail($id);
        $group->delete();
        return redirect()->route($this->module);
    }






    public function saveRecord()
    {
        return redirect()->route('groups');
    }
}
