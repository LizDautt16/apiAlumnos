@extends('master')

@section('titulo')
    <h1>Editar Alumno</h1>
@stop

@section('contenido')
<form action="{{ url('/actualizarAlumno') }}/{{ $alumno->id }}" method="POST">
    @csrf
    <div class="form-group mb-4">
        <label for="">Nombre:</label>
        <input type="text" class="form-control" name="nombre" required value="{{ $alumno->nombre }}">
    </div>
    <div class="form-group mb-4">
        <label for="">Número de control:</label>
        <input type="text" class="form-control" name="numero_control" required value="{{ $alumno->numero_control }}">
    </div>
    <div class="form-group mb-4">
        <label for="">Fecha de nacimiento:</label>
        <input type="date" class="form-control" name="fecha_nacimiento" required value="{{ $alumno->fecha_nacimiento }}">
    </div>
    <div class="form-group mb-4">
        <label for="">Sexo:</label>
        <select name="sexo" class="form-control" required>
            <option value="">Selecciona una opción</option>
            @if($alumno->sexo == 0)
                <option value="0" selected>Femenino</option>
                <option value="1">Másculino</option>
                <option value="2">Otro</option>
            @elseif($alumno->sexo == 1)
                <option value="0">Femenino</option>
                <option value="1" selected>Másculino</option>
                <option value="2">Otro</option>
            @elseif($alumno->sexo == 2)
                <option value="0">Femenino</option>
                <option value="1">Másculino</option>
                <option value="2" selected>Otro</option>
            @endif
        </select>
    </div>
    <div class="form-group mb-4">
        <label for="">Especialidad</label>
        <select name="especialidad" class="form-control" required>
            <option value="">Selecciona tu especilidad</option>
            <option value="{{ $alumno->especialidad }}" selected>{{ $alumno->especialidad }}</option>
            <option value="PROGRAMACION">Programación</option>
            <option value="CONTABILIDAD">Contabilidad</option>
        </select>
    </div>
    <div>
        <input type="submit" class="btn btn-primary" value="Guardar">
        <a href="{{ url('/alumnos') }}" class="btn btn-danger">Regresar</a>
    </div>
</form>
@stop