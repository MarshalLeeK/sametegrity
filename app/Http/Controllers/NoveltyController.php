<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;



use Illuminate\Support\Facades\DB;


class NoveltyController extends Controller
{
    private  $module = 'novelty';
    //
    public function create (){

        $module = $this->module;
        $view = 'novelty_create';
        return view('novelty.novelty_create', compact( 'module', 'view'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexNovelty(Request $request){

        $view = 'novelty_list';
        $columns = [ 'Encabezado', 'Subtitulo', 'Descripcion', 'Fecha', 'Publicado por'];
        $module = $this->module;
        $searchbox = trim($request->get('searchbox'));
        $novelties = DB::table('novelties')
            ->select('id', 'title', 'subtitle', 'description', 'date', 'published_by')
            ->where('title', 'LIKE', '%' . $searchbox . '%')
            ->orderBy('id')
            ->paginate(18);

        
            // Se obtiene un listado de novedades paginadas y las últimas 8 para el carrusel

            $carouselNovelties = DB::table('novelties')
            ->select('id', 'title', 'subtitle', 'description', 'date', 'published_by')
            ->orderBy('date', 'desc')
            ->take(8)
            ->get();

        return view('novelty.novelty_list', compact('columns', 'searchbox', 'novelties', 'carouselNovelties', 'module', 'view'));

    }


    


//     public function index(Request $request)
// {
//     $view = 'novelty_list';
//     $columns = ['Encabezado', 'Subtitulo', 'Descripcion', 'Fecha', 'Publicado por'];
//     $module = $this->module;
//     $searchbox = trim($request->get('searchbox'));

   
//     $novelties = DB::table('novelties')
//         ->select('id', 'title', 'subtitle', 'description', 'date', 'published_by')
//         ->where('title', 'LIKE', '%' . $searchbox . '%')
//         ->orderBy('id')
//         ->paginate(18);


//     // Se obtiene un listado de novedades paginadas y las últimas 8 para el carrusel

//     $carouselNovelties = DB::table('novelties')
//         ->select('id', 'title', 'subtitle', 'description', 'date', 'published_by')
//         ->orderBy('date', 'desc')
//         ->take(8)
//         ->get();

//     return view('novelty.novelty_list', compact('columns', 'searchbox', 'novelties', 'carouselNovelties', 'module', 'view'));
// }









}
