<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CorregimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = array('pageTitle' => "Corregimiento");
        $results = array();
        $results["corregimientos"]  = DB::table('corregimiento')->paginate(10);
        
        return view('admin.listarCorregimiento',$titulo)->with(['results'=>$results]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $titulo = array('pageTitle' => "Nueva Comuna");
                
        return view('admin.adicionarCorregimiento',$titulo);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew(Request $request)
    {
       
        $idCorregimiento = DB::table('corregimiento')->insert([
            'nombre_corregimiento'=>$request->inputCorregimiento,
            'descripcion_corregimiento'=>'sin descripcion',
            
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
        $titulo = array('pageTitle' => "Editar Corregimiento");
        $results["corregimiento"] =   DB::table('corregimiento')->where('id_corregimiento',$id)->get();
        //  dd($results);
         return view('admin.editarCorregimiento',$titulo)->with(['results'=>$results]);
    
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
        $validatedData = $request->validate([
            'inputCorregimiento'   =>  'required',
                       
        ], [
            
            'inputCorregimiento.required'  =>  'Corregimiento is Requerido',
            
        ]);
//dd($request);
        $id =   DB::table('corregimiento')->where('id_corregimiento',$request->idCorregimiento)->update([
                                'nombre_corregimiento' => $request->inputCorregimiento,
            
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
