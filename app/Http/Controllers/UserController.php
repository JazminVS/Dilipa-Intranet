<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{

    public function index()
    {
        $usuarios=User::all();
        $roles=Role::all();
        return view ('admin.registro',compact('usuarios','roles'));
    }

    public function usuarios(){
        return view('admin.registro');
    }


    public function create()
    {
        return view('admin/usuarios');
    }

    public function store(Request $request)
    {

    }
    public function show($id)
    {
        $usuario=User::whereId($id)->firstOrFail();
        return view('admin.edicion',compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('admin.edicion',compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = User::whereId($id)->firstOrFail();
        $usuario->username = $request-> get('username');
        $usuario->name =$request-> get('name');
        $usuario->lastname = $request->get('lastname');
        $usuario->email = $request->get('email');
        $usuario->save();
        return redirect('adminuser')->with('El usuario'.$id.' ha sido actualizado');
    }

    public function destroy($id)
    {
        $usuario = User::whereId($id)->firstOrFail();
        $usuario->delete();
        return redirect('adminuser')->with('El usuario'.$id.' ha sido actualizado');
    }
}
