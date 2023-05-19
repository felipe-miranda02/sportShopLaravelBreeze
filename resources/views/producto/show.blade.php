@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? "{{ __('Show') Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $producto->name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Urlimagen:</strong>
                            {{ $producto->URLimagen }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $producto->activo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Id:</strong>
                            {{ $producto->tipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Marca Id:</strong>
                            {{ $producto->marca_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
