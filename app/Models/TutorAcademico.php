<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorAcademico extends Model
{
    use HasFactory;

    protected $table = 'tutor_academico';

    protected $fillable = [
        'nombres',
        'apellidos',
        'programa',
        'email',
        'telefono',
    ];

    
    public $timestamps = false; 
}
