<?php

namespace App\Http\Controllers\AppEdiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getComuna()
    {
        
        $comuna  = DB::table('comuna')->select('id_comuna as idComuna','nombre_comuna as comuna')->get();
        
        return response()->json(compact('comuna'));


    }


  
}
