
@extends('adminlte::page')

@section('title', 'NOTAS-PERIODO') 
@section('content_header')
    <h1>NOTAS POR PERIODO</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <table id="tuser" class="table table-striped">
            <thead class="bg bg-success">
                <tr>
                    <th>No</th>                             
                    <th>Estudiante</th>
                    <th>Periodo 1</th>
                    <th>Periodo 2</th>
                    <th>Periodo 3</th>
                    <th>Periodo 4</th>
                    <th>Final</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$estudiante->id}}</td>                        
                    <td>
                        {{$estudiante->nombre1}}
                        {{$estudiante->nombre2}}
                        {{$estudiante->apellido1}}
                        {{$estudiante->apellido2}}
                    </td>
                    <td>{{$notaPeriodo}}</td>
                    <td>{{$notaPeriodo}}</td>                        
                    <td>{{$notaPeriodo}}</td>
                    <td>{{$notaPeriodo}}</td>
                    <td>{{($notaPeriodo+$notaPeriodo+$notaPeriodo+$notaPeriodo)/4}}</td>
                    <td>
                        <a href="{{ route('calificar.create') }}" class="btn btn-success">Calificar</a>
                        <a href="{{ route('notasPeriodoIndividual') }}" class="btn btn-primary">Ver</a>
                    </td>
                </tr>
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

