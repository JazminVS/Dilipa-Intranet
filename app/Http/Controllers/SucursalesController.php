<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SucursalesController extends Controller
{
    //
    //Index Sucursales
    public function sucursales(){

    }
    public function suc_quito(){
        return view('sucursales/suc_quito');
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
