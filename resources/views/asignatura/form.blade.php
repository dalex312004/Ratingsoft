<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Asignatura') }}
            {{ Form::text('nombreAsignatura', $asignatura->nombreAsignatura, ['class' => 'form-control' . ($errors->has('nombreAsignatura') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombreAsignatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('codigo', $asignatura->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcion',$asignatura->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion ']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo Asignatura') }}
            {{ Form::select('idTipoAsignatura', $tiposAsignatura, $asignatura->tipoAsignatura, ['class' => 'form-control' . ($errors->has('idTipoAsignatura') ? ' is-invalid' : '')]) }}
            {!! $errors->first('idTipoAsignatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Profesor Encargado') }}
            {{ Form::text('profesorEncargado', $asignatura->profesorEncargado, ['class' => 'form-control' . ($errors->has('profesorEncargado') ? ' is-invalid' : ''), 'placeholder' => 'Profesor Encargado']) }}
            {!! $errors->first('profesorEncargado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>