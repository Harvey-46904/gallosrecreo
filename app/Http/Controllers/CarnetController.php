<?php

namespace App\Http\Controllers;

use App\Models\carnet;
use Illuminate\Http\Request;

class CarnetController extends Controller
{
    public function crear_carnet($id){
        $new_carnet=new carnet;
        $new_carnet->Id_ave=$id;
        $new_carnet->save();
        return ($new_carnet->id!=null)?$new_carnet:false;
    }
}
