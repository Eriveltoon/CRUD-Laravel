@extends('layouts.main')

@section('title', 'Editar Usuário')

@section('content')
<h1 class="lista-usuarios">Editar Usuário</h1>
    <div class="formulario mt-5">
        <form action="{{ route('usuarios/editarUsuario.update', $usuario->id) }}" method="POST" class="mb-5">
            @csrf
            @method('PUT')
            <div class="col">
                <div class="col pt-2">
                    <input class="form-control" type="text" name="nome" placeholder="Nome" value="{{$usuario->nome}}" autofocus>
                </div>
                <div class="col pt-2">
                    <input class="form-control" type="text" name="idade" placeholder="Idade" value="{{$usuario->idade}}" required>
                </div>
                <div class="col pt-2">
                    <input class="form-control" type="email" name="email" placeholder="Email" value="{{$usuario->email}}" required>
                </div>
                <div class="col pt-2">
                    <input class="form-control" type="number" name="rg" placeholder="RG" value="{{$usuario->rg}}" required>
                </div>
            </div>
            <div class="d-grid pt-5">
                <button class="btn btn-success" type="submit">Salvar</button>
            </div>
        </form>
    </div>
@endsection
