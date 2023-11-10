@extends('adminlte::page')

@section('template_title')
    {{ $logro->nombre ?? 'Ver Logro' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Logro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('logros.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $logro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $logro->descripcion }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
