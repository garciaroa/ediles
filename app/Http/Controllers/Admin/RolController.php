<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = array('pageTitle' => "roles");
        $results = array();
        $results["roles"]  = DB::table('roles')->paginate(5);
        
        return view('admin.listarRoles',$titulo)->with(['results'=>$results]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $titulo = array('pageTitle' => "Nuevo Rol");
                
        return view('admin.adicionarRol',$titulo);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createNew(Request $request)
    {
        $idroles = DB::table('roles')->insert([
                        'nombre_rol'=>$request->inputrol,
                        
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
        $titulo = array('pageTitle' => "Editar Rol");
        $results = array();
       
        $results["rol"] =   DB::table('roles')->where('id_rol',$id)->get();
      //  dd($results);
        return view('admin.editarRol',$titulo)->with(['result'=>$results]); 
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
            'inputrol'   =>  'required',
        ], 
        [
            'inputrol.required'  =>  'Rol es Requerido',
            
        ]);
//dd($request);
        $id =   DB::table('roles')->where('id_rol',$request->idRol)->update([
            'nombre_rol'     => $request->inputrol,
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
