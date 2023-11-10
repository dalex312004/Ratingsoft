@extends('adminlte::page')
@section('title', 'grado') 
@section('content_header')
    <h1>Agregar Estudiantes</h1>
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('asignarEstudiantes') }}" method="POST">
            @csrf     
            <table id="tuser" class="table table-striped">

                <thead class="bg bg-success">
                    <tr>
                        <th>N°</th>                             
                        <th>Estudiante</th>
                        <th>Identificacion</th>
                        <th>Sexo</th>
                        <th>Añadir</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                        <tr>
                            
                            <td>{{ $estudiante->id}}</td>                        
                            <td>
                                {{ $estudiante->persona->nombre1 }}
                                {{ $estudiante->persona->nombre2 }}
                                {{ $estudiante->persona->apellido1 }}
                                {{ $estudiante->persona->apellido2 }}
                            </td>
                            <td>{{ $estudiante->persona->identificacion }}</td>
                            <td>{{ $estudiante->persona->sexo }}</td>
                            <td width="280px">
                                <div class="form-check form-switch form-check-lg">
                                    {!! Form::checkbox('seleccionados[]', $estudiante->id, null, ['class' => 'form-check-input', 'id' => 'estudiante' . $estudiante->id]) !!}
                                </div>                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <input type="hidden" name="idGrado" value="{{ $idGrado}}">
            <button type="submit" class="btn btn-primary mt-3">Agregar Estudiantes</button>
        </form>
        
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