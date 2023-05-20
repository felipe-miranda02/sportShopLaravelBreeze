<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight dark:bg-gray-700">
            {{ __('Tipos') }}
        </h2>
    </x-slot>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('tipos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
                                        <th>Name</th>
                                        <th>Activo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipos as $tipo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $tipo->name }}</td>
                                            
                                            <td>
                                                @if ($tipo->activo == 1)
                                                    si
                                                @endif
                                                @if ($tipo->activo == 0)
                                                    no
                                                @endif
                                            </td>

                                            <td>
                                                <form action="{{ route('tipos.destroy',$tipo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipos.edit',$tipo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tipos->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>