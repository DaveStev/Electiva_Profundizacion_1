<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorEmpresarial extends Model
{
    use HasFactory;

    protected $table = 'tutor_empresarial'; 

    protected $fillable = [
        'id_empresa',
        'nombres',
        'apellidos',
        'cargo',
        'email',
        'telefono',
    ];

    public $timestamps = false; 

    public function empresa()
    {
        return $this->belongsTo(Empresas::class, 'id_empresa'); // Cambiado a Empresa
    }
}
