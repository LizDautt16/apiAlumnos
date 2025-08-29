<?php

namespace App\Http\Controllers;
#use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    //Santillan
    public function consulta(){
        $nombre = "Luis Carlo Caro Dautt";
        $edad = 7;
        $numero_control = "0234117823634";
        
        return view("ConsultaAlumnos", compact('nombre', 'edad', 'numero_control'));
}

 public function calcular(){
        $calificaciones[0]= 7;
        $calificaciones[1]= 9;
        $calificaciones[2]= 8;
        $calificaciones[3]= 6.5;
        $calificaciones[4]= 7.3;

        $nombre = "Luis";

        return view('Boleta', compact('nombre', 'calificaciones'));
    }

    public function getAlumnos(){
        $alumnos = Alumno::orderBy('id', 'desc')->get();
        return view("ConsultarAlumnos", compact('alumnos'));
    }// el compact en algunos dice alumno y entros alumnos

    public function registrarAlumno(){
        return view('RegistrarAlumno');
    }

    public function guardarAlumno(Request $request){
        $datos = $request->input();

        /*$alumno = new Alumno();
        $alumno->nombre = $datos["nombre"];
        $alumno->numero_control = $datos["numero_control"];
        $alumno->fecha_nacimiento = $datos["fecha_nacimiento"];
        $alumno->sexo = $datos["sexo"];
        $alumno->especialidad = $datos["especialidad"];
        $alumno->save();*/

        Alumno::create($datos);

        return redirect('/alumnos');
    }

    public function eliminarAlumno($id){
        $alumno = Alumno::find($id);
        $alumno->delete();

        return redirect('/alumnos');
    }

    public function editarAlumno($id){
        $alumno = Alumno::find($id);
            //no es compact 'alumnos' ??
        return view('EditarAlumno', compact('alumno'));
    }

    public function actualizarAlumno($id, Request $request){
        $alumno = Alumno::find($id);
        $datos = $request->input();

        $alumno->nombre = $datos["nombre"];
        $alumno->numero_control = $datos["numero_control"];
        $alumno->fecha_nacimiento = $datos["fecha_nacimiento"];
        $alumno->sexo = $datos["sexo"];
        $alumno->especialidad = $datos["especialidad"];
        $alumno->save();

        return redirect('/alumnos');
    }
}