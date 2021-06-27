<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EscolaridadController extends Controller
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


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $titulo = array('pageTitle' => "Nueva Escolaridad");
                
        return view('admin.adicionarEscolaridad',$titulo);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew(Request $request)
    {
        $validatedData = $request->validate([
            'inputEscolaridad'   =>  'required',
        ], 
        [
            'inputEscolaridad.required'  =>  'Escolaridad es Requerido',
            
        ]);
        $idEscolaridad = DB::table('escolaridad')->insert([
                        'nombre_escolaridad'=>$request->inputEscolaridad,
                        
        ]);
        return redirect()->back()->withErrors(['Inserción con éxito.']);
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
        $titulo = array('pageTitle' => "Editar Escolaridad");
        $results = array();
       
        $results["escolaridad"] =   DB::table('escolaridad')->where('id_escolaridad',$id)->get();
      //  dd($results);
        return view('admin.editarEscolaridad',$titulo)->with(['result'=>$results]); 
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
            'inputEscolaridad'   =>  'required',
        ], 
        [
            'inputEscolaridad.required'  =>  'Escolaridad es Requerido',
            
        ]);
//dd($request);
        $id =   DB::table('escolaridad')->where('id_escolaridad',$request->idEscolaridad)->update([
                            'nombre_escolaridad'     => $request->inputEscolaridad,
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

  
}
