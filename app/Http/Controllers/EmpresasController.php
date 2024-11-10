<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function index()
    {
        $empresa = Empresas::all();
        return view('Empresas.EmpresasTabla', compact('empresa'));
    }

    public function nuevo()
    {
        return view('Empresas.EmpresasNuevo');
    }

    public function guardar_nuevo(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'nit' => 'required|string|max:255|regex:/^\d{9}-\d{1}$/',  // Ejemplo de validación para NIT con formato 111111111-1
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);
        

        Empresas::create($request->all());
        return redirect()->route('empresa.index')->with('success', 'Empresa Creada Satisfactoriamente');
    }

    public function editar($id)
    {
        $empresa = Empresas::findOrFail($id);
        return view('Empresas.EmpresasEditar', compact('empresa'));
    }

    public function guardar_editar(Request $request, $id)
    {
        $empresa = Empresas::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'nit' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        $empresa->update($request->all());
        return redirect()->route('empresa.index')->with('success', 'Empresa Actualizada Satisfactoriamente');
    }

    public function borrar($id)
    {
        $empresa = Empresas::findOrFail($id);
        $empresa->delete();
        return redirect()->route('empresa.index')->with('success', 'Empresa Borrada Satisfactoriamente');
    }
}
