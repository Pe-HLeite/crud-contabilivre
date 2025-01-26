<?php

namespace App\Http\Controllers\Usuario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Usuario\Usuarios;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuarios::all();

        return view('Usuario.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuario.form', ['usuario' => new Usuarios()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario = Usuarios::create([
            'nome' => $request->nome_usuario,
            'idade' => $request->idade_usuario,
            'empresa_id' => $request->empresa_usuario,
            'cargo' => $request->cargo_usuario
        ]);

        return view('Usuario.form', ['usuario' => $usuario])->with('success', 'Usuário cadastrado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Usuarios::FindOrFail($id);

        return view('Usuario.form', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Usuarios::where('id', $id)->update([
            'nome' => $request->nome_usuario,
            'idade' => $request->idade_usuario,
            'empresa_id' => $request->empresa_usuario,
            'cargo' => $request->cargo_usuario
        ]);

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Usuarios::where('id', $id)->delete();

        return redirect()->route('usuarios.index');
    }
}
