<?php

namespace App\Http\Controllers;

use App\Models\hclinica;
use Illuminate\Http\Request;
use Redirect;

class HclinicaController extends Controller
{
    public function index()
    {
         $lista_hclinica=Hclinica::all();
       return view("hclinica.hclinica",compact("lista_hclinica"));  
    }
    public function create()
    {
        return view("hclinica.formulario_hclinica");
    }
    public function store(Request $request)
    { 
        $agregar=new hclinica;
        $agregar->Fecha_clinica=$request->Fecha_clinica;
        $agregar->id_ave=$request->id_ave;
        $agregar->Observacion=$request->Observacion;
        $agregar->Enfermedad=$request->Enfermedad;
        $agregar->id_vacuna=$request->id_vacuna;
        $agregar->save();
        return  Redirect::to('/hclinica')->with('crear', 'El cliente se creo correctamente');
    }
    public function show(hclinica $hclinica)
    {
        //
    }
    public function edit( hclinica $hclinica)
    {
        $clinica=$hclinica;
        return view("hclinica.editar_clinica",compact("clinica"));
    }
    public function update(Request $request,hclinica $hclinica)
    {
        $agregar=$hclinica;
        $agregar->id_ave=$request->id_ave;
        $agregar->Observacion=$request->Observacion;
        $agregar->Enfermedad=$request->Enfermedad;
        $agregar->id_vacuna=$request->id_vacuna;
        $agregar->save();
        return  Redirect::to('/hclinica')->with('crear', 'El cliente se creo correctamente');
    }
    public function destroy(hclinica $hclinica)
    {
        $hclinica->delete();
        return  Redirect::to('/hclinica')->with('elimina', 'El cliente se creo correctamente');
    }
}
