@extends('adminlte::page')

@section('title', 'grado')
@section('content_header')
    <h1>Lista de Grados</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            @can('tipoAsignaturas.create')
                <a href="{{ route('grados.create') }}" class="btn btn-primary btn-sm " data-placement="left">
                    {{ __('Nuevo') }}
                </a>
            @endcan

            <table id="tuser" class="table table-striped">

                <thead class="bg bg-success">
                    <tr>
                        <th>No</th>
                        <th>Grado</th>
                        <th>Curso</th>
                        <th>Descripcion</th>
                        <th>Añadir</th>
                        <th>Acciones</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($grados as $grado)
                        <tr>

                            <td>{{ $grado->id }}</td>
                            <td>{{ $grado->grado }}</td>
                            <td>{{ $grado->curso->nombre }}</td>
                            <td>{{ $grado->descripcion }}</td>
                            <td><a class="btn btn-sm btn-outline-success" href="{{ route('agregarEstudiantes',$grado->id)}}"><i
                                        class="fa fa-fw fa-plus"></i> Agregar Estudiantes</a></td>
                            <td width="280px">
                                <form action="{{ route('grados.destroy', $grado->id) }}" method="POST">

                                    @can('tipoAsignaturas.show')
                                        <a class="btn btn-sm btn-primary " href="{{ route('grados.show', $grado->id) }}"><i
                                                class="fa fa-fw fa-eye"></i> Ver</a>
                                    @endcan
                                    @can('tipoAsignaturas.edit')
                                        <a class="btn btn-sm btn-success" href="{{ route('grados.edit', $grado->id) }}"><i
                                                class="fa fa-fw fa-edit"></i> Editar</a>
                                    @endcan

                                    @csrf
                                    @method('DELETE')

                                    @can('tipoAsignaturas.destroy')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>
                                            Eliminar</button>
                                    @endcan

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('js')

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
    <script>
        $('#tuser').DataTable({
            responsive: true,
            autoWidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                "zeroRecords": "Nada encontrado - disculpa",
                "info": "Mostrando la pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ total registros totales)",
                "search": 'Buscar registro',
                "paginate": {
                    'next': 'siguiente',
                    'previous': 'Anterior'
                }
            }

        });
    </script>
@endsection
