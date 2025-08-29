<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    /** @use HasFactory<\Database\Factories\AlumnoFactory> */
    use HasFactory;
    //protected $table = 'alumnitos';

    protected $fillable = [
        'nombre',
        'numero_control',
        'fecha_nacimiento',
        'sexo',
        'especialidad'
    ];
}