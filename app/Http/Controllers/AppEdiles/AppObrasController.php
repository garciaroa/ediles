<?php

namespace App\Http\Controllers\AppEdiles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Models\User;

class AppObrasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getObrasByComuna(Request $request)
    {
    
        $encontra = 0;
        $data   =   DB::table('proyecto')
                                ->leftJoin('votacion','votacion.id_proyecto','=','proyecto.id_proyecto')
                                ->select(DB::raw('count(*) as afavor'), 'proyecto.id_proyecto as idObra','proyecto.nombre_proyecto as nombreObra', 'proyecto.descripcion_proyecto as descripcionObra', 
                                        'presupuesto as presupuestoObra', 'coordenadaX_proyecto as latitudObra', 'coordenadaY_proyecto as longitudObra', 'direccion_proyecto as lugarObra')
                                ->where('proyecto.id_comuna',$request->idComuna)
                                ->groupBy('votacion.id_proyecto')
                                ->orderBy('afavor','desc')
                                ->get();
  
    return response()->json(compact('data'));

    }

    public function getObrasByCorregimiento(Request $request)
    {
    
        $encontra = 0;
        $data   =   DB::table('proyecto')
                                ->leftJoin('votacion','votacion.id_proyecto','=','proyecto.id_proyecto')
                                ->select(DB::raw('count(*) as afavor'), 'proyecto.id_proyecto as idObra','proyecto.nombre_proyecto as nombreObra', 'proyecto.descripcion_proyecto as descripcionObra', 
                                        'presupuesto as presupuestoObra', 'coordenadaX_proyecto as latitudObra', 'coordenadaY_proyecto as longitudObra', 'direccion_proyecto as lugarObra')
                                ->where('proyecto.id_corregimiento',$request->idCorregimiento)
                                ->groupBy('votacion.id_proyecto')
                                ->orderBy('afavor','desc')
                                ->get();
  
    return response()->json(compact('data'));

    }

    public function getObrasByBarrio(Request $request)
    {
        
    
        $encontra = 0;
        $data   =   DB::table('proyecto')
                                ->leftJoin('votacion','votacion.id_proyecto','=','proyecto.id_proyecto')
                                ->select(DB::raw('count(*) as afavor'), 'proyecto.id_proyecto as idObra','proyecto.nombre_proyecto as nombreObra', 'proyecto.descripcion_proyecto as descripcionObra', 
                                        'presupuesto as presupuestoObra', 'coordenadaX_proyecto as latitudObra', 'coordenadaY_proyecto as longitudObra', 'direccion_proyecto as lugarObra')
                                ->where('proyecto.id_barrio',$request->idBarrio)
                                ->groupBy('votacion.id_proyecto')
                                ->orderBy('afavor','desc')
                                ->get();
  
    return response()->json(compact('data'));       

    }

    public function getObrasByVereda(Request $request)
    {
    
        $encontra = 0;
        $data   =   DB::table('proyecto')
                                ->leftJoin('votacion','votacion.id_proyecto','=','proyecto.id_proyecto')
                                ->select(DB::raw('count(*) as afavor'), 'proyecto.id_proyecto as idObra','proyecto.nombre_proyecto as nombreObra', 'proyecto.descripcion_proyecto as descripcionObra', 
                                        'presupuesto as presupuestoObra', 'coordenadaX_proyecto as latitudObra', 'coordenadaY_proyecto as longitudObra', 'direccion_proyecto as lugarObra')
                                ->where('proyecto.id_vereda',$request->idVereda)
                                ->groupBy('votacion.id_proyecto')
                                ->orderBy('afavor','desc')
                                ->get();
  
    return response()->json(compact('data'));

    }

    public function votarObra(Request $request)
    {
  

        if (!$user = JWTAuth::parseToken()->authenticate()) {
            return response()->json(['user_not_found'], 404);
        }

        $idUser = (intVal( $user->id) > 0)?$user->id:0;
        $idObra = (intVal( $request->idObra) > 0)?$request->idObra:0;
            
        if ($idObra > 0){
            $fecha  = time();
        
                $encontra = 0;
                $idRegistro   =   DB::table('votacion')->insertGetId([
                                    "id_proyecto"       =>  $idObra,
                                    "id_usuario"        =>  $idUser,
                                    "fechaHoraCreacion" =>  $fecha,
                                    "votacion"          =>  $request->voto,
                                    ]);

                                $success=1;
                $message="Sigues Valorando Obras";
            }
            else{
                $success=0;
                $message="Obra Sin seleccionar";
            }
            $data = array("success"=>$success, "message"=>$message);
            
                                        
            return response()->json(compact('data'));

    }


  
}
