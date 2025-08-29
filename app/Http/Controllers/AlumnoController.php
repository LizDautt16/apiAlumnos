<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //
}

public function editarAlumno($id) //marca error
{
    $alumnos=Alumno::find($id);
    return view("EditarAlumno",compact('alumno'));
}