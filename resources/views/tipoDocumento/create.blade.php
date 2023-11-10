@extends('adminlte::page')

@section('template_title')
    Crear Tipo Documento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Tipo Documento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipoDocumentos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipoDocumento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
