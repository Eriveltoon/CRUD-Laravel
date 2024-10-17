@extends('layouts.main')

@section('title', 'Lista de Usuários')

@section('content')
<h1 class="lista-usuarios">Lista de Usuários</h1>
        @if (session('success'))
            <div class="alert alert-success mb-5 d-flex justify-content-center">
                {{ session('success') }}
            </div>
        @endif
<table class="table table-striped mb-5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>E-mail</th>
            <th>RG</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nome }}</td>
            <td>{{ $usuario->idade }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->rg }}</td>
            <td><a class="btn btn-primary botao" href="{{ url('/usuarios/editarUsuario/' . $usuario->id) }}">Editar</a></td>
            <td>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger botao">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
