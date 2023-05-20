<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $producto->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name', 'required' => 'required']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion', 'required' => 'required']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('URLimagen') }}
            {{ Form::text('URLimagen', $producto->URLimagen, ['class' => 'form-control' . ($errors->has('URLimagen') ? ' is-invalid' : ''), 'placeholder' => 'Urlimagen', 'required' => 'required']) }}
            {!! $errors->first('URLimagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio') }}
            {{ Form::text('precio', $producto->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio', 'required' => 'required']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Activo') }}
            {{ Form::select('activo', ['1' => 'Si', '0' => 'No'], $producto->activo, ['class' => 'form-control' . ($errors->has('activo') ? ' is-invalid' : '')]) }}
            {!! $errors->first('activo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::select('tipo_id', $tipo, $producto->tipo_id, ['class' => 'form-control' . ($errors->has('tipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::select('marca_id', $marca, $producto->marca_id, ['class' => 'form-control' . ($errors->has('marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>