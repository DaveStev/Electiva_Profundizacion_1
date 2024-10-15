<?php

namespace App\Http\Controllers;

use App\Models\TutorAcademico;
use Illuminate\Http\Request;

class TutoresAcademicosController extends Controller
{
    public function index()
    {
        $tutores = TutorAcademico::all();
        return view('TutoresAcademicos.TutoresTabla', compact('tutores'));
    }

    public function nuevo()
    {
        return view('TutoresAcademicos.TutoresNuevo');
    }

    public function guardar_nuevo(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'programa' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:255',
        ]);

        TutorAcademico::create($request->all());
        return redirect()->route('tutor.index')->with('success', 'Tutor Académico Creado Satisfactoriamente');
    }

    public function editar($id)
    {
        $tutor = TutorAcademico::findOrFail($id);
        return view('TutoresAcademicos.TutoresEditar', compact('tutor'));
    }

    public function guardar_editar(Request $request, $id)
    {
        $tutor = TutorAcademico::findOrFail($id);

        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'programa' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:255',
        ]);

        $tutor->update($request->all());
        return redirect()->route('tutor.index')->with('success', 'Tutor Académico Actualizado Satisfactoriamente');
    }

    public function borrar($id)
    {
        $tutor = TutorAcademico::findOrFail($id);
        $tutor->delete();
        return redirect()->route('tutor.index')->with('success', 'Tutor Académico Borrado Satisfactoriamente');
    }
}
