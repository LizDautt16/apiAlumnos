@extends('master')

@section('titulo')
    <h1>Consultar alumnos</h1>
@stop

@section('contenido')
<a href="{{ url('/registrarAlumno') }}" class="btn btn-success">Registar alumno</a>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Número de control</th>
                <th>Fecha de nacimiento</th>
                <th>Sexo</th>
                <th>Especialidad</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->numero_control }}</td>
                    <td>{{ $alumno->fecha_nacimiento }}</td>
                    <td>{{ $alumno->sexo }}</td>
                    <td>{{ $alumno->especialidad }}</td>
                    <td>
                        <a href="{{ url('/editarAlumno') }}/{{ $alumno->id }}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{ url('/alumno') }}/{{ $alumno->id }}" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop