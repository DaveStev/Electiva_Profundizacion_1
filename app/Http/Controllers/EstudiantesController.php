<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes; // Asegúrate de usar la clase correcta
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiantes::all(); // Usa la clase Estudiantes
        return view('Estudiantes.EstudiantesTabla', compact('estudiantes'));
    }

    public function nuevo()
    {
        return view('Estudiantes.EstudiantesNuevo');
    }

    public function guardar_nuevo(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
        ]);

        Estudiantes::create($request->all()); // Usa la clase Estudiantes
        return redirect()->route('estudiante.index')->with('success', 'Estudiante Creado Satisfactoriamente');
    }

    public function editar($id)
    {
        $estudiante = Estudiantes::findOrFail($id); // Usa la clase Estudiantes
        return view('Estudiantes.EstudiantesEditar', compact('estudiante'));
    }

    public function guardar_editar(Request $request, $id)
    {
        $estudiante = Estudiantes::findOrFail($id); // Usa la clase Estudiantes

        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
        ]);

        $estudiante->update($request->all()); // Usa la clase Estudiantes
        return redirect()->route('estudiante.index')->with('success', 'Estudiante Actualizado Satisfactoriamente');
    }

    public function borrar($id)
    {
        $estudiante = Estudiantes::findOrFail($id); // Usa la clase Estudiantes
        $estudiante->delete();
        return redirect()->route('estudiante.index')->with('success', 'Estudiante Borrado Satisfactoriamente');
    }
}
