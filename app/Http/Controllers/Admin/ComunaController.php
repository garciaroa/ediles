<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = array('pageTitle' => "Comuna");
        $results = array();
        $results["comunas"]  = DB::table('comuna')->paginate(5);
        
        return view('admin.listarComuna',$titulo)->with(['results'=>$results]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $titulo = array('pageTitle' => "Nueva Comuna");
                
        return view('admin.adicionarComuna',$titulo);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew(Request $request)
    {
        $idComuna = DB::table('comuna')->insert([
                        'nombre_comuna'=>$request->inputComuna,
                        'descripcion_comuna'=>'sin descripcion',
                        'cod_comuna'=>9
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
        $titulo = array('pageTitle' => "Editar Comuna");
        $results = array();
       
        $results["comuna"] =   DB::table('comuna')->where('id_comuna',$id)->get();
      //  dd($results);
        return view('admin.editarComuna',$titulo)->with(['result'=>$results]); 
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
            'inputComuna'   =>  'required',
        ], 
        [
            'inputComuna.required'  =>  'Comuna is Requerido',
            
        ]);
//dd($request);
        $id =   DB::table('comuna')->where('id_comuna',$request->idComuna)->update([
            'nombre_comuna'     => $request->inputComuna,
            'descripcion_comuna'=>'sin descripcion'    
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
