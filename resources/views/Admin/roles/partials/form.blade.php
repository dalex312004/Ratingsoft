<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<div class="form-group">
    {!!Form::label('name','Nombre')!!}
    {!!Form::text('name',null, ['class'=>'form-control','placeholder'=> 'ingrese el nombre del rol'])!!}
    
    @error('name')
        <small class="text-danger">
            {{$message}}
        </small>
    @enderror
</div>

<h2 class="h3">Lista de permisos</h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Permiso</th>
            <th>Seleccionar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2">
                <div class="form-check form-switch">
                    {!! Form::checkbox('select_all', null, null, ['class' => 'form-check-input', 'id' => 'select_all']) !!}
                    <label class="form-check-label" for="select_all">
                        Seleccionar Todos
                    </label>
                </div>
            </td>
        </tr>
        @foreach ($permissions as $permission)
        <tr>
            <td>{{ $permission->description }}</td>
            <td>
                <div class="form-check form-switch">
                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'form-check-input', 'id' => 'permission_' . $permission->id]) !!}
                    <label class="form-check-label" for="permission_{{ $permission->id }}">
                        Seleccionar
                    </label>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
 $(document).ready(function() {
    var selectAllCheckbox = $('#select_all');
    var permissionCheckboxes = $('input[name="permissions[]"]');
    
    selectAllCheckbox.click(function() {
        var isChecked = $(this).prop('checked');
        permissionCheckboxes.prop('checked', isChecked);
    });

    permissionCheckboxes.click(function() {
        var allChecked = permissionCheckboxes.length === permissionCheckboxes.filter(':checked').length;
        selectAllCheckbox.prop('checked', allChecked);
    });
});
</script>







