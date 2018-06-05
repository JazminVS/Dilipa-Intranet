<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SucursalesController extends Controller
{
    //
    //Index Sucursales
    public function sucursales(){

    }
    //<!------------------SUCURSALES QUITO-------------------------->
    public function suc_quito_matriz(){
        return view('sucursales/sucursales_quito/suc_quito_matriz');
    }
    public function suc_quito_calderon(){
        return view('sucursales/sucursales_quito/suc_quito_calderon');
    }

    public function suc_ambato(){
        return view('sucursales/suc_ambato');
    }
    public function suc_ibarra(){
        return view('sucursales/suc_ibarra');
    }

    public function suc_portoviejo(){
        return view('sucursales/suc_portoviejo');
    }
    public function suc_santo(){
        return view('sucursales/suc_santo');
    }


}
