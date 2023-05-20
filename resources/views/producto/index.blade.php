<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight dark:bg-gray-700">
            {{ __('Productos') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto') }}
                            </span>

                            @php
                                $marca = request()->input('marca');
                                $tipo = request()->input('tipo');
                            @endphp

                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                @if ($marca != null)
                                    {{$marca}} 
                                @else
                                    Marca
                                @endif
                                </a>
                            
                                <ul class="dropdown-menu">
                                    @if ($marca != null)
                                        <li><a class="dropdown-item" href="{{ route('productos.index', ['tipo' => $tipo]) }}">Marca</a></li> 
                                    @endif 

                                    @foreach ($marcas as $m) 
                                    @if ($marca != $m->name)
                                        <li><a class="dropdown-item" href="{{ route('productos.index', ['marca' => $m->name,'tipo' => $tipo]) }}">{{$m->name}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>

                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    @if ($tipo != null)
                                        {{$tipo}} 
                                    @else
                                        Tipo
                                    @endif
                                </a>
                            
                                <ul class="dropdown-menu">
                                    @if ($tipo != null)
                                        <li><a class="dropdown-item" href="{{ route('productos.index', ['marca' => $marca]) }}">Tipo</a></li> 
                                    @endif 
                                    @foreach ($tipos as $t) 
                                    @if ($tipo != $t->name)
                                        <li><a class="dropdown-item" href="{{ route('productos.index', ['marca' => $marca, 'tipo' => $t->name]) }}">{{$t->name}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                    
                            <div class="float-right" style="margin: 1rem">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Nuevo') }}
                                </a>
                            </div>

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                                <div class="table-responsive">
                                    <div class="container">
                                        <div class="row row-cols-auto">
                                        @foreach ($productos as $producto) 
                                            <div class="card col col-sm-6" style="width: 18rem; margin: 1rem">
                                                <div class="card-img-top">
                                                    <img src="{{ $producto->URLimagen }}" class="card-img-top" width="100" height="300" alt="Imagen del producto">
                                                </div>
                                                <div class="card-body">
                                                    <h3 class="card-title">{{ $producto->name }}</h3>
                                                    <p class="card-text"><samp style="font-weight: bold; font-size: medium">Activo: </samp>
                                                        @if ($producto->activo == 1)
                                                            si
                                                        @endif
                                                        @if ($producto->activo == 0)
                                                            no
                                                        @endif
                                                    </p>
                                                    <p class="card-text"><samp style="font-weight: bold; font-size: medium">Precio: </samp>{{ $producto->precio }}</p>
                                                    <p class="card-text"><samp style="font-weight: bold; font-size: medium">Tipo: </samp>{{ $producto->tipo->name }}</p>
                                                    <p class="card-text"><samp style="font-weight: bold; font-size: medium">Marca: </samp>{{ $producto->marca->name }}</p>
                                                    <p class="card-text"><samp style="font-weight: bold; font-size: medium">Descripcion: </samp>{{ $producto->descripcion }}</p>
                                                    <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                    </form>                            
                                                </div>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>