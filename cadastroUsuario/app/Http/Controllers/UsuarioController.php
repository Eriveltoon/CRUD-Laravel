<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        return view('usuarios', compact('usuarios'));
    }

    public function create(){
        return view('usuarios/criarUsuario');
    }

    public function store(Request $request){
        $usuario = new Usuario;

        $usuario->nome = $request->nome;
        $usuario->idade = $request->idade;
        $usuario->email = $request->email;
        $usuario->rg = $request->rg;
        $usuario->save();

        //return redirect()->route('usuarios.index')->with('success', 'Usuário criado com sucesso!');

        return redirect()->route('usuarios.criarUsuario')->with('success', 'Usuário criado com sucesso!');
    }

    public function edit($id){
        $usuario = Usuario::FindOrFail($id);

        return view('usuarios.editarUsuario', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        // Atualiza os dados do usuário
        $usuario->update([
            'nome' => $request->input('nome'),
            'idade' => $request->input('idade'),
            'email' => $request->input('email'),
            'rg' => $request->input('rg'),
        ]);

        // Redireciona para a view
        return redirect()->route('usuarios.criarUsuario')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id){

        Usuario::findOrFail($id)->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuário deletado com sucesso!');
    }
}
