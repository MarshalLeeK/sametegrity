<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function index(Request $request)
    {

        $categoria = $request->id;
        return json_encode($categoria);
        // dd($request->data);
        // // echo $data;
        // // $msg = $data->id;
        // // return response()->json($data);
        // // return response()->json(array('msg' => $msg), 200);
    }

    public function AccionHeyner(Request $request)
    {
        // dd($request->data);
        $loquequierodevolver = "";
        try {

            $loquequierodevolver = $request->id;

            // dd($loquenecesito);
            $mensaje = ['Titulo' => 'Éxito', 'Respuesta' => 'La consulta se realizó correctamente', 'Tipo' => 'success', "loquequierodevolver" => $loquequierodevolver];
        } catch (\Throwable $th) {
            $mensaje = ['Titulo' => 'Error', 'Respuesta' => 'Algo salio mal comuniquese con su administrador', 'Tipo' => 'error'];
        }
        return json_encode($mensaje);
    }
}
