<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    public $timestamps = false; 
    protected $table = 'postulacion';

    protected $fillable = [
        'id_estudiante',
        'id_oferta',
        'fecha_postulacion',
        'estado',
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiantes::class, 'id_estudiante', 'id');
    }

    public function oferta()
    {
        return $this->belongsTo(Oferta::class, 'id_oferta', 'id');
    }
}
