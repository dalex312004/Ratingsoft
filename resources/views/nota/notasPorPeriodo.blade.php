
@extends('adminlte::page')

@section('title', 'NOTAS-PERIODO') 
@section('content_header')
    <h1>NOTAS DEL PERIODO</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="float-right">
            <a class="btn btn-primary mb-3" href="{{ route('notasPeriodos') }}"> Volver</a>
        </div>
        <table id="tuser" class="table table-striped">
            <thead class="bg bg-success">
                <tr>
                    <th>No</th>                             
                    <th>Detalle</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Nota</th>
                    <th>Periodo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                    <tr>
                        <td>{{$nota->id}}</td>                        
                        <td>{{$nota->detalle}}</td>
                        <td>{{$nota->descripcion}}</td>
                        <td>{{$nota->fecha}}</td>                        
                        <td>{{$nota->valor}}</td>
                        <td>{{$nota->periodo->periodo}}</td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('js')

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

