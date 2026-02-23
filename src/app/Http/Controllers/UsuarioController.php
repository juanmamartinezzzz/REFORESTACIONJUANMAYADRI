<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    /**
     * Muestra el perfil del usuario actual.
     */
    public function perfil()
    {
        // Obtenemos el usuario autenticado
        $usuario = Auth::user(); 
        
        // El karma se calcula automáticamente gracias al Accesor que pusimos en el Modelo
        return view('usuarios.perfil', compact('usuario'));
    }

    /**
     * Muestra el formulario para editar el perfil.
     */
    public function editar()
    {
        $usuario = Auth::user();
        return view('usuarios.editar', compact('usuario'));
    }

    /**
     * Actualiza los datos en la base de datos.
     */
    public function actualizar(Request $request)
    {
        $usuario = Auth::user();

        // Validamos que los datos cumplan con los requisitos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email,' . $usuario->id,
            'nick' => 'required|string|unique:usuarios,nick,' . $usuario->id,
        ]);

        // Actualizamos solo los campos permitidos (sin tocar el karma directamente)
        $usuario->update($request->only('nombre', 'apellidos', 'email', 'nick'));

        return redirect()->route('perfil')->with('success', 'Perfil actualizado correctamente.');
    }
}
