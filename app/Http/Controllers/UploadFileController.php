<?php

namespace App\Http\Controllers;

//use Dotenv\Validator;

use App\Http\Requests\UpdateFileRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Mockery\Matcher\Any;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Auth;

class UploadFileController extends Controller
{
    private  $module = 'files';
 

    public function getIndexUpload(){
        $module = $this->module;
        $view = 'Upload.indexUpload';
        return view('Upload.indexUpload',compact('module','view'));
        
    }

    public function postIndexUpload(Request $request){

        // SE CREA LA REGLA PARA ASEGURAR QUE SIEMPRE SE SUBA UN ARCHIVO, ADEMAS SE AGREGA LA VALIDACION PARA INDICAR EL TIPO DE ARCHIVO PERMITIDO

            $rules=['fileUpload'=>    'required|mimes:pdf,jpeg,png,gif'];
            $message=['fileUpload.required' => 'El archivo no es válido.',
            'fileUpload.mimes' => 'Solo se permiten archivos PDF, JPEG, PNG o GIF.',];

            $validator=Validator::make($request->all(),$rules,$message);
            //$validator = \Validator::make($request->all(), $rules, $message);

            if($validator->fails()):
               // return back('Upload/indexUpload')->withErrors($validator)->with('message','se ha producido un error.');
                return redirect('Upload/indexUpload')->withErrors($validator)->with('message', 'se ha producido un error.');
            else:
                $path=date('Y/m/d');
                //$original_name= $request->file('fileUpload')->getClientOriginalName();
                
                $final_name = Str::slug($request->file('fileUpload')->getClientOriginalName() . '_' . now()->format('YmdHis')) . '.' . trim($request->file('fileUpload')->getClientOriginalExtension());

                //$request->fileUpload->storeAs($path,$final_name,'uploads');
                if( $request->file('fileUpload')->storeAs($path, $final_name, 'uploads')):
                    return redirect('Upload/indexUpload')->with('message', 'Archivo subido exitosamente.');
                endif;
               // return  $final_name;
            endif;
    }

    //////////CONTROLADOR DE PRUEBA PARA CARGA DE ARCHIVOS PDF//////////////////////

      public function indexUpload (){

        $module = $this->module;
        $view = 'C';


          return view('FileUpload.indexUpload',compact('module','view'));
      
     }
    
     public function SubirDatos (Request $request){

          try{

            //Recuperamos la informacion de inicio de sesion almacenada en el array user_info creado en el metodoto auth del LoginController

            $userInfo = session('user_info');

            DB::beginTransaction();
            $registro=new Supplier();
            $registro->name=$request->input('name');
            $registro->description=$request->input('description');
            // $registro->published_by=$request->input('published_by');
            $registro->published_by=$userInfo['slug'];
            $registro->date=$request->input('date');
            // $registro->route=$request->input('route');
            $registro->Talento_Humano = $request->has('opciones') && in_array('opcion1', $request->input('opciones'));
            $registro->administracion = $request->has('opciones') && in_array('opcion2', $request->input('opciones'));
            $registro->nomina = $request->has('opciones') && in_array('opcion3', $request->input('opciones'));
            $registro->psiquiatria = $request->has('opciones') && in_array('opcion4', $request->input('opciones'));
            $registro->sistemas = $request->has('opciones') && in_array('opcion5', $request->input('opciones'));
            $registro->medicos = $request->has('opciones') && in_array('opcion6', $request->input('opciones'));
      
            if($request->hasFile('pdf'))
            {
              // Se crea la variable que almacenara el nombre acorde a los checkbox, esto con el fin de identificar a que areas se asigno el archivo subido
              $nombreAdicional = '';
      
              $opciones = $request->input('opciones');
      
              // Verifica cada opción y concatena al nombre adicional
              if (in_array('opcion1', $opciones)) {
                  $nombreAdicional .= 'talento_humano_';
              }
              if (in_array('opcion2', $opciones)) {
                  $nombreAdicional .= 'administracion_';
              }
              if (in_array('opcion3', $opciones)) {
                  $nombreAdicional .= 'nomina_';
              }
              if (in_array('opcion4', $opciones)) {
                $nombreAdicional .= 'psiquiatria_';
              }
              if (in_array('opcion5', $opciones)) {
              $nombreAdicional .= 'sistemas_';
              }
              if (in_array('opcion6', $opciones)) {
              $nombreAdicional .= 'medicos_';
              }
      
              $archivo=$request->file('pdf');
              $nombreArchivo = $archivo->getClientOriginalName();
      
                // Concatena la parte adicional con el nombre original junto a su respectiva extension
                $nuevoNombre = $nombreAdicional . $nombreArchivo ;
      
              
      
              // $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
              $archivo->move(public_path().'/Archivos/',$nuevoNombre);
              $registro->route = '/Archivos/' . $nuevoNombre;
              // $registro->file=$archivo->getClientOriginalName();
              $registro->file = $nuevoNombre;
      
      
            }
      
          
      
            $registro->save();
            
            DB::commit();
            $query=DB::table('suppliers')->get();
            return view('FileUpload.listUploads',['datos'=>$query]);
      
          }catch(Exception $e){
            DB::rollback();
          }

      
     }



