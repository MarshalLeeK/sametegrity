<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreValidation;
use App\Models\Curso;
use App\Models\Supplier;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Exception;

class Uno extends Controller
{
  // public function index (){

  //    $users='Elias';
  //    return view ('uno',[
  //       'users' => $users
  //   ]);
  // }

  public function index (){
    //$cursos=Curso::all();
    $cursos=Curso::OrderBy('id','desc')->paginate();

    //return view('uno',compact('cursos'));
    return view ('uno',[
       'cursos' => $cursos]);

 }

  public function crear (){
      return view('pages.crear');
  }

  public function store (StoreValidation $request){
    //return $request->all();

    // $request->validate([
    //   'name'=>'required|min:3',
    //   'descripcion'=>'required',
    //   'categoria'=>'required'

    // ]);



    $curso=new Curso();

     $curso->name=$request->name;
     $curso->descripcion=$request->descripcion;
     $curso->categoria=$request->categoria;
     $curso->save();
      return redirect()->route('cursos.show',$curso);
}
 

  public function show (Curso $curso){   
    return view('pages.show',compact('curso'));
  }

  // public function edit($id){

  //   $curso= Curso::find(  );
  //   return $curso;
  // }

  public function edit(Curso $curso){
    return view('pages.edit',compact('curso')); 
  }

  // Se envian los datos del formulario los cuales estan contenidos en el request y se envia la informacion a actualizar en la variable curso

  public function update(Request $request,Curso $curso) {

    $request->validate([
      'name'=>'required|min:3',
      'descripcion'=>'required',
      'categoria'=>'required'

    ]);

    $curso->name=$request->name;
    $curso->descripcion=$request->descripcion;
    $curso->categoria=$request->categoria;
    $curso->save();
    return redirect()->route('cursos.show',$curso);
    
  }


    public function indexUpload (){

      return view('FileUpload.indexUpload');
    
  }

  public function SubirDatos (Request $request){
    //dd($request);
    try{

      DB::beginTransaction();
      $registro=new Supplier();
      $registro->name=$request->input('name');
      $registro->description=$request->input('description');
      $registro->published_by=$request->input('published_by');
      $registro->date=$request->input('date');
      $registro->route=$request->input('route');
      if($request->hasFile('pdf'))
      {
        $archivo=$request->file('pdf');
        $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
        $registro->file=$archivo->getClientOriginalName();


      }

      $registro->Talento_Humano = $request->has('opciones') && in_array('opcion1', $request->input('opciones'));
      $registro->administracion = $request->has('opciones') && in_array('opcion2', $request->input('opciones'));
      $registro->nomina = $request->has('opciones') && in_array('opcion3', $request->input('opciones'));
      $registro->psiquiatria = $request->has('opciones') && in_array('opcion4', $request->input('opciones'));
      $registro->gestion_humana = $request->has('opciones') && in_array('opcion5', $request->input('opciones'));
      $registro->medicos = $request->has('opciones') && in_array('opcion6', $request->input('opciones'));

      $registro->save();
      
      DB::commit();
      return view('FileUpload.indexUpload');

    }catch(Exception $e){
      DB::rollback();
    }
    
  }





}
