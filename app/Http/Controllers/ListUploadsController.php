<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

use Exception;

class ListUploadsController extends Controller
{
    //

    public function ListFiles(){
        $query=DB::table('suppliers')->get();
        return view('FileUpload.listUploads',['datos'=>$query]);
     }

}
