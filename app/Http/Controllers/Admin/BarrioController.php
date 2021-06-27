<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
//use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class BarrioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $titulo = array('pageTitle' => "Barrio");
        $results = array();
        $results["barrios"]  = DB::table('barrio')->paginate(5);
        
        return view('admin.listarBarrio',$titulo)->with(['results'=>$results]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $titulo = array('pageTitle' => "Nuevo Barrio");
        $results = array();
        $results["comunas"] =   DB::table('comuna')->get();
        $results["corregimientos"] =   DB::table('corregimiento')->get();
                
        return view('admin.adicionarBarrio',$titulo)->with(['results'=>$results]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew(Request $request)
    {
        $validatedData = $request->validate([
            'selectCorregimiento'   =>  'required',
            'selectComuna'          =>  'required',
            'inputBarrio'           =>  'required', 
            
        ], [
            'selectCorregimiento.required'  =>  'Corregimiento is Requerido',
            'selectComuna.required'         =>  'Comuna es Requerido',
            'inputBarrio.required'          =>  'Barrio es Requerido',
            
        ]);
        $id =   DB::table('barrio')->insert([
                                    'nombre_barrio' => $request->inputBarrio,
                                    'cod_comuna'    =>  $request->selectComuna,
                                    'descripcion_barrio'=>'sin descripcion'    
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
         
        $titulo = array('pageTitle' => "Editar Barrio");
        $results = array();
        $results["comunas"] =   DB::table('comuna')->get();
        $results["corregimientos"] =   DB::table('corregimiento')->get();
        $results["barrio"] =   DB::table('barrio')->where('id_barrio',$id)->get();
       //  dd($results);
        return view('admin.editarBarrio',$titulo)->with(['results'=>$results]);
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
            'selectCorregimiento'   =>  'required',
            'selectComuna'          =>  'required',
            'inputBarrio'           =>  'required', 
            
        ], [
            'selectCorregimiento.required'  =>  'Corregimiento is Requerido',
            'selectComuna.required'         =>  'Comuna es Requerido',
            'inputBarrio.required'          =>  'Barrio es Requerido',
            
        ]);
//dd($request);
        $id =   DB::table('barrio')->where('id_barrio',$request->idBarrio)->update([
            'nombre_barrio' => $request->inputBarrio,
            'cod_comuna'    =>  $request->selectComuna,
            'descripcion_barrio'=>'sin descripcion'    
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
    public function indexAjax(Request $request)
    {
        $id_comuna = $request->id_comuna;
        $results = array();
        $results["barrios"]  = DB::table('barrio')->where('cod_comuna',$id_comuna)->get();
        
        //return response()->json(['success'=>'Got Simple Ajax Request.']);
        return response()->json($results);
      


    }
}
