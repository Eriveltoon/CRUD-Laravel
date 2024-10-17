@extends('layouts.main')

@section('title', 'Cadastro Usuário')

@section('content')
    <h1 class="lista-usuarios mb-5">Criar Usuário</h1>
        @if (session('success'))
            <div class="alert alert-success mt-5 d-flex justify-content-center">
                {{ session('success') }}
            </div>
        @endif
    <div class="formulario">
        <form action="/" method="POST">
            @csrf
            <div class="col">
                <div class="col pt-2">
                    <input class="form-control" type="text" name="nome" placeholder="Nome" autofocus>
                </div>
                <div class="col pt-2">
                    <input class="form-control" type="text" name="idade" placeholder="Idade" required>
                </div>
                <div class="col pt-2">
                    <input class="form-control" type="email" name="email" placeholder="Email" required>
                </div>
                <div class="col pt-2">
                    <input class="form-control" type="number" name="rg" placeholder="RG" required>
                </div>
            </div>
            <div class="d-grid pt-5">
                <button class="btn btn-success" type="submit">Salvar</button>
            </div>
        </form>
    </div>
@endsection
