<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;

Route::get('/', [UsuarioController::class, 'index'])->name('usuarios/criarUsuario.index');
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/criarUsuario', [UsuarioController::class, 'create'])->name('usuarios.criarUsuario');
Route::post('/', [UsuarioController::class, 'store'])->name('store')->name('usuarios.criarUsuario');
Route::get('/usuarios/editarUsuario/{id}', [UsuarioController::class, 'edit']);
Route::put('/usuarios/editarUsuario/{id}', [UsuarioController::class, 'update'])->name('usuarios/editarUsuario.update');
Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');





Route::get('/usuarios/editarUsuario', function () {
    return view('usuarios.editarUsuario');
});
