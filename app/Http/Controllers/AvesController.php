<?php

namespace App\Http\Controllers;

use App\Models\Aves;
use Illuminate\Http\Request;
use Redirect;
class AvesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_aves=Aves::all();
 
       return view("aves.aves",compact("lista_aves"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("aves.formulario_aves");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     

       $agregar_pollo=new Aves;
       $agregar_pollo->Placa=$request->Placa;
       $agregar_pollo->Genero=$request->Genero;
       $agregar_pollo->Candado=$request->Candado;
       $agregar_pollo->Madre=$request->Madre;
       $agregar_pollo->Padre=$request->Padre;
       $agregar_pollo->Fecha_nacimiento=$request->Fecha_nacimiento;
       $agregar_pollo->Observacion=$request->Observacion;
       $agregar_pollo->save();
       return  Redirect::to('/ave')->with('crear', 'El cliente se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aves  $aves
     * @return \Illuminate\Http\Response
     */
    public function show($aves)
    {
        $ave=Aves::findOrFail($aves);
        return response(["data"=>$ave]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aves  $aves
     * @return \Illuminate\Http\Response
     */
    public function edit($aves)
    {
        $ave=Aves::findOrFail($aves);
        return view("aves.editar_ave",compact("ave"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aves  $aves
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $aves)
    {
      
       
        $ave=Aves::findOrFail($aves);
        $ave->Placa=$request->Placa;
        $ave->Genero=$request->Genero;
        $ave->Candado=$request->Candado;
        $ave->Madre=$request->Madre;
        $ave->Padre=$request->Padre;
        $ave->Observacion=$request->Observacion;
        $ave->save();
        return  Redirect::to('/ave')->with('actualiza', 'El cliente se creo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aves  $aves
     * @return \Illuminate\Http\Response
     */
    public function destroy($aves)
    {
        $ave=Aves::findOrFail($aves);
        $ave->delete();
        return  Redirect::to('/ave')->with('elimina', 'El cliente se creo correctamente');
    }
}
