<?php

namespace App\Http\Controllers\AppEdiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppCorregimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCorregimiento()
    {
        
       
       $corregimiento  = DB::table('corregimiento')->select('id_corregimiento as idCorregimiento','nombre_corregimiento as corregimiento')->get();
        
        return response()->json(compact('corregimiento'));


    }


  
}