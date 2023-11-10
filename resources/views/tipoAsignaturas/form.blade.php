<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Tipo Asignatura') }}
            {{ Form::text('nombreTipoAsignatura', $tipoAsignatura->nombreTipoAsignatura, ['class' => 'form-control' . ($errors->has('nombreTipoAsignatura') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tipo Asignatura']) }}
            {!! $errors->first('nombreTipoAsignatura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcion', $tipoAsignatura->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>