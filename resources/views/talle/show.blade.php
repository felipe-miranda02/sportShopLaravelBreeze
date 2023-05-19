<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight dark:bg-gray-700">
            {{ __('Talles') }}
        </h2>
    </x-slot>

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Talle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('talles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $talle->name }}
                        </div>
                        <div class="form-group">
                            <strong>Activo:</strong>
                            {{ $talle->activo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
</x-app-layout>