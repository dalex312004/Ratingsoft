@extends('adminlte::page')

@section('title', 'RATINGSOFT')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
@endsection

@section('content_header')
    <h1>Lista de Roles</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
    <div class="card">
         <div class="card-body">
            <a class="btn btn-sm btn-success" style="margin-bottom: 1rem" href="{{route('admin.roles.create')}}">Nuevo rol</a>
                <table id="tuser" class="table table-striped">

                    <thead class="bg bg-success">
                        <tr>
                            <th>Id</th>
                            <th>nombre del rol</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td >{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>

                            <td class="float-right">
                                <form action="{{route('admin.roles.destroy',$role->id) }}" method="POST">
                                    <a class="btn btn-sm btn-success" style="margin-left: 40rem !important;" href="{{ route('admin.roles.edit', $role) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>

                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
         </div>
    </div>
@stop

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
            "search": 'Buscar registro',
            "paginate": {
                'next':'siguiente',
                'previous':'Anterior'
            }
        }

}); 
</script>
@endsection