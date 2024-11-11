<?php

namespace App\Http\Controllers;

use App\Models\TutorEmpresarial;
use App\Models\Empresas; 
use Illuminate\Http\Request;

class TutoresEmpresarialesController extends Controller
{
    public function index()
    {
        $tutores = TutorEmpresarial::with('empresa')->get();
        return view('TutoresEmp.TutoresEmpTabla', compact('tutores'));
    }

    public function nuevo()
    {
        $empresas = Empresas::all(); 
        return view('TutoresEmp.TutoresEmpNuevo', compact('empresas'));
    }

    public function guardar_nuevo(Request $request)
    {
        $request->validate([
            'id_empresa' => 'required|exists:empresa,id', 
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
        ]);

        TutorEmpresarial::create($request->all());
        return redirect()->route('tutoresEmp.index')->with('success', 'Tutor Creado Satisfactoriamente');
    }

    public function editar($id)
    {
        $tutor = TutorEmpresarial::findOrFail($id);
        $empresas = Empresas::all(); 
        return view('TutoresEmp.TutoresEmpEditar', compact('tutor', 'empresas'));
    }

    public function guardar_editar(Request $request, $id)
    {
        $tutor = TutorEmpresarial::findOrFail($id);

        $request->validate([
            'id_empresa' => 'required|exists:empresa,id', 
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
        ]);

        $tutor->update($request->all());
        return redirect()->route('tutoresEmp.index')->with('success', 'Tutor Actualizado Satisfactoriamente');
    }

    public function borrar($id)
    {
        $tutor = TutorEmpresarial::findOrFail($id);
        $tutor->delete();
        return redirect()->route('tutoresEmp.index')->with('success', 'Tutor Borrado Satisfactoriamente');
    }
}
