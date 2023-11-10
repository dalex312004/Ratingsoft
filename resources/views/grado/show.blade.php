@extends('adminlte::page')

@section('template_title')
    {{ $grado->grado}}
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
@endsection
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-center">
                            <span class="card-title"><strong>GRADO: {{$grado->grado}} {{$grado->curso->nombre}}</strong></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('grados.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Grado:</strong>
                            {{ $grado->grado }}
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            {{ $grado->curso->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $grado->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estudiantes:</strong>
                        </div>
                            <div class="card">
                                <div class="card-body">
                                    <table id="tuser" class="table table-striped">
                                        <thead class="bg bg-success">
                                            <tr>
                                                <th scope="col">Nombres</th>
                                                <th scope="col">Apellidos</th>
                                                <th scope="col">Identificacion</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($grado->personas as $estudiante)
                                                <tr>
                                                    <td>{{ $estudiante->nombre1 }} {{ $estudiante->nombre2}}</td>
                                                    <td> {{ $estudiante->apellido1 }} {{ $estudiante->apellido2}}</td>
                                                    <td>{{ $estudiante->identificacion }}</td>
                                                    <td>
                                                        <form action="{{ route('eliminarDelGrado', $estudiante->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                    </td>
                                                </tr>                              
                                            @endforeach
                                    </table>
                                </div>
                            </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
<script>  $('#tuser').DataTable({
responsive: true,
autoWidth:false,
"language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ total registros totales)",
            "search": 'Buscar Estudiante',
            "paginate": {
                'next':'siguiente',
                'previous':'Anterior'
            }
        }

}); 
</script>
@endsection
