<?php

namespace App\Http\Controllers;

use App\Models\H_clinica;
use Illuminate\Http\Request;
use DB;
use DateTime;
use Redirect;
class HClinicaController extends Controller
{
   public function crear_historia($creacion_carnet,$id_evento){
    $crear_h=new H_clinica;
    $crear_h->Id_ave=$creacion_carnet;
    $crear_h->Id_evento=$id_evento;
    $crear_h->save();
    return ($crear_h->id!=null)?true:false;
   }

   public function formulario_hc(){
      return view("historiaClinica.historiaClinica");
   }
   public function consulta_historia_clinica(Request $request){

     $placa=  $request->Placa;

      
      $consultas=DB::table("aves")
      ->select("aves.Placa","aves.Fecha_nacimiento", "eventos.Descripcion_evento","h_clinicas.descripcion_hc","eventos.id","h_clinicas.created_at")
      //->join("carnets","carnets.Id_ave","=","aves.id")
      ->join("h_clinicas","h_clinicas.Id_ave","=","aves.id")
      ->join("eventos","eventos.id","=","h_clinicas.Id_evento")
      ->where("aves.Placa","=",$placa)
      ->get();
      $dias=self::dias_vividos($consultas[0]);
      $graficos=self::Etiquetas_dias($consultas);
      return view("historiaClinica.consulta",compact("consultas","dias","graficos"));
      return response(["data"=>$graficos]);
      
   }

   public function dias_vividos($historia_clinica){
       $fecha1=new DateTime($historia_clinica->Fecha_nacimiento);
       $fecha2=new DateTime('NOW');
       $dias = floor(($fecha1->format('U') - $fecha2->format('U')) / (60*60*24));
       return $dias;
   }
   public function diferencia_dias($origen,$fecha){
      $fecha1=new DateTime($origen);
      $fecha2=new DateTime($fecha);
      $dias = floor(($fecha1->format('U') - $fecha2->format('U')) / (60*60*24));
      return $dias;
   }

   public function Etiquetas_dias($historia_clinica){
            $etiquetas=array();
            $dias=array();

            foreach ($historia_clinica as $hc) {
               array_push($etiquetas,$hc->Descripcion_evento);
               array_push($dias,(self::diferencia_dias($hc->Fecha_nacimiento,$hc->created_at))*-1);
            }
            $dias[0]=0;
      return ["etiquetas"=>$etiquetas,"dias"=>json_encode($dias)];
   }

   public function agregar_vacuna(Request $request){
      $array_errores=array();
      $array_registrados=array();
      $placa=$request->Placa;
      $vacuna=$request->vacuna;
     
      $array_ave=explode(",",$placa);
      $consulta_id_vacunacion=DB::table("eventos")
      ->select("eventos.id")
      ->where("eventos.Descripcion_evento","=","Vacunacion")
      ->first();

      $id_evento=$consulta_id_vacunacion->id;

      foreach ($array_ave as $a ) {
         $consulta_id_carnet=DB::table("aves")
         ->select("aves.id")
         ->where("aves.Placa","=",$a)
         ->get();
         // return response(["data"=>$consulta_id_carnet]);
       //  return response(["data"=>$consulta_id_carnet,"id ave"=>$a]);
         if(sizeof($consulta_id_carnet)==0){
           array_push($array_errores,$a);
         }else{
            array_push($array_registrados,$a);
            $id_consulta= $consulta_id_carnet[0]->id;
            $agregar_vacuna=new H_clinica;
            $agregar_vacuna->Id_ave=$id_consulta;
            $agregar_vacuna->Id_evento=$id_evento;
            $agregar_vacuna->descripcion_hc=$vacuna;
            $agregar_vacuna->save();
         }

        
      }

      $datos_obtenidos=["exis"=>$array_registrados,"no"=>$array_errores];
      return Redirect::route('vacuna')->with( ['data' => $datos_obtenidos] );
     // return response(["registrados"=>$array_registrados,"no registrados"=>$array_errores]);
      return Redirect()->with($datos_obtenidos);
      return response(["id no existentes"=>$array_errores]);
      return response($agregar_vacuna);
      //creamos en la historia clinica la vacunacion
         
         }

}