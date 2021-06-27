<?php

namespace App\Http\Controllers\AppEdiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppObrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getObrasByComuna(Request $request)
    {
    
    /*$results			=   array();
    $comunas    =   DB::table('comuna')
                            ->where('comuna.id_comuna','=', $request->idComuna)->get();
    $index      =   0;
    
    foreach ( $comunas as $comuna ){

        $totalVotos         =   0; DB::raw('count(*) as encontra')*/
        $encontra = 0;
        $data   =   DB::table('proyecto')
                                ->leftJoin('votacion','votacion.id_proyecto','=','proyecto.id_proyecto')
                                ->select(DB::raw('count(*) as afavor'), 'proyecto.id_proyecto as idObra','proyecto.nombre_proyecto as nombreObra', 'proyecto.descripcion_proyecto as descripcionObra', 
                                        'presupuesto as presupuestoObra', 'coordenadaX_proyecto as latitudObra', 'coordenadaY_proyecto as longitudObra', 'direccion_proyecto as lugarObra')
                                ->where('proyecto.id_comuna',$request->idComuna)
                                ->groupBy('votacion.id_proyecto')
                                ->orderBy('afavor','desc')
                                ->get();
  
               /*  if( count($proyectosXComuna) > 0 ){
                    
                     
                     foreach( $proyectosXComuna as $registro){
                        $totalVotos+=(int)$registro->votos; 
                     }

                     $comuna->proyectos     =   $proyectosXComuna;
                     $comuna->totalVotantes =   $totalVotos;
                     
                 }else{

                    $comuna->proyectos     =   array();
                    $comuna->totalVotantes =   0;
                    
                 }
                 $comunas[$index]       =   $comuna;
         $index++;
                 
     }*/


     
    

    return response()->json(compact('data'));

    }


  
}
