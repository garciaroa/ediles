<?php

namespace App\Http\Controllers\AppEdiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppBarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBarrio(Request $request)
    {
        
        $data  = DB::table('barrio')
                   ->leftjoin('comuna','comuna.cod_comuna','=','barrio.cod_comuna')
                   ->select('id_barrio as idBarrio','nombre_barrio as barrio')
                   ->where('comuna.id_comuna',$request->idComuna)->get();
        
        return response()->json(compact('data'));


    }


  
}
