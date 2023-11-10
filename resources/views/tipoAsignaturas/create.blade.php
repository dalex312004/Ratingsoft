@extends('adminlte::page')

@section('template_title')
    Crear Tipo Asignatura
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Tipo Asignatura</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipoAsignaturas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipoAsignaturas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
