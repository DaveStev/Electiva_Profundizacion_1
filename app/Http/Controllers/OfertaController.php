<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;
use App\Models\Empresas;

class OfertaController extends Controller
{
    public function index() {
        $ofertas = Oferta::with('empresa')->get();
        return view('ofertas.OfertaTabla', compact('ofertas'));

    }

    public function nuevo() {
        $empresas = Empresas::all();
        return view('ofertas.OfertaNuevo', compact('empresas'));
    }

    public function guardar_nuevo(Request $request) {
        $oferta = new Oferta();
        $oferta->id_empresa = $request->id_empresa;
        $oferta->titulo = $request->titulo;
        $oferta->descripcion = $request->descripcion;
        $oferta->requisitos = $request->requisitos;
        $oferta->duracion = $request->duracion;
        $oferta->renumeracion = $request->renumeracion;
        $oferta->fecha_inicio = $request->fecha_inicio;
        $oferta->fecha_fin = $request->fecha_fin;
        $oferta->habilidades = $request->habilidades;
        $oferta->save();

        return redirect()->route('oferta.index');
    }

    public function editar($id) {
        $oferta = Oferta::findOrFail($id);
        $empresas = Empresas::all();
        return view('ofertas.ofertaEditar', compact('oferta', 'empresas'));
    }

    public function actualizar(Request $request, $id) {
        $oferta = Oferta::findOrFail($id);
        $oferta->update($request->all());

        return redirect()->route('oferta.index');
    }

    public function borrar($id) {
        $oferta = Oferta::findOrFail($id);
        $oferta->delete();

        return redirect()->route('oferta.index');
    }
}
