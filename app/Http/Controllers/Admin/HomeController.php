<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //dd($request);
	    
    $title  = array('pageTitle' => "estadistica");
    $results= array();

    /*$data = DB::table('proyecto');
        
        if(isset($_REQUEST['id_barrio']) and !empty($_REQUEST['id_barrio'])){
            $data->where('proyecto.id_barrio', '=', $_REQUEST['id_barrio'] );
        }
        else
        if(isset($_REQUEST['categories_id']) and !empty($_REQUEST['categories_id'])){

            $data->leftJoin('barrio','barrio.id_barrio','=','proyecto.id_barrio');
            $data->leftJoin('comuna','comuna.cod_comuna','=','barrio.cod_comuna');
            $data->where('comuna.cod_comuna','=', $_REQUEST['categories_id']);	

           
        }
             
            $proyectos = $data->orderBy('proyecto.fecha_inicio', 'DESC')->paginate(10);	
        
        
    
    $results['comunas'] = DB::table('comuna')->get();
    $results['proyectos'] = $proyectos;
    */

    /*medir el proyecto mas votado en una comuna especifica numero de votos por proyecto por comuna-barra*/
    $todasComunas=array();
    $comunas    = DB::table('comuna')->get();
    $index  =   0;
    foreach ( $comunas as $comuna ){
        
        $masVotadoXComuna = DB::table('proyecto')
                            ->leftJoin('votacion','votacion.id_proyecto','=','proyecto.id_proyecto')
                            ->select(DB::raw('count(*) as votos'),'proyecto.id_proyecto','proyecto.nombre_proyecto')
                            ->where('proyecto.id_comuna',$comuna->id_comuna)
                            ->groupBy('votacion.id_proyecto')
                            ->orderBy('votos','desc')
                            ->get();

                if( count($masVotadoXComuna) > 0 ){
                    $comuna->idProyecto     =   $masVotadoXComuna[0]->id_proyecto;
                    $comuna->votos          =   $masVotadoXComuna[0]->votos;
                    $comuna->nombreProyecto =   $masVotadoXComuna[0]->nombre_proyecto;
                    
                    $comunas[$index]=$comuna;
                }
        $index++;
                
    }
    //dd($comunas);

    /*medir el proyecto mas votado en una comuna especifica numero de votos por proyecto por comuna-barra*/
    $masVotadoXComuna = DB::table('proyecto')
                            ->leftJoin('votacion','votacion.id_proyecto','=','proyecto.id_proyecto')
                            ->select(DB::raw('count(*) as votos'),'proyecto.id_proyecto','proyecto.nombre_proyecto')
                            ->where('proyecto.id_comuna',1)
                            ->groupBy('votacion.id_proyecto')
                            ->orderBy('votos','desc')
                            ->get();
    //dd($masVotadoXComuna);       

    $votosProyectoPorComuna = DB::table('votacion')
                ->select('comuna.nombre_comuna','comuna.id_comuna',DB::raw('count(proyecto.id_proyecto) as Votos'),'proyecto.nombre_proyecto',)
                ->leftJoin('proyecto', 'proyecto.id_proyecto', '=', 'votacion.id_proyecto')
                ->leftJoin('comuna','comuna.id_comuna','=','proyecto.id_comuna')
                ->groupBy('proyecto.id_proyecto')
                ->orderBy('comuna.id_comuna')
                ->get();   

    foreach($comunas as $comuna){   
        
        $arrayComuna = array();
        
        foreach( $votosProyectoPorComuna as $votos){
               if( $votos->id_comuna == $comuna->id_comuna ){

                        $arrayComuna[] = $votos;

                }
        }
        
        if( count($arrayComuna) > 0)
               $todasComunas[] = $arrayComuna;

    }
   // dd($todasComunas);

     /*medir la participacion numero de votos por comuna-torta*/
    $votosPorComuna = DB::table('votacion')
                 ->select('comuna.id_comuna','comuna.nombre_comuna',DB::raw('count(comuna.id_comuna) as Votos'))
                 ->leftJoin('proyecto', 'proyecto.id_proyecto', '=', 'votacion.id_proyecto')
                 ->leftJoin('comuna','comuna.id_comuna','=','proyecto.id_comuna')
                 ->groupBy('comuna.id_comuna')
                 ->orderBy('comuna.id_comuna')
                 ->get();   

    // dd($votosPorComuna);
  
                /*->leftJoin('postregistro','postregistro.id_usuario','=','votacion.id_usuario')
                ->leftJoin('comuna','comuna.id_comuna','=','postregistro.id_comuna')
                ->select('postregistro.id_usuario',DB::raw('COUNT(*) as votos'),'comuna.id_comuna','comuna.nombre_comuna')
                ->groupBy('postregistro.id_usuario')
               // ->orderBy('postregistro.id_comuna')
                ->get();*/
               /* $areas = Area::select('areas.*', DB::raw('count(area_id) as connections'))
                ->leftJoin('object_areas', 'object_areas.area_id', '=', 'areas.id')
                ->groupBy('areas.id')
                ->get();*/
    
                //select(DB::raw('SUM(valor_transaccion) as total'))
    /*$record = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
    ->where('created_at', '>', Carbon::today()->subDay(6))
    ->groupBy('day_name','day')
    ->orderBy('day')
    ->get();* /
    / *
  
     $data = [];
 
     foreach($record as $row) {
        $data['label'][] = $row->day_name;
        $data['data'][] = (int) $row->count;
      }
 
    $data['chart_data'] = json_encode($data);
 //   return view('chart-js', $data);
 
*/
   $data=[];
   $data['label'][]=array('comuna 1','comuna 2','comuna 3','comuna 4');
   $data['data'][]=array('45','25','32','52');
   $fondo=  array(
    'background-color:rgba(255,99,132,0.6)',
    'background-color:rgba(54,162,235,0.6)',
    'background-color:rgba(255,206,86,0.6)',
    'background-color:rgba(153,102,255,0.6)',
    'background-color:rgba(255,159,64,0.6)',
    'background-color:rgba(255,206,186,0.6)',
    'background-color:rgba(175,192,192,0.6)',
    'background-color:rgba(153,202,255,0.6)'
   );
   $data['chart_data'] = json_encode($data);
   return view("admin.tablero",$data)->with(['comunas'=>$comunas,'fondo'=>$fondo]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = array('pageTitle' => "Nuevo");
        $results = array();

        $result["comunas"] = DB::table('comuna')->get();
        return view('admin.adicionarProyecto',$titulo)->with(['result' => $result]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($i)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.editarProyecto',["idProyecto"=>$id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
