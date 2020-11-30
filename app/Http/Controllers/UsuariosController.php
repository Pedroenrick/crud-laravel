<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Redirect;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::get();
        return view('users.list', ['usuarios' => $usuarios]);
    }

    public function new(){
        return view('users.form');

    }

    public function add(Request $request){
        $usuario = new Usuario;
        $usuario = $usuario->create($request->all());
        return Redirect::to('/users');
    }

    public function edit($id){
        $usuario = Usuario::findOrFail($id);
        return view('users.form', ['usuario' => $usuario]);
    }

    public function update($id, Request $request){
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());
        return Redirect::to('/users');
    }

    public function delete($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return Redirect::to('/users');
    }
}