      //SE CREA LA FUNCION CREATE LA CUAL SERA LA ENCARGADA DE TRAER LA VISTA UPLOADFILEINDEX

      public function create (Request $request){

            try{
      
              //Recuperamos la informacion de inicio de sesion almacenada en el array user_info creado en el metodoto auth del LoginController
      
              $userInfo = session('user_info');
      
              DB::beginTransaction();
              $registro=new Supplier();
              $registro->name=$request->input('name');
              $registro->description=$request->input('description');
              $registro->published_by=$userInfo['slug'];
              $registro->date=$request->input('date'); 
              $registro->talento_Humano = $request->has('opciones') && in_array('opcion1', $request->input('opciones'));
              $registro->administracion = $request->has('opciones') && in_array('opcion2', $request->input('opciones'));
              $registro->nomina = $request->has('opciones') && in_array('opcion3', $request->input('opciones'));
              $registro->psiquiatria = $request->has('opciones') && in_array('opcion4', $request->input('opciones'));
              $registro->sistemas = $request->has('opciones') && in_array('opcion5', $request->input('opciones'));
              $registro->medicos = $request->has('opciones') && in_array('opcion6', $request->input('opciones'));

              // Asignar false a los nuevos campos por defecto
            $registro->macroMisional = false;
            $registro->macroApoyo = false;
            $registro->macroEstrategico = false;
            $registro->macroEvaluacion = false;

            //Validacion requerida para el archivo 
        
              if($request->hasFile('pdf'))
              {
                // Se crea la variable que almacenara el nombre acorde a los checkbox, esto con el fin de identificar a que areas se asigno el archivo subido
                $nombreAdicional = '';
        
                $opciones = $request->input('opciones');
        
                // Verifica cada opción y concatena al nombre adicional
                if (in_array('opcion1', $opciones)) {
                    $nombreAdicional .= 'talento_humano_';
                }
                if (in_array('opcion2', $opciones)) {
                    $nombreAdicional .= 'administracion_';
                }
                if (in_array('opcion3', $opciones)) {
                    $nombreAdicional .= 'nomina_';
                }
                if (in_array('opcion4', $opciones)) {
                  $nombreAdicional .= 'psiquiatria_';
                }
                if (in_array('opcion5', $opciones)) {
                $nombreAdicional .= 'sistemas_';
                }
                if (in_array('opcion6', $opciones)) {
                $nombreAdicional .= 'medicos_';
                }
        
                $archivo=$request->file('pdf');
                $nombreArchivo = $archivo->getClientOriginalName();
        
                  // Concatena la parte adicional con el nombre original junto a su respectiva extension
                  $nuevoNombre = $nombreAdicional . $nombreArchivo ;
        
                
        
                
                // $archivo->move(public_path().'/Archivos/',$archivo->getClientOriginalName());
                $archivo->move(public_path().'/Archivos/',$nuevoNombre);
                $registro->route = '/Archivos/' . $nuevoNombre;
                // $registro->file=$archivo->getClientOriginalName();
                $registro->file = $nuevoNombre;
        
    
          }
    
         
          
    
              $registro->save();
              
              DB::commit();
              // $query=DB::table('suppliers')->get();
              // return view('filesCreate',['datos'=>$query]);

              // Flash message success
            session()->flash('message', 'El registro se guardó correctamente.');
            session()->flash('message-type', 'success');
              return redirect()->route('files');

        
            }catch(Exception $e){
              DB::rollback();
            }
        
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


              // Obtenemos los datos de inicio de sesion del usuario
          $userInfo = session('user_info');

          // // Inicializamos la variable para almacenar la condición WHERE adicional,variable usada para la busqueda
          // $whereClause = [];

          // // Verificamos el valor de privilegeSet y agregamos la condición correspondiente
          // if ($userInfo['privilegeSet'] == 22) {
          //     // Si el usuario tiene privilegios de sistemas, agrega la condición sistemas=1
          //     $whereClause[] = ['sistemas', '=', 1];
          // } elseif ($userInfo['privilegeSet'] == 0) {
          //     // Si el usuario tiene privilegio de talento humano, agrega la condición talento_humano=1
          //     $whereClause[] = ['talento_humano', '=', 1];
          // } elseif ($userInfo['privilegeSet'] == 1) {
          //     // Si el usuario tiene privilegio de nomina, agrega la condición nomina=1
          //     $whereClause[] = ['administracion', '=', 1];
          // }

        

          $module = $this->module;
          $view = 'L';
          $columns = ['Name', 'Description', 'File', 'Published_by', 'Date'];

          //Obtiene el valor del campo nombre para realizar las busquedas avanzadas
          $searchbox = trim($request->get('searchbox'));


          // Obtenemos el valor del filtro de categoría
          $categorieFormats = $request->has('categorieFormats');
          $categorieGuides=$request->has('categorieGuides');
          $categorieInstructions=$request->has('categorieInstructions');
          $categorieManuals=$request->has('categorieManuals');
          $categoriePlans=$request->has('categoriePlans');
          $categoriePolicies=$request->has('categoriePolicies');
          $categorieProcedures=$request->has('categorieProcedures');
          $categorieProcesses=$request->has('categorieProcesses');
          $categorieRegulations=$request->has('categorieRegulations');


          // Iniciamos la consulta
          $uploadFiles = DB::table('suppliers')
              ->select('id', 'name', 'description', 'file', 'published_by', 'date');
              // ->where('name', 'LIKE', '%' . $searchbox . '%');

              // ->where($whereClause) // Aplica la condición adicional
              // ->orderBy('date', 'desc')
              // ->paginate(18);

              // Aplicamos filtro por búsqueda si hay un valor en el cuadro de búsqueda
          if (!empty($searchbox)) {
            $uploadFiles->where('name', 'LIKE', '%' . $searchbox . '%');
        }

        // Si se presionó el botón de  filtramos por "Formatos" con valor 1
        if ($categorieFormats) {
            $uploadFiles->where('Formato', '=', 1); //Validamos que la columna este asignada a esta categoria
        }

        // Si se presionó el botón de  filtramos por "Guias" con valor 1
        if ($categorieGuides) {
          $uploadFiles->where('Guia', '=', 1);
        }

          // Si se presionó el botón de filtramos por "Instructivos" con valor 1
        if ($categorieInstructions) {
          $uploadFiles->where('Instructivo', '=', 1); 
        }

          // Si se presionó el botón de  filtramos por "Manuales" con valor 1
        if ($categorieManuals) {
          $uploadFiles->where('Manual', '=', 1); 
        }

        // Si se presionó el botón de  filtramos por "Planes" con valor 1
        if ($categoriePlans) {
          $uploadFiles->where('Plan', '=', 1); 
        }

        // Si se presionó el botón de  filtramos por "Politicas" con valor 1
        if ($categoriePolicies) {
          $uploadFiles->where('Politica', '=', 1); 
        }
        // Si se presionó el botón de  filtramos por "Procedimientos" con valor 1
        if ($categorieProcedures) {
          $uploadFiles->where('Procedimiento', '=', 1); 
        }

        // Si se presionó el botón de  filtramos por "Procesos" con valor 1
        if ($categorieProcesses) {
          $uploadFiles->where('Proceso', '=', 1); 
        }

        // Si se presionó el botón de  filtramos por "Reglamentos" con valor 1
        if ($categorieRegulations) {
          $uploadFiles->where('Reglamento', '=', 1); 
        }

        // Si no hay ni búsqueda ni filtro de categoría, cargamos todos los registros
        $uploadFiles = $uploadFiles->orderBy('date', 'desc')->paginate(18);


          return view('FileUpload.uploads_l', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view'));

    }



   public function show(Supplier $file)
   {
       $module = $this->module;
       $view = '_';
       return view('FileUpload.uploads_', compact('file', 'module', 'view'));
   }

   
   public function edit(Supplier $file)
   {
       $module = $this->module;
       $view = 'M';
       return view('FileUpload.uploads_m', compact('file', 'module', 'view'));
   }

   public function update(UpdateFileRequest $request, $id)
    {

      try{

      $userInfo = session('user_info');
        $file = Supplier::findOrFail($id);

          // Almacenar los valores originales
          $originalRoute = $file->route;
          $originalFile = $file->file;


        $file->name = $request->input('name');
        $file->description=$request->input('description');
        $file->published_by=$userInfo['slug'];
        $file->date=$request->input('date');
        $file->talento_Humano = $request->has('opciones') && in_array('opcion1', $request->input('opciones'));
        $file->administracion = $request->has('opciones') && in_array('opcion2', $request->input('opciones'));
        $file->nomina = $request->has('opciones') && in_array('opcion3', $request->input('opciones'));
        $file->psiquiatria = $request->has('opciones') && in_array('opcion4', $request->input('opciones'));
        $file->sistemas = $request->has('opciones') && in_array('opcion5', $request->input('opciones'));
        $file->medicos = $request->has('opciones') && in_array('opcion6', $request->input('opciones'));
    
          if($request->hasFile('pdf'))
          {
            // Se crea la variable que almacenara el nombre acorde a los checkbox, esto con el fin de identificar a que areas se asigno el archivo subido
            $nombreAdicional = '';
    
            $opciones = $request->input('opciones');
    
            // Verifica cada opción y concatena al nombre adicional
            if (in_array('opcion1', $opciones)) {
                $nombreAdicional .= 'talento_humano_';
            }
            if (in_array('opcion2', $opciones)) {
                $nombreAdicional .= 'administracion_';
            }
            if (in_array('opcion3', $opciones)) {
                $nombreAdicional .= 'nomina_';
            }
            if (in_array('opcion4', $opciones)) {
              $nombreAdicional .= 'psiquiatria_';
            }
            if (in_array('opcion5', $opciones)) {
            $nombreAdicional .= 'sistemas_';
            }
            if (in_array('opcion6', $opciones)) {
            $nombreAdicional .= 'medicos_';
            }
    
            $archivo=$request->file('pdf');
            $nombreArchivo = $archivo->getClientOriginalName();
    
              // Concatena la parte adicional con el nombre original junto a su respectiva extension
            $nuevoNombre = $nombreAdicional . $nombreArchivo ;
            $archivo->move(public_path().'/Archivos/',$nuevoNombre);
            $file->route = '/Archivos/' . $nuevoNombre;
            $file->file = $nuevoNombre;
    
          }
        $file->save();
        //$this->eliminarArchivo($originalRoute);
        return $this->saveRecord($file);
        // return redirect()->route('accountModule');

        DB::commit();
        return redirect()->route('files');

      }catch(Exception $e){
        DB::rollback();
      }


    }


    // SE CREA LA FUNCION ENCARGADA DE BUSCAR EL ARCHIVO ANTIGUO Y ELIMINARLO, ESTA FUNCION SE USA CUANDO SE ACTUALIZAN DATOS Y EN EL PROCESO DE ELIMINAR UN REGISTRO
    
    public function eliminarArchivo($rutaDelArchivo)
    {
        // Verificar si el archivo existe antes de intentar eliminarlo
        if (Storage::exists($rutaDelArchivo)) {
            // Eliminar el archivo
            Storage::delete($rutaDelArchivo);
            return "Archivo eliminado exitosamente";
        }
    
        return "El archivo no existe en la ruta especificada";
    }






    ///////////////////////CREAMOS UNA FUNCION QUE VALIDA LOS PERMISOS Y LOS FILTROS DE BUSQUEDA AVANZADA/////////////////////////////////////


    // private function applyFilters(Request $request)
    // {
    //     $searchbox = trim($request->get('searchbox'));
    //     $uploadFiles = DB::table('suppliers')
    //         ->select('id', 'name', 'description', 'file', 'published_by', 'date');

    //     // Aplicar los filtros de categoría
    //     $filters = [
    //         'categorieFormats' => 'Formato',
    //         'categorieGuides' => 'Guia',
    //         'categorieInstructions' => 'Instructivo',
    //         'categorieManuals' => 'Manual',
    //         'categoriePlans' => 'Plan',
    //         'categoriePolicies' => 'Politica',
    //         'categorieProcedures' => 'Procedimiento',
    //         'categorieProcesses' => 'Proceso',
    //         'categorieRegulations' => 'Reglamento',
    //     ];

    //     foreach ($filters as $filter => $column) {
    //         if ($request->has($filter)) {
    //             $uploadFiles->where($column, '=', 1);
    //         }
    //     }

    //     // Filtrar por búsqueda
    //     if (!empty($searchbox)) {
    //         $uploadFiles->where('name', 'LIKE', '%' . $searchbox . '%');
    //     }

    //     return $uploadFiles->orderBy('date', 'desc')->paginate(18);
    // }

    private function applyFilters(Request $request)
{
    $searchbox = trim($request->get('searchbox'));
    $uploadFiles = DB::table('suppliers')
        ->select('id', 'name', 'description', 'file', 'published_by', 'date');

    // Obtienemos la información del usuario de la sesión
    $userInfo = session('user_info');

    // Inicializamos la variable para almacenar la condición WHERE que es nuestra variable adicional
    $whereClause = [];

    // Verificamos el valor de privilegeSet y agregamos la condición correspondiente
    if ($userInfo['privilegeSet'] == 22) {
        $whereClause[] = ['sistemas', '=', 1];
    } elseif ($userInfo['privilegeSet'] == 0) {
        $whereClause[] = ['talento_humano', '=', 1];
    } elseif ($userInfo['privilegeSet'] == 1) {
        $whereClause[] = ['administracion', '=', 1];
    }

    // Aplicamos la condición adicional de permisos
    $uploadFiles->where($whereClause);

    // Aplicar los filtros de categoría
    $filters = [
        'categorieFormats' => 'Formato',
        'categorieGuides' => 'Guia',
        'categorieInstructions' => 'Instructivo',
        'categorieManuals' => 'Manual',
        'categoriePlans' => 'Plan',
        'categoriePolicies' => 'Politica',
        'categorieProcedures' => 'Procedimiento',
        'categorieProcesses' => 'Proceso',
        'categorieRegulations' => 'Reglamento',
    ];

    foreach ($filters as $filter => $column) {
        if ($request->has($filter)) {
            $uploadFiles->where($column, '=', 1);
        }
    }

    // Filtrar por búsqueda
    if (!empty($searchbox)) {
        $uploadFiles->where('name', 'LIKE', '%' . $searchbox . '%');
    }

    return $uploadFiles->orderBy('date', 'desc')->paginate(18);
}


    ///////////////////////FIN DE LA FUNCION QUE VALIDA LOS PERMISOS Y LOS FILTROS DE BUSQUEDA AVANZADA/////////////////////////////////////



    // SE CREAN LAS VISTAS PARA LOS DIVERSOS ARCHIVOS DIVIDIDOS EN LOS MACROPROCESOS

    ////////////////////////////////////////////MACROPROCESOS MISIONALES//////////////////////////////////////////////////////

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listmissionarymacroprocess(Request $request)
    {
        // Obtenemos la información del usuario de la sesión
        $userInfo = session('user_info');

        $moduleView = 'filesMissionaryMacro';
        $module = $this->module;
        $view = 'L';
        $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

        // Obtenemos el valor del campo de busqueda
        $searchbox = trim($request->get('searchbox'));

        $uploadFiles = $this->applyFilters($request);
        return view('FileUpload.uploads_mpm', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));
   
    }


