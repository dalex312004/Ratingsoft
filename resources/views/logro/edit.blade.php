@extends('adminlte::page')

@section('template_title')
    Actualizar Logro
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Logro</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('logros.update', $logro->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('logro.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
