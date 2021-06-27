<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    //dd($request);
	    
    $title = array('pageTitle' => "Proyectos");
    $results								= array();
/*
    $data = DB::table('proyecto')
            ->leftJoin('barrio','barrio.id_barrio','=','proyecto.id_barrio');
               
        if(isset($_REQUEST['categories_id']) and !empty($_REQUEST['categories_id'])){

            $data->where('proyecto.id_comuna','=', $_REQUEST['categories_id']);	
        }
        if(isset($_REQUEST['id_barrio']) and !empty($_REQUEST['id_barrio'])){
          
            $data->where('proyecto.id_barrio', '=', $_REQUEST['id_barrio'] );
        }
             
            $proyectos = $data->orderBy('proyecto.fecha_inicio', 'DESC')->paginate(10);	*/
        
        /*   @if(!empty($Bono->date_expiry_bono) and $Bono->date_expiry_bono > 0)
                                     	          {{date('d/m/Y', $Bono->date_expiry_bono)}}
                                                
                                                @endif
                                                */
        $registroComunas    =   DB::table('comuna');
                    if(isset($_REQUEST['categories_id']) and !empty($_REQUEST['categories_id'])){

                        $registroComunas->where('comuna.id_comuna','=', $_REQUEST['categories_id']);	
                    }
        $comunas= $registroComunas->get();

    $index      =   0;
    
    foreach ( $comunas as $comuna ){
        $totalVotos =   0;
        $masVotadoXComuna = DB::table('proyecto')
                                ->leftJoin('votacion','votacion.id_proyecto','=','proyecto.id_proyecto')
                                ->select(DB::raw('count(*) as votos'),'proyecto.id_proyecto','proyecto.nombre_proyecto', 'proyecto.estado')
                                ->where('proyecto.id_comuna',$comuna->id_comuna)
                                ->groupBy('votacion.id_proyecto')
                                ->orderBy('votos','desc')
                                ->get();
  
                 if( count($masVotadoXComuna) > 0 ){
                    
                     
                     foreach( $masVotadoXComuna as $registro){
                        $totalVotos+=(int)$registro->votos; 
                     }

                     $comuna->proyectos     =   $masVotadoXComuna;
                     $comuna->totalVotantes =   $totalVotos;
                     
                 }else{

                    $comuna->proyectos     =   array();
                    $comuna->totalVotantes =   0;
                    
                 }
                 $comunas[$index]       =   $comuna;
         $index++;
                 
     }


     
    $results['comunas'] = $comunas;
   // $results['proyectos'] = $proyectos;
 //   dd($results);
    return view("admin.listarProyecto",$title)->with(['results' => $results]);

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
        $result["tipoProcesos"] = DB::table('tipo_procesos')->get();
        $result["unidadContratacion"] = DB::table('unidad_contratacion')->get();
        
        /*$result["comunas"] = DB::table('comuna')->get();
        $result["comunas"] = DB::table('comuna')->get();*/
        return view('admin.adicionarProyecto',$titulo)->with(['result' => $result]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew(Request $request)
    {
       // dd($request);
        $validatedData = $request->validate([
            'inputTitulo'                   => 'required',
            'inputNumeroProceso'            => 'required|min:5',
            'inputPlazoCalificacion'        => 'required',
            'inputPublicacionAviso'         => 'required',
            'inputPublicacionAvisoPublico'  => 'required',
            'inputPlazoObservaciones'       => 'required',          
            'inputEjecucion'                => 'required',          //direccion Proyecto
            'inputValorEstimado'            => 'required',           //presupuesto
            'inputCoordenada1'              => 'required',          ///coordenadaX_proyecto
            'inputCoordenada2'              => 'required',          ///coordenadaY_proyecto
            'textareaDescripcion'           => 'required',          //descripcion_proyecto
            'selectBarrio'                  => 'required',          //id_barrio
            'selectComuna'                  => 'required',          ///id_columna
            'selectCorregimiento'           => 'required',          //id_corregimiento
            'inputTipoProceso'              => 'required',           //id_tipoProceso
            'selectUnidadContratacion'      => 'required',          //id_unidaContratacion
            'inputDuracionContrato'         => 'required',          //duracion_proyecto
            'inputTipoContrato'             => 'required',          //tipo_proyecto
            
        ], [
            'inputTitulo.required'              => 'Titulo is Requerido',
            'inputNumeroProceso.required'       => 'Numero Proceso es Requerido',
            'inputPlazoCalificacion.required'   => 'Fecha Plazo de Calificacion es Requerida',
            'inputPublicacionAviso.required'    => 'Fecha Publicacion es Requerida',
            'inputPublicacionAvisoP.required'   => 'Fecha Publicacion del Aviso es Requerida',
            'inputPlazoObservaciones.required'  => 'Fecha Observaciones es Requerida',        
            'inputEjecucion.required'           => 'Direccion del Proyecto es Requerida',//direccion Proyecto
            'inputValorEstimado.required'       => 'Presupuesto es Requerido',           //presupuesto
            'inputCoordenada1.required'         => 'Cordenada 1 es Requerida',          ///coordenadaX_proyecto
            'inputCoordenada2.required'         => 'Cordenada 2 es Requerida',          ///coordenadaY_proyecto
            'textareaDescripcion.required'      => 'Descripcion es Requerida',          //descripcion_proyecto
            'selectBarrio.required'             => 'Barrio es Requerido',          //id_barrio
            'selectComuna.required'             => 'Comuna es Requerida',          ///id_columna
            'selectCorregimiento.required'      => 'Corregimiento es Requerido',          //id_corregimiento
            'inputTipoProceso.required'         => 'Tipo Proceso es Requerida',   //id_tipoProceso
            'selectUnidadContratacion.required' => 'Cordenada 2 es Requerida',          //id_unidaContratacion
            'inputDuracionContrato.required'    => 'Duracion del Proyecto es Requerido',          //duracion_proyecto
            'inputTipoContrato.required'        => 'Tipo de Contrato es Requerido',          //tipo_proyecto
            
        ]);
        $estado =   1;
        $expiryDate = str_replace('/', '-', $request->inputPlazoCalificacion);
		$expiryDateFormate1 = strtotime($expiryDate);

        $expiryDate = str_replace('/', '-', $request->inputPublicacionAviso);
		$expiryDateFormate2 = strtotime($expiryDate);

        $expiryDate = str_replace('/', '-', $request->inputPublicacionAvisoPublico);
		$expiryDateFormate3 = strtotime($expiryDate);

        $expiryDate = str_replace('/', '-', $request->inputPlazoObservaciones);
		$expiryDateFormate4 = strtotime($expiryDate);

        $idProyecto =   DB::table('proyecto')->insertGetId([
                    'codigo_proyecto'           =>  $request->inputNumeroProceso,
                    'nombre_proyecto'           =>  $request->inputTitulo,
                    'descripcion_proyecto'      =>  $request->textareaDescripcion,
                    'presupuesto'               =>  $request->inputValorEstimado,
                    'coordenadaX_proyecto'      =>  $request->inputCoordenada1,
                    'coordenadaY_proyecto'      =>  $request->inputCoordenada2,
                    'direccion_proyecto'        =>  $request->inputEjecucion,
                    'fechaCalificacionOferta'   =>  $expiryDateFormate1,
                    'fechaAviso'                =>  $expiryDateFormate2,
                    'fechaPublicacionaviso'     =>  $expiryDateFormate3,
                    'fechaPlazoObservaciones'   =>  $expiryDateFormate4,
                    'id_comuna'                =>   $request->selectComuna,
                    'id_barrio'                 =>  $request->selectBarrio,
                    'id_corregimiento'          =>  $request->selectCorregimiento,
                    'id_tipoProceso'            =>  $request->inputTipoProceso,
                    'id_unidaContratacion'      =>  $request->selectUnidadContratacion,
                    'duracion_proyecto'         =>  $request->inputDuracionContrato,
                    'tipo_proyecto'             =>  $request->inputTipoContrato,
                    'estado'                    =>  $estado,
                    ]);
        
                    return back()->with('success', 'Proyecto Creado Satisfactoriamente.');
    
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
    public function show($id)
    {
        $title = array('pageTitle' => "Proyectos");
        $proyecto   =   DB::table('proyecto')
                        ->leftJoin('comuna','comuna.id_comuna','=','proyecto.id_comuna')
                        ->leftJoin('barrio','barrio.id_barrio','=','proyecto.id_barrio')
                        ->leftJoin('unidad_contratacion','unidad_contratacion.id_unidad','=','proyecto.id_unidaContratacion')
                        ->leftJoin('tipo_procesos','tipo_procesos.id_tipo','=','proyecto.id_tipoProceso')
                        ->leftJoin('corregimiento','corregimiento.id_corregimiento','=','proyecto.id_corregimiento')
                        ->where('id_proyecto',$id)->get();
        $result =   array();
        $result['comunas']              =   DB::table('comuna')->get();
        $result['barrios']              =   DB::table('barrio')->where('cod_comuna',$proyecto[0]->id_comuna)->get();
        $result['unidadContratacion']   =   DB::table('unidad_contratacion')->get();
        $result['tipoProcesos']         =   DB::table('tipo_procesos')->get();
        $result['corregimientos']       =   DB::table('corregimiento')->get();
        $result['proyectos']              =   $proyecto;

      //  dd($result);
        return view('admin.verProyecto',$title)->with(['result' => $result,'idProyecto' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = array('pageTitle' => "Proyectos");
        $proyecto   =   DB::table('proyecto')
                        ->leftJoin('comuna','comuna.id_comuna','=','proyecto.id_comuna')
                        ->leftJoin('barrio','barrio.id_barrio','=','proyecto.id_barrio')
                        ->leftJoin('unidad_contratacion','unidad_contratacion.id_unidad','=','proyecto.id_unidaContratacion')
                        ->leftJoin('tipo_procesos','tipo_procesos.id_tipo','=','proyecto.id_tipoProceso')
                        ->leftJoin('corregimiento','corregimiento.id_corregimiento','=','proyecto.id_corregimiento')
                        ->where('id_proyecto',$id)->get();
        $result =   array();
        $result['comunas']              =   DB::table('comuna')->get();
        $result['barrios']              =   DB::table('barrio')->where('cod_comuna',$proyecto[0]->id_comuna)->get();
        $result['unidadContratacion']   =   DB::table('unidad_contratacion')->get();
        $result['tipoProcesos']         =   DB::table('tipo_procesos')->get();
        $result['corregimientos']       =   DB::table('corregimiento')->get();
        $result['proyectos']              =   $proyecto;

      //  dd($result);
        return view('admin.editarProyecto',$title)->with(['result' => $result]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
   //     dd($request);

        $validatedData = $request->validate([
            'inputTitulo'                   => 'required',
            'inputNumeroProceso'            => 'required|min:5',
            'inputPlazoCalificacion'        => 'required',
            'inputPublicacionAviso'         => 'required',
            'inputPublicacionAvisoPublico'  => 'required',
            'inputPlazoObservaciones'       => 'required',          
            'inputEjecucion'                => 'required',          //direccion Proyecto
            'inputValorEstimado'            => 'required',           //presupuesto
            'inputCoordenada1'              => 'required',          ///coordenadaX_proyecto
            'inputCoordenada2'              => 'required',          ///coordenadaY_proyecto
            'textareaDescripcion'           => 'required',          //descripcion_proyecto
            'selectBarrio'                  => 'required',          //id_barrio
            'selectComuna'                  => 'required',          ///id_columna
            'selectCorregimiento'           => 'required',          //id_corregimiento
            'inputTipoProceso'              => 'required',           //id_tipoProceso
            'selectUnidadContratacion'      => 'required',          //id_unidaContratacion
            'inputDuracionContrato'         => 'required',          //duracion_proyecto
            'inputTipoContrato'             => 'required',          //tipo_proyecto
            
        ], [
            'inputTitulo.required'              => 'Titulo is Requerido',
            'inputNumeroProceso.required'       => 'Numero Proceso es Requerido',
            'inputPlazoCalificacion.required'   => 'Fecha Plazo de Calificacion es Requerida',
            'inputPublicacionAviso.required'    => 'Fecha Publicacion es Requerida',
            'inputPublicacionAvisoP.required'   => 'Fecha Publicacion del Aviso es Requerida',
            'inputPlazoObservaciones.required'  => 'Fecha Observaciones es Requerida',        
            'inputEjecucion.required'           => 'Direccion del Proyecto es Requerida',//direccion Proyecto
            'inputValorEstimado.required'       => 'Presupuesto es Requerido',           //presupuesto
            'inputCoordenada1.required'         => 'Cordenada 1 es Requerida',          ///coordenadaX_proyecto
            'inputCoordenada2.required'         => 'Cordenada 2 es Requerida',          ///coordenadaY_proyecto
            'textareaDescripcion.required'      => 'Descripcion es Requerida',          //descripcion_proyecto
            'selectBarrio.required'             => 'Barrio es Requerido',          //id_barrio
            'selectComuna.required'             => 'Comuna es Requerida',          ///id_columna
            'selectCorregimiento.required'      => 'Corregimiento es Requerido',          //id_corregimiento
            'inputTipoProceso.required'         => 'Tipo Proceso es Requerida',   //id_tipoProceso
            'selectUnidadContratacion.required' => 'Cordenada 2 es Requerida',          //id_unidaContratacion
            'inputDuracionContrato.required'    => 'Duracion del Proyecto es Requerido',          //duracion_proyecto
            'inputTipoContrato.required'        => 'Tipo de Contrato es Requerido',          //tipo_proyecto
            
        ]);
        $estado =   1;
        $expiryDate = str_replace('/', '-', $request->inputPlazoCalificacion);
		$expiryDateFormate1 = strtotime($expiryDate);

        $expiryDate = str_replace('/', '-', $request->inputPublicacionAviso);
		$expiryDateFormate2 = strtotime($expiryDate);

        $expiryDate = str_replace('/', '-', $request->inputPublicacionAvisoPublico);
		$expiryDateFormate3 = strtotime($expiryDate);

        $expiryDate = str_replace('/', '-', $request->inputPlazoObservaciones);
		$expiryDateFormate4 = strtotime($expiryDate);

        $idProyecto =   DB::table('proyecto')
                        ->where('id_proyecto',$request->id_proyecto)->update([
                                'codigo_proyecto'           =>  $request->inputNumeroProceso,
                                'nombre_proyecto'           =>  $request->inputTitulo,
                                'descripcion_proyecto'      =>  $request->textareaDescripcion,
                                'presupuesto'               =>  $request->inputValorEstimado,
                                'coordenadaX_proyecto'      =>  $request->inputCoordenada1,
                                'coordenadaY_proyecto'      =>  $request->inputCoordenada2,
                                'direccion_proyecto'        =>  $request->inputEjecucion,
                                'fechaCalificacionOferta'   =>  $expiryDateFormate1,
                                'fechaAviso'                =>  $expiryDateFormate2,
                                'fechaPublicacionaviso'     =>  $expiryDateFormate3,
                                'fechaPlazoObservaciones'   =>  $expiryDateFormate4,
                                'id_comuna'                =>   $request->selectComuna,
                                'id_barrio'                 =>  $request->selectBarrio,
                                'id_corregimiento'          =>  $request->selectCorregimiento,
                                'id_tipoProceso'            =>  $request->inputTipoProceso,
                                'id_unidaContratacion'      =>  $request->selectUnidadContratacion,
                                'duracion_proyecto'         =>  $request->inputDuracionContrato,
                                'tipo_proyecto'             =>  $request->inputTipoContrato,
                                'estado'                    =>  $estado,
                                ]);
        
                    return back()->with('success', 'Proyecto Actualizado Satisfactoriamente.');

        
    }
    /**
     * inhabilitar proyecto deja de ser visible al usuario
     * 
     * 
     *  */
     public function inhabilitar($id){
        $proyecto =   DB::table('proyecto')->where('id_proyecto',$id)->get();
        $estado =   ( $proyecto[0]->estado == 0)?1:0;
        DB::table('proyecto')->where('id_proyecto', $id)->update([ 'estado' => $estado ]);

        return back()->with('success', 'Proyecto Actualizado Satisfactoriamente.');

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
