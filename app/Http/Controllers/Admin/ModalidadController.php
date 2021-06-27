<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
//use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class ModalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = array('pageTitle' => "Escolaridad");
        $results = array();
        $results["escolaridad"]  = DB::table('escolaridad')->paginate(5);
        
        return view('admin.listarEscolaridad',$titulo)->with(['results'=>$results]);
      /*  $titulo = array('pageTitle' => "Modalidad Contratacion");
        $results = array();
        $results["modalidades"]  = DB::table('modalidad')->paginate(5);
        
        return view('admin.listarModalidad',$titulo)->with(['results'=>$results]);*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $titulo = array('pageTitle' => "Nueva Modalidad");
        $results = array();
        
                
        return view('admin.adicionarModalidad',$titulo);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew(Request $request)
    {
       //dd($request);
        $validatedData = $request->validate([
            'inputmodalidad'   =>  'required',
            
            
        ], [
            'inputmodalidad.required'  =>  'Nombre Modalidad es Requerido',
            
            
        ]);
        
        $id =   DB::table('modalidad')->insert([
                                    'nombre_modalidad' => $request->inputmodalidad,
                                    'descripcion_modalidad'=>$request->inputDescripcionModalidadD,
                                    'cod_modalidad'    =>  101,
                                        ]);

                        return redirect()->back()->withErrors(['Inserción con éxito.']);
                        
                        //return redirect('admin/listingProducts');
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
         
        $titulo = array('pageTitle' => "Editar Modalidad");
        $results = array();
        $results["modalidad"] =   DB::table('modalidad')->where('id_modalidad',$id)->get();
       //  dd($results);
        return view('admin.editarModalidad',$titulo)->with(['result'=>$results]);
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
        $validatedData = $request->validate([
            'inputModalidad'   =>  'required',
            
            
        ], [
            'inputmodalidad.required'  =>  'Nombre Modalidad es Requerido',
            
            
        ]);
//dd($request);
        $id =   DB::table('modalidad')->where('id_modalidad',$request->idModalidad)->update([
            'nombre_modalidad' => $request->inputModalidad,
                                    'cod_modalidad'    =>  1140,
                                    'descripcion_modalidad'=>$request->inputDescripcionModalidad
                ]);

        return redirect()->back()->withErrors(['Actualización con éxito.']);
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

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/*    public function indexAjax(Request $request)
    {
        $id_comuna = $request->id_comuna;
        $results = array();
        $results["barrios"]  = DB::table('barrio')->where('cod_comuna',$id_comuna)->get();
        
        //return response()->json(['success'=>'Got Simple Ajax Request.']);
        return response()->json($results);
      


    }*/
}
