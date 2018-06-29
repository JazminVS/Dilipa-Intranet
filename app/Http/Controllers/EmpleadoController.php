<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;

class EmpleadoController extends Controller
{
    public function buscar(Request $request){
        $nombres  = $request->get('nombres');
        $cedula = $request->get('cedula');
        $empleados = Empleado::orderBy('id','nombres')
            ->nombres($nombres)
            ->cedula($cedula)
            ->paginate(4);
        return view('departamentos_login.empleado_mes',compact('empleados'));
    }

    public function index(Request $request)
    {
        $empleados=Empleado::all();
        return view ('departamentos_login.empleado_mes',compact('empleados'));
    }

    public function show ($id){
        $empleado=Empleado::whereId($id)->firstOrFail();
        $empleados=Empleado::all();
        return view('departamentos_login.empleado_mes',compact('empleado','empleados'));
    }

    public function findUser(Route $route){
        $this->empleado=Empleado::findOrFail($route->getParameter('empleados'));
    }


    public function store(Request $request)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
