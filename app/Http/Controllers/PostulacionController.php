<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postulacion;
use App\Models\Estudiantes; 
use App\Models\Oferta;

class PostulacionController extends Controller
{
    public function crear($id_oferta)
    {
        $oferta = Oferta::findOrFail($id_oferta);
        $estudiantes = Estudiantes::all(); 
        return view('postulaciones.PostulameNuevo', compact('oferta', 'estudiantes'));
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'id_estudiante' => 'required|exists:estudiante,id', 
            'id_oferta' => 'required|exists:oferta,id', 
            'estado' => 'required|string',
        ]);

        
        Postulacion::create([
            'id_estudiante' => $request->id_estudiante,
            'id_oferta' => $request->id_oferta,
            'fecha_postulacion' => now(), 
            'estado' => $request->estado,
        ]);

        return redirect()->route('postulaciones.index')->with('success', 'Postulación registrada exitosamente');
    }

    public function index()
    {
        $postulaciones = Postulacion::with(['estudiante', 'oferta'])->get();
        return view('postulaciones.PostulacionesTabla', compact('postulaciones'));
    }

    public function eliminar($id)
{
    $postulacion = Postulacion::findOrFail($id);
    $postulacion->delete();

    return redirect()->route('postulaciones.index')->with('success', 'Postulación eliminada exitosamente');
}
}
