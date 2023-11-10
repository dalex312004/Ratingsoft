@extends('adminlte::page')

@section('template_title')
    Actualizar Tipo Persona
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Tipo Persona</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipoPersonas.update', $tipoPersona->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipoPersona.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
