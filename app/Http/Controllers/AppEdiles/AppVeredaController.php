<?php

namespace App\Http\Controllers\AppEdiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppVeredaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getVereda()
    {
        
        $data  = DB::table('vereda')
        ->leftJoin('corregimiento','corregimiento.id_corregimiento','=','vereda.id_corregimiento')
        ->select('vereda.id_vereda as idVereda','vereda.nombre_vereda as vereda')->get();
        
        return response()->json(compact('data'));


    }


  
}
