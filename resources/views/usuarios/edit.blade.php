@extends('adminlte::page')

@section('title', 'Prueba')

@section('content_header')
    <h1><span class="pf pf-atm"> Asignar un rol</span></h1>
@stop

@section('content')

@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>

@endif

<div class="card">
    <div class="card-body">
        <p class="h5">Nombre:</p>
        <p class="form-control">{{$users->name}}</p>

<h2 class="h5"> Listado de roles</h2>
        {!! Form::model($users, ['route' => ['usuarios.update' ,$users], 'method'=>'put']) !!}
         @foreach ($roles as $role)
        <div> 
            <label>
                {!! Form::checkbox('roles[]', $role->id, null, ['class'=> 'mr-1']) !!}

               {{$role->name}} 
            </label>
        </div>
        @endforeach
{!! Form::submit('Asignar rol', ['class' => 'btn btn-success mt-2']) !!}
         {!! Form::close() !!}
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
