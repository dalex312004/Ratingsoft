@extends('adminlte::page')

@section('template_title')
    {{ $asignatura->name ?? 'Show Asignatura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Asignatura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('asignaturas.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Asignatura:</strong>
                            {{ $asignatura->nombreAsignatura }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $asignatura->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $asignatura->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Asignatura:</strong>
                            {{ $asignatura->tipoAsignatura->nombreTipoAsignatura }}
                        </div>
                        <div class="form-group">
                            <strong>Profesor Encargado:</strong>
                            {{ $asignatura->profesorEncargado }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
