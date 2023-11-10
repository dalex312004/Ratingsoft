<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre Documento') }}
            {{ Form::text('nombre', $documento->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Tipo Documento']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo Documento') }}
            {{ Form::select('idTipoDocumento', $tiposDocumento, $documento->tipoDocumento, ['class' => 'form-control' . ($errors->has('idTipoDocumento') ? ' is-invalid' : '')]) }}
            {!! $errors->first('idTipoDocumento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Documento') }}
            {{ Form::file('enlace', ['class' => 'form-control' . ($errors->has('enlace') ? ' is-invalid' : '')]) }}
            {!! $errors->first('enlace', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>