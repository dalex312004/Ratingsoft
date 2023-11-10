
@extends('adminlte::page')

@section('title', 'Usuarios') 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        @can('asignaturas.create')
            <a href="{{ route('asignaturas.create') }}" class="btn btn-primary btn-sm "
                data-placement="left">
                {{ __('Nuevo') }}
            </a>
        @endcan
  
<table id="tuser" class="table table-striped">

    <thead class="bg bg-success">
        <tr>
            <th>No</th>                             
            <th>Nombre Asignatura</th>
            <th>Código</th>
            <th>Descripcion</th>
            <th>Tipo Asignatura</th>
            <th>Profesor Encargado</th>
            <th>Acciones</th>
         
        </tr>
    </thead>

<tbody>
    @foreach ($asignaturas as $asignatura)
        <tr>
            
            <td>{{ ++$i }}</td>
                                            
			<td>{{ $asignatura->nombreAsignatura }}</td>
			<td>{{ $asignatura->codigo }}</td>
            <td>{{ $asignatura->descripcion}}</td>
            <td>{{ $asignatura->tipoAsignatura->nombreTipoAsignatura }}</td>
            <td>{{ $asignatura->profesorEncargado }}</td>

              <td width="280px">
                <form action="{{ route('asignaturas.destroy',$asignatura->id) }}" method="POST">

                    @can('asignaturas.show')
                        <a class="btn btn-sm btn-primary " href="{{ route('asignaturas.show',$asignatura->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                    @endcan
                
                    @can('asignaturas.edit')
                        <a class="btn btn-sm btn-success" href="{{ route('asignaturas.edit',$asignatura->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                    @endcan
                    
                    @csrf
                    @method('DELETE')

                    @can('asignaturas.destroy')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
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

