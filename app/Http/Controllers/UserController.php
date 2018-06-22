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
        $usuario = User::find($request->id);
        $usuario->username = $request->username;
        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->email = $request->email;
        $usuario->save();
        return redirect('movie');
    }

    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->back();
    }
}
