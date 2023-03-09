<?php

namespace App\Http\Controllers;

use App\Models\evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_Eventos=Eventos::all();
        return view("Eventos.Eventos",compact("lista_Eventos"));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Eventos.formulario_Eventos");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agregar=new Eventos;
        $agregar->Descripcion=$request->Descripcion;
        $agregar->save();
        return  Redirect::to('/Eventos')->with('crear', 'se creo la descripcion correctamente');
        //return response (["data"=>$request->all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show(Eventos $eventos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit($evento)
    {
        //return response (["date"=>("hola")]);
       
        return response(["data"=>$evento]);
        return view("Eventos.editar_eventos",compact("eventos"));
        //compact se ignifica que toda una variable la retorne en una array
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eventos $eventos)
    {
        $agregar=$eventos;
        $agregar->Descripcion=$request->Descripcion;
        $agregar->save();
        return  Redirect::to('/Eventos')->with('crear', 'se creo la descripcion correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eventos $eventos)
    {
        //
    }
}
