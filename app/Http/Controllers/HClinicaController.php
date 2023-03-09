<?php

namespace App\Http\Controllers;

use App\Models\H_clinica;
use Illuminate\Http\Request;

class HClinicaController extends Controller
{
   public function crear_historia($creacion_carnet,$id_evento){
    $crear_h=new H_clinica;
    $crear_h->Id_carnet=$creacion_carnet;
    $crear_h->Id_evento=$id_evento;
    $crear_h->save();
    return ($crear_h->id!=null)?true:false;
   }
}
