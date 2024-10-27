<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    
    public $timestamps = false;

    protected $table = 'oferta'; 

    protected $fillable = [
        'id_empresa',
        'titulo',
        'descripcion',
        'requisitos',
        'duracion',
        'renumeracion',
        'fecha_inicio',
        'fecha_fin',
        'habilidades',
    ];

    
    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'id_empresa', 'id');
    }
}