    //MACROPROCESOS ESTRATEGICOS

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function liststrategicmacroprocess(Request $request)
    {

      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesStrategicMacro';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);
      return view('FileUpload.uploads_mpe', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));


    }

    /////////////////////////////////////MACROPROCESOS DE APOYO///////////////////////////////////////////////////

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listsupportmacroprocess(Request $request)
    {

         // Obtenemos la información del usuario de la sesión
         $userInfo = session('user_info');

         $moduleView = 'filesSupportMacro';
         $module = $this->module;
         $view = 'L';
         $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];
   
         // Obtenemos el valor del campo de busqueda
         $searchbox = trim($request->get('searchbox'));
   
         $uploadFiles = $this->applyFilters($request);
         return view('FileUpload.uploads_mpa', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));

    }

    ///////////////////////////////////////////MACROPROCESOS DE EVALUACION////////////////////////////////////////////////////////////////////////////

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listassessmentmacroprocess(Request $request)
    {
         // Obtenemos la información del usuario de la sesión
         $userInfo = session('user_info');

         $moduleView = 'filesAssessmentMacro';
         $module = $this->module;
         $view = 'L';
         $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];
   
         // Obtenemos el valor del campo de busqueda
         $searchbox = trim($request->get('searchbox'));
   
         $uploadFiles = $this->applyFilters($request);

          return view('FileUpload.uploads_mpv', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));

    }


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listuploadsdetails(Request $request)
    {
       // Obtenemos la información del usuario de la sesión
       $userInfo = session('user_info');

       $moduleView = 'filesDetails';
       $module = $this->module;
       $view = 'L';
       $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];
 
       // Obtenemos el valor del campo de busqueda
       $searchbox = trim($request->get('searchbox'));
 
       $uploadFiles = $this->applyFilters($request);

       return view('FileUpload.uploads_l_mpm', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));

    }



    public function listexternalconsultation(Request $request)
    {
      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesConsultationExternal';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);

      return view('FileUpload.uploads_mpmcx', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));


    }


    public function listhospitalization(Request $request)
  {
      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesHospitalization';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);

      return view('FileUpload.uploads_mpmh', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));
  }



    public function listcad(Request $request)
    {
      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesCad';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);

      return view('FileUpload.uploads_mpmcad', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));

    }


    public function listpharmaceuticalservice(Request $request)
    {
      
      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesPharmaceutical';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);

      return view('FileUpload.uploads_mpmsf', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));
      
    }

    

    public function listgfinanciera(Request $request)
    {
      
      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesSupportFinanciera';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);

      return view('FileUpload.uploads_mpaGF', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));
      
    }


    public function listinfraestructura(Request $request)
    {
      
      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesSupportInfraestructura';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);

      return view('FileUpload.uploads_mpaGID', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));
      
    }

    public function listtalento(Request $request)
    {
      
      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesSupportTalento';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);

      return view('FileUpload.uploads_mpaTH', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));
      
    }


    public function listcompras(Request $request)
    {
      
      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesSupportCompras';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);

      return view('FileUpload.uploads_mpaGC', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));
      
    }

    public function listinformacion(Request $request)
    {
      
      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesSupportInformacion';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);

      return view('FileUpload.uploads_mpaSI', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));
      
    }


    public function listdocumental(Request $request)
    {
      
      // Obtenemos la información del usuario de la sesión
      $userInfo = session('user_info');

      $moduleView = 'filesSupportDocumental';
      $module = $this->module;
      $view = 'L';
      $columns = ['Nombre', 'Descripcion', 'Ruta', 'Publicado por', 'Fecha'];

      // Obtenemos el valor del campo de busqueda
      $searchbox = trim($request->get('searchbox'));

      $uploadFiles = $this->applyFilters($request);

      return view('FileUpload.uploads_mpaGD', compact('uploadFiles', 'searchbox', 'columns', 'module', 'view','moduleView'));
      
    }


}
