<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
//use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $titulo = array('pageTitle' => "Estado Contratación");
        $results = array();
        $results["estados"]  = DB::table('estado')->paginate(5);
        
        return view('admin.listarEstado',$titulo)->with(['results'=>$results]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $titulo = array('pageTitle' => "Nuevo Estado");
        $results = array();
        
                
        return view('admin.adicionarEstado',$titulo);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew(Request $request)
    {
       
        $validatedData = $request->validate([
            'inputEstado'   =>  'required',
            
            
        ], [
            'inputEstado.required'  =>  'Nombre Estado es Requerido',
            
            
        ]);
        $id =   DB::table('estado')->insert([
                                    'nombre_estado' => $request->inputEstado,
                                    'descripcion_estado'=>$request->inputDescripcionEstado    
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
         
        $titulo = array('pageTitle' => "Editar Estado");
        $results = array();
        $results["estado"] =   DB::table('estado')->where('id_estado',$id)->get();
       //  dd($results);
        return view('admin.editarEstado',$titulo)->with(['result'=>$results]);
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
            'inputEstado'   =>  'required',
            
            
        ], [
            'inputEstado.required'  =>  'Nombre Estadooo es Requerido',
            
            
        ]);
//dd($request);
        $id =   DB::table('estado')->where('id_estado',$request->idEstado)->update([
                'nombre_estado' => $request->inputEstado,
                'descripcion_estado'=>$request->inputDescripcionEstado
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
