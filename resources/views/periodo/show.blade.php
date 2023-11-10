@extends('adminlte::page')

@section('template_title')
    {{ $periodo->periodo ?? 'Ver Perido Academico' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Periodo Academico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('periodos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Periodo Academico:</strong>
                            {{ $periodo->periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $periodo->fechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Final:</strong>
                            {{ $periodo->fechaFin }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
