@extends('adminlte::page')

@section('title', 'EditarPerfil')

@section('content_header')
    <h1 style="margin-left:40%"><span class="pf pf-atm">Actualizar Perfil</span></h1>
@stop

@section('content')
    <div class="card" style="width:50%; margin-left:25%">
        <div class="card-body">
            <form action="{{ route('Actualizar') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="">
                        <h4 class="margin-left:25%">{{Auth::user()->name }}</h4>
                    </div>
                    <img src="{{ asset('storage/Avatar/'. Auth::user()->Avatar)}} "
                        style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px">
                </div>

                <div>
                    <div class="form-group">
                        <label class="col-lg-8 control-label" for="avatar">Cambiar Avatar</label>
                        <input type="file" class="form-control" name="Avatar" id="bnt-file" accept="image/png, image/jpeg">
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label class="col-lg-8 control-label" for="name">Nombre de Usuario</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}"
                            class="form-control">
                    </div>
                </div>
                <div>
                    <div class="form-group ">
                        <label for="name">correo</label>
                        <input style="align:center" type="email" name="email"
                            value="{{ Auth::user()->email }}" class="form-control">
                    </div>
                </div>
                <div class="row text-center mb-4 mt-5">
                    <div class="cold-md-12">
                        <button type="submit" class=" btn btn-danger" id="formSubmit">Guardar cambios</button>
                        <a href="{{ route('editarPerfil', ['id' => Auth::user()->id]) }}" class="btn btn-primary">Actualizar Información</a>
                </div>
            </form>
        </div>
    </div>
@stop