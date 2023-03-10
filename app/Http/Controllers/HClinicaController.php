<?php

namespace App\Http\Controllers;

use App\Models\H_clinica;
use Illuminate\Http\Request;
use DB;
class HClinicaController extends Controller
{
   public function crear_historia($creacion_carnet,$id_evento){
    $crear_h=new H_clinica;
    $crear_h->Id_carnet=$creacion_carnet;
    $crear_h->Id_evento=$id_evento;
    $crear_h->save();
    return ($crear_h->id!=null)?true:false;
   }

   public function formulario_hc(){
      return view("historiaClinica.historiaClinica");
   }
   public function consulta_historia_clinica(Request $request){

     $placa=  $request->Placa;

      
      $consulta=DB::table("aves")
      ->select("aves.Placa", "eventos.Descripcion_evento")
      ->join("carnets","carnets.Id_ave","=","aves.id")
      ->join("h_clinicas","h_clinicas.Id_carnet","=","carnets.id")
      ->join("eventos","eventos.id","=","h_clinicas.Id_evento")
      ->where("aves.Placa","=",$placa)
    
      ->get();
      return response(["data"=>$consulta]);
      
   }

}