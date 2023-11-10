@extends('adminlte::page')

@section('title', 'notas') 
@section('content_header')
    <h1 style="text-align: center">Asignaturas a Calificar</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            @foreach ($materias as $materia)
            <div class="card mx-2 text-center" style="width: 15rem">
                <h5 class="card-title font-weight-bold mt-3">{{$materia->nombreAsignatura}}</h5>
                <i class="fas fa-book" style="font-size: 100px;"></i>
                <div class="card-body">
                    <p class="card-text">Codigo: {{$materia->codigo}}</p>
                    <p class="card-text">Descripción: {{$materia->descripcion}}</p>
                    <a href="{{ route('notasPeriodos') }}" class="btn btn-primary">Ver</a>
                </div>
            </div>
            
            @endforeach
        </div>
    </div>
</div>

@endsection
